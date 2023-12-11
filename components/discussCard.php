<?php

// session_start();

$user = "";


if(!empty($_SESSION['username'])){
    $user = $_SESSION['username'];
}

?>
    <style>
       
        
        .discussion-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
           
        }

        .discussion-card-header {
            /* background-color: #007bff; */
            color: #fff;
            padding: 10px;
            background: #0F2027;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2C5364, #203A43, #0F2027); 
        }

        .discussion-card-body {
            padding: 15px;
        }

        .discussion-card-footer {
            background-color: #f8f9fa;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-info {
            margin-left: 10px;
        }

        .user-name {
            font-weight: bold;
        }
        .mybtn{
            background: #0F2027;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2C5364, #203A43, #0F2027); 
            color:white;

        }
    </style>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="discussion-card">
                    <div class="discussion-card-header">
                        <div class="user-info d-flex align-items-center">
                            <img src="https://static.vecteezy.com/system/resources/previews/020/168/661/original/pleased-woman-with-earrings-flat-avatar-icon-with-green-dot-editable-default-persona-for-ux-ui-design-profile-character-picture-with-online-status-indicator-color-messaging-app-user-badge-vector.jpg" alt="User Avatar" class="user-avatar">
                            <div class="user-name ml-2"><?php echo $user ? $user : "Guest"; ?></div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="discussion-card-body">
                        <h5 class="card-title">Discussion Title</h5>
                        <p class="card-text" contenteditable>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>

                    <!-- Card Footer -->
                    <div class="discussion-card-footer">
                        <button type="button" class="btn mybtn">Reply</button>
                        <span class="float-end">Posted on: January 1, 2023</span>
                    </div>
                </div>
                <!-- End Discussion Card -->
            </div>
        </div>
    </div>
