<?php

include('./db/config.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    // Get email from POST request
    $userName = $_POST['username'];
    $userEmail = $_POST['email'];
    $createPassword = $_POST['password'];  
    $confirmPassword = $_POST['confirmPassword'];  

    if ($conn) {
      if ($createPassword != $confirmPassword) {
        $message = "Password not match";
    } else {
        // Hash the password
        $hashedPassword = password_hash($createPassword, PASSWORD_BCRYPT);
    
        // Create a prepared statement
        $stmt = $conn->prepare("INSERT INTO users (userName, userEmail, password_hash) VALUES (?, ?, ?)");
    
        // Bind parameters
        $stmt->bind_param("sss", $userName, $userEmail, $hashedPassword);
    
        // Execute the statement
        $stmt->execute();
    
        // Check for errors
        if ($stmt->errno) {
            echo "Error: " . $stmt->error;
        } else {
            // Registration successful
            header('Location: login.php');
        }
    
        $stmt->close();
    }
    
    } else {
        echo "Database connection failed.";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DevDiscuss</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Livvic:wght@300&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    /* Add your custom styles here */
    body {
    min-height: 100vh;
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    
    
  }
  
  
  
    .navbar{
     background: #0F2027;  
     background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  
     background: linear-gradient(to right, #2C5364, #203A43, #0F2027); 
    }
    
    .textWhite{
      color:white !important;
    }
    
    .footer {
      background-color: #343a40;
    color: #ffffff;
    position: ;
    bottom: 0;
    width: 100%;
    padding: 10px 0; 
    padding: 20px 0;
    text-align: center;
      
      }
    .container {
      max-width: 1200px; 
      margin: 0 auto; 
    }
    
    .social-icons {
      text-align: right;
    }
    
    .social-icons a {
      font-size: 24px;
      margin: 0 10px;
      color: #ffffff;
      transition: color 0.3s;
      margin-left: 10px;
      color: #007bff; 
    }
    
   .social-icons i:hover {
        color: #28a745;
      }
      

      .social-icons i {
      }    
    .mybtn{
            background: #0F2027;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2C5364, #203A43, #0F2027); 
            color:white;

        }
  </style>
</head>
<body>
  <?php include_once "./components/header.php"; ?>;

    <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Sign Up</h2>
                <form action="" method="POST">
                    <!-- Add your form fields here -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                      </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <?php if (!empty($message)): ?>
                            <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $message; ?>
                            </div>
                         <?php endif; ?>

                    <button type="submit" class="btn mybtn form-control">Sign Up</button>
                </form>

                <div class="mt-3 text-center">
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>

  
    <!-- Footer -->
    <?php   include "./components/footer.php" ;?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
           
            
   