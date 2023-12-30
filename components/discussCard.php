<?php

// include('./db/config.php');




$sql = "SELECT User, Title, Content, CreatedAt FROM posts";
$result = $conn->query($sql);




function timeAgo($timestamp) {
    $currentTime = time();
    $timeDifference = $currentTime - strtotime($timestamp);

    $seconds = $timeDifference;
    $minutes = round($seconds / 60);           // value 60 is seconds
    $hours   = round($seconds / 3600);         // value 3600 is 60 minutes * 60 sec
    $days    = round($seconds / 86400);        // value 86400 is 24 hours * 60 minutes * 60 sec
    $weeks   = round($seconds / 604800);       // value 604800 is 7 days * 24 hours * 60 minutes * 60 sec
    $months  = round($seconds / 2629440);      // value 2629440 is ((365+365+365+365+366)/5/12) days * 24 hours * 60 minutes * 60 sec

    if ($seconds <= 60) {
        return "Just now";
    } elseif ($minutes <= 60) {
        return ($minutes == 1) ? "One minute ago" : "$minutes minutes ago";
    } elseif ($hours <= 24) {
        return ($hours == 1) ? "An hour ago" : "$hours hours ago";
    } elseif ($days <= 7) {
        return ($days == 1) ? "Yesterday" : "$days days ago";
    } elseif ($weeks <= 4.3) {  // 4.3 == 30/7
        return ($weeks == 1) ? "A week ago" : "$weeks weeks ago";
    } elseif ($months <= 12) {
        return ($months == 1) ? "A month ago" : "$months months ago";
    } else {
       
        return date("F j, Y", strtotime($timestamp));
    }
}

?>

<style>       
.discussion-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 20px;
    overflow: hidden;
   
}
.btn-blue {
        background-color: blue !important;
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
    color:white !important;
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
    background: cadetblue;  
    outline:none;
    border:none;
    color:white;

}
/* .mybtn:hover{
    background:none;
} */
.mybtn:focus{
    box-shadow: none;
}

@media (max-width: 575.98px)
{
    .impress{
        display:none;
    }
}

ul li{
    list-style-type: none;
    margin-right:none !important;
}
</style>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="container mt-5 mb-9">
        
        <div class="row justify-content-flex">
            <div class="col-md-10">
                <div class="discussion-card">
                    <div class="discussion-card-header">
                        <div class="user-info d-flex align-items-center">
                            <img src="https://static.vecteezy.com/system/resources/previews/020/168/661/original/pleased-woman-with-earrings-flat-avatar-icon-with-green-dot-editable-default-persona-for-ux-ui-design-profile-character-picture-with-online-status-indicator-color-messaging-app-user-badge-vector.jpg" alt="User Avatar" class="user-avatar">
                            <div class="user-name ml-2"><?php echo $row["User"]; ?></div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="discussion-card-body">
                        <h5 class="card-title mb-2"><?php echo $row['Title'] ;?></h5>
                        <hr>
                        <p class="card-text" contenteditable>
                            <?php echo $row['Content'];?>
                        </p>
                    </div>

                    <!-- Card Footer -->
                    <div class="discussion-card-footer">
                        <button type="button" class="btn mybtn hover-is-none" id="repost"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-arrow-up-square-fill " viewBox="0 0 16 16">
                        <path id="repost-icon" d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
                        </svg>
                        </button>
                        <span class="float-end"><?php echo  timeAgo($row['CreatedAt']) ?></span>

                        <button type="button" class="btn mybtn" id="love"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path id="love-icon" fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                            </svg>
                        </button>
                        <button type="button" class="btn mybtn" id="like"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="cadetblue" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path id="like-icon" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                        </svg>
                        </button>
                        <button type="button" class="btn mybtn" id="dislike">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                        <path id="dislike-icon" d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"/>
                        </svg>
                        </button>
                        
                    </div>
                </div>
                <!-- End Discussion Card -->
            </div>
            <div class="col-md-2">
                <div class="discussion-card impress">
                    <div class="discussion-card-header">
                        <h4>Impressions</h4>
                    </div>
                    <div class="card-body text-white">
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square-fill mr-2" viewBox="0 0 16 16">
                            <path  d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
                            </svg>Recap
                            </li>

                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill mr-2" viewBox="0 0 16 16">
                        <path  d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                        </svg>Like</li>


<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down mr-2" viewBox="0 0 16 16">
  <path id="like-icon" d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"/>
</svg>Dislike

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <?php
    }
} else {
    echo "No discussions found";
}

?>




<script>
document.addEventListener("DOMContentLoaded", function () {
    function changeColor(buttonId, color) {
        document.getElementById(buttonId).classList.add(color);
    }

    document.getElementById("like").addEventListener('click', function() {
        changeColor("like", "btn-blue");
    });

    document.getElementById("dislike").addEventListener('click', function() {
        changeColor("dislike", "btn-blue");
    });

    document.getElementById("repost").addEventListener('click', function() {
        changeColor("repost", "btn-blue");
    });
});
</script>
