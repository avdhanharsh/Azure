<?php
include '../components/connect.php';
ini_set('display_errors', 0); // or 'Off'
ini_set('log_errors', 1);
ini_set('error_log', '/path/to/error.log');
session_start(); // Make sure to start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header('location: login.php');
    exit(); // Terminate script to prevent further execution
}

// Get the username from the session
$username = $_SESSION['username'];

// Query to retrieve user's purchased playlists
$sql = "SELECT co.id, c.id AS course_id, c.title, c.description, c.thumb, c.price
        FROM orders AS co
        JOIN playlist AS c ON c.id = co.product_id
        WHERE co.username = :username";

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();

// Fetch the results
$playlists = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Playlists</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

   <style>
    /* Add this CSS in your admin_style.css file or create a new CSS file */

body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   /* background-color: #f2f2f2; */
}

.heading{
    text-align:center;
}

/* Style for the container holding the playlist boxes */
.box-container {
   display: flex;
   flex-wrap: wrap;
   justify-content: space-around;
   padding: 20px;
}

/* Style for individual playlist box */
.box {
   background-color: #fff;
   border: 1px solid #ddd;
   border-radius: 8px;
   overflow: hidden;
   margin: 10px;
   
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   transition: transform 0.3s ease-in-out;
}


.box:hover {
   transform: scale(1.05);
}

/* Style for playlist thumbnail */
.thumb img {
   width: 80%;
   height: auto;
   border-bottom: 1px solid #ddd;
}

/* Style for playlist title */
.title {
   font-size: 18px;
   font-weight: bold;
   margin: 10px 0;
}

/* Style for playlist description */
.description {
   font-size: 14px;
   color: #555;
   margin: 0 10px 10px;
}

/* Style for "View Playlist" button */
.btn {
   display: block;
   background-color: #4caf50;
   color: #fff;
   text-decoration: none;
   text-align: center;
   padding: 10px;
   border-radius: 5px;
   margin: 10px;
   transition: background-color 0.3s ease-in-out;
}

.btn:hover {
   background-color: #45a049;
}

/* Style for empty playlist message */
.empty {
   text-align: center;
   font-size: 16px;
   color: #555;
   margin: 20px;
}

/* Add media queries for responsiveness */
@media screen and (max-width: 768px) {
   .box {
      width: calc(33.33% - 20px);
   }
}

@media screen and (max-width: 480px) {
   .box {
      width: 100%;
   }
}
   </style>
</head>
<body>

<?php include '../components/student_header.php'; ?>

<section class="playlists">

   <h1 class="heading" >Purchased Playlists</h1>

   <div class="box-container">
      <?php
      if (!empty($playlists)) {
         foreach ($playlists as $playlist) {
            ?>
            <div class="box">
               <div class="thumb">
                  <img src="../uploaded_files/<?= $playlist['thumb']; ?>" alt="<?= $playlist['title']; ?>">
               </div>
               <h3 class="title"><?= $playlist['title']; ?></h3>
               <p class="description"><?= $playlist['description']; ?></p>
               <a href="view_playlist_student.php?get_id=<?= $playlist['course_id']; ?>" class="btn">View Playlist</a>
            </div>
            <?php
         }
      } else {
         echo '<p class="empty">No playlists purchased yet!</p>';
      }
      ?>
   </div>

</section>

<?php include '../components/footer.php'; ?>
<script src="../js/admin_script.js"></script>

<script>
   document.querySelectorAll('.playlists .box-container .box .description').forEach(content => {
      if(content.innerHTML.length > 100) content.innerHTML = content.innerHTML.slice(0, 100);
   });
</script>

</body>
</html>