<?php
include('connection.php'); // Connects to your DB

$response = ""; // Default response

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMessage = $_POST['user_message'];

    // Keyword-based bot response
    if (stripos($userMessage, 'nurse') !== false) {
        $response = "Sure, please provide your city and dates.";
    } elseif (stripos($userMessage, 'oxygen') !== false || stripos($userMessage, 'cylinder') !== false) {
        $response = "Yes, we can deliver it to your address.";
    } else {
        $response = "Sorry, I didn’t understand. Can you please rephrase?";
    }

    // Insert into chatbot_logs table
    $stmt = $conn->prepare("INSERT INTO chatbot_logs (user_message, bot_response, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $userMessage, $response);
    $stmt->execute();
}
?>

<!-- 💬 Chat UI -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CareConnect Chatbot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f0ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .chat-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 102, 204, 0.2);
        }
        input[type="text"] {
            width: 75%;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #b3d1ff;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .response {
            margin-top: 20px;
            font-weight: bold;
            color: #003366;
        }
    </style>
</head>
<body>
    <div class="chat-box">
        <form method="POST" action="">
            <input type="text" name="user_message" placeholder="Ask something..." required>
            <button type="submit">Send</button>
        </form>

        <?php if (!empty($response)) : ?>
            <div class="response">Bot: <?= htmlspecialchars($response) ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
