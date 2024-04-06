<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo '<p class="error">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    ?>
    <form action="register.php" method="post">
        <div class="form__group">
         <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
        </div>
        <br>
        <div class="form__group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
        </div>
        <br>
        <div class='form_group'>
        <label for="number">Mobile No:</label>
        <input type="number" id="number" name="number" > 
         </div>
        <br>
           <div class='form_group'>
            <label for="">Select Color</label>
            <div>
              <label for="red">Red</label>
              <input type="checkbox" id="red" name="color" value="Red" />
              <br />
              <label for="blue">Blue</label>
              <input type="checkbox" id="blue" name="color" value="Blue" />
              <br />
              <label for="green">Green</label>
              <input type="checkbox" id="green" name="color" value="Green" />
              <br />
            </div>
        </div>
         <br>
         <div class='form_group'>
          <label for="selectOption">Choose an option:</label>
          <select id="selectOption" name="contry">
            <option value="Pakistan">Pakistan</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Turkey">Turkey</option>
            <option value="Syria">Syria</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
          </select>
          </div>
        <br>    
        <div class='form_group'>    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
        </div>
        <br>
        <div class='form_group'>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" >
        </div>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
