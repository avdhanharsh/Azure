<?php 
include '../components/connect.php';
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<?php include '../components/student_header.php'; ?>
<section class="contents">
<div class="container mt-3">
  <h2>Payment has been successful</h2>
  
  <div class="alert alert-success">
    <strong>Please note your payment id!</strong><?php echo $_SESSION['paymentid'];?> 
    <!-- <strong>Please note your order id!</strong><?php echo $_SESSION['product_id'];?> 
    <strong>Please note your order date!</strong><?php echo $_SESSION['dt'];?>  -->
  </div>
  
</div>
<?php include '../components/footer.php'; ?>

</body>
</html>
