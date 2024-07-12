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
                        <a href="book.php"><i class="fa fa-qrcode "></i>Books</a>
                    </li>
                    <li>
                        <a href="add-book.php"><i class="fa fa-qrcode "></i>Add Book</a>
                    </li>
                    <li>
                        <a href="about.php"><i class="fa fa-qrcode "></i>About</a>
                    </li>
                    <li>
                        <a href="add-about.php"><i class="fa fa-qrcode "></i>Add About</a>
                    </li>

                    <li>
                        <a href="message.php"><i class="fa fa-qrcode "></i>Messages</a>
                    </li>
                    <li>
                        <a href="education.php"><i class="fa fa-qrcode "></i>Education</a>
                    </li>
                    <li>
                        <a href="add-education.php"><i class="fa fa-qrcode "></i>Add Education</a>
                    </li>

                    <li>
                        <a href="experience.php"><i class="fa fa-qrcode "></i>Experience</a>
                    </li>
                    <li>
                        <a href="add-experience.php"><i class="fa fa-qrcode "></i>Add Experience</a>
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

        