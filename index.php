<?php
session_start();


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
    display: flex;
    flex-direction: column;
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
    background: #0F2027;  
    background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  
    background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
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

    h1, h2 {
            animation: fadeInUp 1.5s ease-in-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
  </style>
</head>
<body>
    <!-- HEADER -->
    <?php include("./components/header.php"); ?>




    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">DevDiscuss</h1>
            <h2 class="text-center">A place for developers to discuss and share their
              knowledge
            </h2>
            </div>
            </div>
            </div>
            </div>
    </div>
    <!-- Main content -->
    
    
    <?php include "./components/discussCard.php" ?>


    <?php include "./components/discussCard.php" ?>


    <?php include "./components/discussCard.php" ?>




    
    
    
    
    
    <!-- Footer -->
    <?php   include "./components/footer.php" ;?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
            
   