<?php
    include '../components/connect.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Courses</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_style.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <style>
       
    /* Add this style to your CSS file or in the style tag */
    .course {
    margin-bottom: 20px;
    }

    .course-cards {
    height: 100%; 
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    display: flex;
    flex-direction: column; /* Ensure the children stack vertically */
    background-color: var(--white);
    }

    .course-cards:hover {
    transform: scale(1.03);
    }

    .course-img img {
    width: 100%;
    height: 200px;
    border-bottom: 1px solid #ddd;
    
    }

    .course-body {
    flex: 1; /* Make the body fill the available space */
    padding: 15px;
    color: var(--light-color);
    
    font-size:1.5vh;
    font-weight:800;
    }

    .course-footer {
    padding: 10px 15px;
    background-color: #f8f9fa;
    text-align: center;
    background-color: var(--white);
    
    
    }

    .course-footer h4{
        font-size:2.2vh;
    color: var(--light-color);

    }

    .course-footer a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    }

    .course-footer a:hover {
    background-color: #0056b3;
    }

    </style>
    </head>
    <body>
        
    <?php include '../components/student_header.php'; ?>
    <section class="playlists">

    <div class="box-container">
   
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
                    <div class ="course">
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
                                
                                <a href="javascript:void(0)"
                                data-id="' . $row['id'] . '"
                                data-productname="' . $row['title'] . '"
                                data-amount="' . $row['price'] . '"
                                data-product-id="' . $playlist_id . '"
                                class="btn btn-primary buynow">Buy Now
                            </a>
                            </div>
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

    <?php
    $sql = "SELECT * FROM playlist LIMIT 3,3";
        $result = $conn->query($sql);

        if ($result !== false) { // Check if the query was successful
            $rowCount = $result->rowCount();

            if ($rowCount > 0) {
               
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $playlist_id = $row['id'];
                    $imagePath = "../uploaded_files/" . $row['thumb'];
                    echo '
                    <div class ="course">
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
                               
                                <a href="javascript:void(0)"
                                data-id="' . $row['id'] . '"
                                data-productname="' . $row['title'] . '"
                                data-amount="' . $row['price'] . '"
                                data-product-id="' . $playlist_id . '"
                                class="btn btn-primary buynow">Buy Now
                            </a>
                            </div>
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




    </div>
    </div>
<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $logged_in_username = $_SESSION['username'];
} else {
    // Handle the case when the user is not logged in (redirect to login page, show an error, etc.)
    // For example:
    header("location: login_page.php");
    exit;
}

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>

    $(".buynow").click(function()
    {

    var amount=$(this).attr('data-amount');
    var id=$(this).attr('data-id');
    var productname=$(this).attr('data-productname');
    var playlist_id = $(this).attr('data-product-id');
       
    var options = {
        "key": "rzp_test_PGpj7XycxtmuRS", // Enter the Key ID generated from the Dashboard
        "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "name": "TechEduca",
        "description": productname,
        "image": "https://example.com/your_logo",
        "handler": function (response){
            var paymentid=response.razorpay_payment_id;
           
            $.ajax({
                url:"payment-process.php",
                type:"POST",
                data:{product_id:playlist_id,payment_id:paymentid, username: '<?php echo $logged_in_username; ?>', },
                success:function(finalresponse)
                {
                    if(finalresponse=='done')
                    {
                        window.location.href="http://localhost/tech/student/myCourse.php";
                    }
                    else
                    {
                        alert('Please check console.log to find error');
                        console.log(finalresponse);
                    }
                }
            })
           
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
    });
    </script>
    <?php include '../components/footer.php'; ?>
<script src="../js/admin_script.js"></script>

    </body>
    </html>


