<?php

session_start();

$user = "";

if(!empty($_SESSION['username'])){
  $user = $_SESSION['username'];
}

if(isset($_POST['submit'])){
  

  
  $title = $_POST['title'];
  $content = $_POST['content'];


  if($user){
    header("Location: index.php");
    
  }else{
    header('Location: login.php');
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
    background: #0F2027;  
    background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  
    background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
    color: #ffffff;
    position: fixed;
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
    </style>
</head>
<body>
  <?php include "./components/header.php"; ?>
  
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center">Create your own discussion</h2>
                <form action="" method="post">
                    <!-- Add your form fields here -->
                    <div class="form-group">
                        <label for="postTitle">Title:</label>
                        <input type="text" class="form-control" id="postTitle" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="postContent">Content:</label>
                        <textarea class="form-control" id="postContent" name="content" rows="4" required></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary form-control">Create Post</button>
                </form>
            </div>
        </div>
    </div>


    <?php   include "./components/footer.php" ;?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- </body>
</html> -->
