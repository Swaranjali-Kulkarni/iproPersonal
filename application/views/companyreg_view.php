<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Register as acompany</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="IPRO3D Company Registration Form">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"  type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->
<body background="<?php echo base_url();?>img/lamps.jpg">
<?php include 'header_view.php'?>
<br>
<h1 class="title-agile text-center">Registration as Company</h1>
<div class="content-w3ls">
    <div class="content-bottom">
        <h2></h2>
        <form action="#" method="post">
            <div class="field-group">
                <span class="fa fa-laptop" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="cname"  placeholder="Company Name" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="cperson"  placeholder="Contact Person" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-user-circle" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="designation"  placeholder="Designation" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-phone-square" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="mobileno"  placeholder="Mobile Number" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-address-book-o" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="Location"  placeholder="Location" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-pencil" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="compregi"  placeholder="Company Registration Number" required>
                </div>
            </div>



           <!-- <div class="field-group">
                <span class="fa fa-lock" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="password" id="myInput" type="Password" placeholder="Password">
                </div>
            </div>
            <div class="field-group">
                <div class="check">
                    <label class="checkbox w3l">
                        <input type="checkbox" onclick="myFunction()">
                        <i> </i>show password</label>
                </div>

            <!-- script for show password -->
                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <!-- //script for show password -->

            <div class="wthree-field">
                <input id="saveForm" name="saveForm" type="submit" value="Register" />
            </div>
          <!--  <ul class="list-login">
                <li class="switch-agileits">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>

                    </label>
                </li>
                <li>
                    <a href="#" class="text-right"></a>
                </li>
                <div class="row">
                    <img src="../logo/facebook.svg">

                </div>
                <li class="clearfix"></li>
            </ul>-->
        </form>
        <?php
        if(isset($_POST['b_register'])){
            $query= "INSERT INTO `tblcompanydata`(`comname`, `conperson`, `email`, `mobile`, `designation`, `location`, `comregino`) VALUES ('".$_POST['t_cname']."','".$_POST['t_website']."','".$_POST['t_email']."','".$_POST['t_phone']."','".$_POST['t_password']."','".$_POST['t_cpassword']."','".$_POST['t_address']."','".$_POST['t_city']."','".$_POST['t_fdate']."')";
            $conn = mysqli_connect("localhost","root", "","dbipro3d");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";
            $check = mysqli_query($conn,$query);
            if ($check) {
                echo "New record created successfully";
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);

        }
        ?>
    </div>
</div>
</body>
<!-- //Body -->
</html>
