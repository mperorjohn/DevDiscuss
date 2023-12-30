<?php

session_start();

include('./db/config.php');

$user = "";

if (!empty($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if ($user) {
       
        $sql = "INSERT INTO posts (Title, Content, User) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

      
        $stmt->bind_param("sss", $title, $content, $user);

        
        $result = $stmt->execute();

        if ($result) {
            header("Location: index.php");
        } else {
           
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
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

    .encourage{
      font-family: 'Roboto', sans-serif !important;
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
    padding: 10px 0; 
    padding: 20px 0;
    text-align: center;
   
  }
  .createPost{
    background: #0F2027;  
    background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  
    background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
    color: #ffffff;

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

      
    .outline-is-none:focus {
      outline: none !important;
    }

  
    .hover-is-none:hover {
      background-color: transparent !important;
    }

    .hover-is-none:focus {
      background-color: transparent !important;
      box-shadow: none !important;
    }
    </style>
</head>
<body>
  <?php include "./components/header.php"; ?>
  
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center text-white  rounded-2 shadow-lg createPost mb-2 bg-secondary p-2 ">&lt;/Create Post&gt;</h2>
                <p class="text-center encourage">The tech community thrives on diverse voices, and yours is a valuable addition.</p>
                <!-- <hr> -->
                <form action="" method="post">
                    <!-- Add your form fields here -->
                    <div class="row mt-2">
                          <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postTitle">Title<span class="text-danger fw-bold">*</span></label>
                                    <input type="text" class="form-control hover-is-none outline-is-none" title="Create Post Title" id="postTitle" name="title" required>
                                </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group ">
                                  <label for="postTitle">Post Description:</label>
                                  <input type="text" class="form-control hover-is-none outline-is-none "  id="postTitle" title="Add Post Description" name="title" >
                            </div>
                        </div>

                    </div>
                    <!-- End of Title and Description -->
                   <div class="row mt-2">
                        <div class="col-md-6">
                          <label for="image">File</label>
                          <input type="file" class="form-control hover-is-none outline-is-none "  title="Add Image to Post" name="image" id="image" class="form-control" >
                        </div>
                        <div class="col-md-6">
                            <label for="#tag">Include #tag</label>
                           <input type="text" class="form-control hover-is-none outline-is-none " placeholder="#tag"  title="Inclued #tag to boost Impression" name="image" id="image" class="form-control" >

                        </div>
                   </div>
<!--                  TEXTAREA      -->
                    <div class="form-group mt-2">
                        <label for="postContent">Content<span class="text-danger fw-bold">*</span></label>
                        <textarea class="form-control hover-is-none outline-is-none" id="postContent "  title="Write your blog Post" name="content" rows="4" col="10" required></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn mybtn form-control">Create Post</button>
                </form>
            </div>
        </div>
    </div>

<div class="mt-5">

  <?php   include "./components/footer.php" ;?>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- </body>
</html> -->
