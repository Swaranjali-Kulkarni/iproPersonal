<?php $this->load->helper('url');?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EasyEnquiry</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url()."vendor/bootstrap/css/bootstrap.min.css";?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()."vendor/fontawesome-free/css/all.min.css";?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url()."vendor/datatables/dataTables.bootstrap4.css"; ?> "rel="stylesheet">

    <!-- Custom styles for this templateb -->
    <link href="<?php echo base_url()."css/sb-admin.css"; ?>" rel="stylesheet">
    
</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">IPRO3D Admin Dashboard</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">No</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <!--  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div> -->
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <!--   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url()."index.php/Upload/upload_product_admin_fun";?>" id="pagesDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Upload Product on Marketplace</span>
            </a>
             </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>index.php/Upload/ViewStlFile_fun" id="pagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>View STL File</span>
            </a>
                        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"  role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Generate Quotation</span>
            </a>
            
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>index.php/Upload/viewQuotations_fun"  role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>View All Quotations</span>
            </a>
            </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>View Enquiries</span>
            </a>
        </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Add Blogs</span>
            </a>
           </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>News Letter</span>
            </a>
            
        </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>index.php/Upload/SaleHistory_fun" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>View Bills</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/Upload/viewQuotations_fun">Add Course</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/Upload/SaleHistory_fun">View Course</a>
            </div>
        </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Generate Coupon</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url()."index.php/course/LoadCourse";?>">Add Course</a>
                <a class="dropdown-item" href="<?php echo base_url()."index.php/course/AllCourses";?>">View Course</a>
            </div>
        </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>index.php/Upload/SaleHistory_fun" id="pagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Sale History</span>
            </a>
           
        </li>
    </ul>
</body>
</html>