<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_input = $_POST['user_input'] ?? '';

    // Simple bot logic
    if (stripos($user_input, 'nurse') !== false) {
        $bot_reply = 'Sure, please provide your city and dates.';
    } elseif (stripos($user_input, 'oxygen') !== false) {
        $bot_reply = 'Yes, we can deliver it to your address.';
    } else {
        $bot_reply = 'Sorry, I didn’t understand. Can you please rephrase?';
    }

    // Save to DB
    $stmt = $conn->prepare("INSERT INTO chatbot_logs (user_input, bot_reply, source) VALUES (?, ?, 'voice')");
    $stmt->bind_param("ss", $user_input, $bot_reply);
    $stmt->execute();

    echo $bot_reply;
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>🎤 Voice Chatbot</title>
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .chat-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px 40px;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }

        #status {
            margin-top: 10px;
            font-size: 14px;
            color: #888;
        }

        strong {
            color: #222;
        }

        #userText, #botReply {
            display: block;
            margin-top: 8px;
            font-style: italic;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <h2>🎤 Voice Chatbot</h2>
        <button onclick="startRecognition()">🎙️ Speak Now</button>
        <p id="status">Click the mic and speak clearly...</p>
        <p><strong>You:</strong> <span id="userText">...</span></p>
        <p><strong>Bot:</strong> <span id="botReply">...</span></p>
    </div>

    <script>
        function startRecognition() {
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert("Speech Recognition not supported in this browser. Please use Chrome or Edge.");
                return;
            }

            const recognition = new SpeechRecognition();
            recognition.lang = 'en-US';
            recognition.interimResults = false;
            recognition.maxAlternatives = 1;

            document.getElementById("status").innerText = "Listening... 🎧";

            recognition.start();

            recognition.onresult = function(event) {
                const userText = event.results[0][0].transcript;
                document.getElementById('userText').innerText = userText;
                document.getElementById("status").innerText = "Processing... 🧠";

                fetch('chatbot_voice.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'user_input=' + encodeURIComponent(userText)
                })
                .then(response => response.text())
                .then(reply => {
                    document.getElementById('botReply').innerText = reply;
                    speak(reply);
                    document.getElementById("status").innerText = "Done ✅";
                });
            };

            recognition.onerror = function(event) {
                console.error("Speech recognition error:", event.error);
                document.getElementById("status").innerText = "Error: " + event.error;
            };
        }

        function speak(text) {
            const utterance = new SpeechSynthesisUtterance(text);
            speechSynthesis.speak(utterance);
        }
    </script>
</body>
</html>
