<!DOCTYPE html>
<html lang="en">
<head>
    
  <meta charset="UTF-8">
  <title>Unsubscribe</title>
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
      background-color: #f44336;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background-color: #e53935;
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
    <h2>Unsubscribe</h2>
    <form method="POST">
      <input type="email" name="unsubscribe_email" placeholder="Enter your email" required>
      <button id="submit-unsubscribe" type="submit">Unsubscribe</button>
    </form>

    <h2>Verify Unsubscription Code</h2>
    <form method="POST">
      <input type="text" name="unsubscribe_verification_code" placeholder="Enter code" required>
      <button id="verify-unsubscribe" type="submit">Verify</button>
    </form>
    <p class="note"><a href="index.php">Back to Register Page</a></p>
  </div>
</body>
</html>
