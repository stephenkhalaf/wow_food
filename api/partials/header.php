<?php include_once "./config/database.php" ?>
<?php 
if(!isset($_SESSION['unique_id'])){
    header('Location: login.php');
}else{
    $id = $_SESSION['unique_id'];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="php/logout.php?unique_id=<?php echo $id; ?>"   style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="admin.php"><i class="fa fa-qrcode "></i>Admin</a>
                    </li>
                    <li>
                        <a href="add-admin.php"><i class="fa fa-qrcode "></i>Add Admin</a>
                    </li>
                    <li>
                        <a href="category.php"><i class="fa fa-qrcode "></i>Categories</a>
                    </li>
                    <li>
                        <a href="add-category.php"><i class="fa fa-qrcode "></i>Add Category</a>
                    </li>
                    <li>
                        <a href="food.php"><i class="fa fa-qrcode "></i>Foods</a>
                    </li>
                    <li>
                        <a href="add-food.php"><i class="fa fa-qrcode "></i>Add Food</a>
                    </li>
                    <li>
                        <a href="order.php"><i class="fa fa-qrcode "></i>Orders</a>
                    </li>
                    <li>
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="ui.php"><i class="fa fa-table "></i>UI Elements  <span class="badge">Included</span></a>
                    </li>
                </ul>
            </div>

        </nav>

        