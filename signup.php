<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['name'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $role      = 'user'; // default role

    // Check if email already exists
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        echo "<script>
            alert('Email already registered!');
            window.location.href = 'index.php';
        </script>";
    } else {
        // Insert using correct column names
        $sql = "INSERT INTO users (full_name, email, password, role) 
                VALUES ('$full_name', '$email', '$password', '$role')";
        
        if ($conn->query($sql) === TRUE) {
            // Redirect using PHP
            header("Location: index.php");
            exit;
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }
}
?>
<!-- Signup Form UI -->
<style>
    body {
        background-color: #e6f0ff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-content {
        background-color: #ffffff;
        padding: 40px 50px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 102, 204, 0.15);
        width: 100%;
        max-width: 450px;
    }
    .login-content h3 {
        color: #0056b3;
        text-align: center;
        margin-bottom: 30px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        color: #003366;
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
    }
    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #cce0ff;
        border-radius: 5px;
        font-size: 15px;
    }
    .btn.oneMusic-btn {
        background-color: #007bff;
        border: none;
        color: white;
        font-weight: bold;
        width: 100%;
        padding: 12px;
        border-radius: 5px;
        font-size: 16px;
        margin-top: 10px;
        cursor: pointer;
        transition: 0.3s ease;
    }
    .btn.oneMusic-btn:hover {
        background-color: #0056b3;
    }
    p {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #333;
    }
    a {
        color: #0056b3;
        text-decoration: none;
        font-weight: bold;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
<div class="login-content">
    <h3>Create an Account</h3>
    <div class="login-form">
        <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Create a password" required />
            </div>
            <button type="submit" class="btn oneMusic-btn">Sign Up</button>
            <p>Already have an account? <a href="logins.php">Login here</a></p>
        </form>
    </div>
</div>
