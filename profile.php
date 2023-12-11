<?php
// Include header
$header = include_once "./components/header.php";
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
    /* background-color: #f8f9fa; Set your desired background color */
    padding: 10px 0; /* Adjust the padding as needed */
    padding: 20px 0;
    text-align: center;
        /* position: relative; */
      }
    .container {
      max-width: 1200px; /* Set a maximum width for the container if needed */
      margin: 0 auto; /* Center the container */
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
  </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">User Profile</h2>

                <div class="card">
                    <div class="card-body">
                        <!-- <h3 class="card-title"><?php echo $userData['username']; ?></h3> -->
                        <!-- <p class="card-text"><strong>Email:</strong> <?php echo $userData['email']; ?></p> -->
                        <!-- <p class="card-text"><strong>Bio:</strong> <?php echo $userData['bio']; ?></p> -->
                    </div>
                </div>

                <!-- Add additional content or features for the user's dashboard here -->

                <div class="mt-3">
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Include your footer here or create a new one for this page -->
    
    <!-- Include your JavaScript scripts here -->

    <?php
    // Include additional scripts if needed
    include "./components/footer.php";
    ?>
</body>
</html>
