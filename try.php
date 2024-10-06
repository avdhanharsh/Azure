<?php

include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">
   <link rel="stylesheet" href="../style.css">
   </head>
<body>
<?php include '../components/student_header.php'; ?>
<?php
$sql = "SELECT * FROM playlist LIMIT 3";
    $result = $conn->query($sql);

    if ($result !== false) { // Check if the query was successful
        $rowCount = $result->rowCount();

        if ($rowCount > 0) {
            
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $playlist_id = $row['id'];
                $imagePath = "../uploaded_files/" . $row['thumb'];
                echo '
                    <div class="course-cards" >
                        <div class="course-img">
                        <img src="' .str_replace('.','.', $imagePath) . '" alt="">

                        </div>
                        <div class="course-body">
                            <h4>'.$row['title'].'</h4>
                            <p>'.$row['description'].'</p>
                        </div>
                        <div class="course-footer">
                            <h4>Price : &#8377; '.$row['price'].'</h4>
                            <a href="../checkout.php">Enroll</a>
                        </div>
                    </div>
                ';
            }
        } else {
            echo "No rows found.";
        }
    } else {
        // Handle query error
        echo "Error executing the query: " . $conn->errorInfo()[2];
    }
?>
<?php include '../components/footer.php'; ?>


