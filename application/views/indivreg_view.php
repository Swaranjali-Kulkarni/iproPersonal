<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Register as Individual</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="IPRO3D Register As Individual Form">
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all">
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

<body style="background: url(<?php echo base_url(); ?>img/lamps.jpg) no-repeat center;">
<?php include 'header_view.php'?>
<br>
<h1 class="title-agile text-center">Registration as Individual</h1>
<div class="content-w3ls">
    <div class="content-bottom">
        <!--<h1>Register as Individual</h1>-->
        <form action="#" method="post">
            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="sname"  placeholder="Student Name" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-envelope" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="email"  placeholder="Email Id" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-mobile-phone" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="mobileno"  placeholder="Mobile" required>
                </div>
            </div>


            <div class="field-group">
                <span class="fa fa-calendar" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="dob"  placeholder="Date Of Birth" equired>
                </div>
            </div>

            <span class="" aria-hidden="true"></span>
            <h2 class=""></h2>
            <input type="radio" name="gender" value="male"> <b>Male</b>
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other<br><br>




            <div class="field-group">
                <span class="fa fa-home" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="address"  placeholder="Address" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-address-book" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="country"  placeholder="Country" required>
                </div>
            </div>



            <div class="field-group">
                <span class="fa fa-address-card" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="state"  placeholder="State" required>
                </div>
            </div>


            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="city"  placeholder="City" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-map-pin" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="pincode"  placeholder="Pincode" required>
                </div>
            </div>


            <?php
            if(isset($_POST['b_register'])){
                $query= "INSERT INTO `company_register`(`company_name`, `company_website`, `company_email`, `company_phone`, `company_password`, `company_cpassword`, `company_address`, `company_city`, `company_fdate`) VALUES ('".$_POST['t_cname']."','".$_POST['t_website']."','".$_POST['t_email']."','".$_POST['t_phone']."','".$_POST['t_password']."','".$_POST['t_cpassword']."','".$_POST['t_address']."','".$_POST['t_city']."','".$_POST['t_fdate']."')";
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
    </div>
</div>
</body>
<!-- //Body -->
</html>
