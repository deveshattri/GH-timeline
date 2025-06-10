<!DOCTYPE html>
<html lang="en">
<head>
    
  <meta charset="UTF-8">
  <title>Email Registration</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      padding: 30px;
    }
    .container {
      background: white;
      max-width: 400px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin: 8px 0 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
    .note {
      font-size: 12px;
      color: #777;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register Email</h2>
    <form method="POST">
      <input type="email" name="email" placeholder="Enter your email" required>
      <button id="submit-email" type="submit">Submit</button>
    </form>

    <h2>Enter Verification Code</h2>
    <form method="POST">
      <input type="text" name="verification_code" maxlength="6" placeholder="Enter 6-digit code" required>
      <button id="submit-verification" type="submit">Verify</button>
    </form>
    <p class="note">Already subscribed? You can unsubscribe below.</p>
    <p class="note"><a href="unsubscribe.php">Go to Unsubscribe Page</a></p>
  </div>
</body>
</html>
