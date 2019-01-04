<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	
<title>IPRO3D-Contact_Us</title>
<style>
    body{
        width:100%;
        height:100%;
        font-family: 'Roboto Condensed', sans-serif;

    }


    h1,h2,h3 {
        margin:0 0 35px 0;
        font-family: 'Patua One', cursive;
        text-transform: uppercase;
        letter-spacing:1px;
		color:black;
    }

    p{
        margin:0 0 25px;
        font-size:18px;
        line-height:1.6em;
		color:black;
    }
    a{
        color:black;
    }
    a:hover,a:focus{
        text-decoration:none;
        color:black;
    }

    #contact{
        background:#DCDCDC;
        color:#333333;
        color:#f4f4f4;
        padding-bottom:80px;
		color:black;
    }

    textarea.form-control{
        height:100px;
		color:black;
    }
</style>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include 'header_view.php';?>
    </div>
</div>
<br><br><br>
<form method="post" action="">
    <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Feel free to contact us by filling the contact form or visiting our social sites like Facebook,Whatsapp,Twitter,Instagram,LinkedIn.</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="exampleInputName2">Name</label>

                               

                                <input type="text" class="form-control" name="fname" placeholder="Enter your name">

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail2">Mobile</label>
                                <input type="text" class="form-control" name="mobileno" maxlength="10" placeholder="Enter 10-digit Number">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="abc@gmail.com">
                            </div>
                        <div class="dropdown">
                            <label for="exampleInputEmail2">Info</label>
                            <select input type="text" class="form-control" name="info" maxlength="email" placeholder="Info">

                                    <option value="Student">Student</option>
                                    <option value="Industry">Industry</option>
                                    <option value="Employee">Employee</option>
                                    <option value="designer">Designer</option>
                                    <option value="maker">Maker</option>
                                    <option value="professional">Professional</option>
                                    <option value="other">Other</option>
                                </select>
                                    </div>
<br><br>
                        <div class="dropdown">
                            <label for="exampleInputEmail2">Where did you hear about us</label>
                            <select input type="text" class="form-control" name="info" maxlength="email" placeholder="Info">

                                <option value="social">Social Media</option>
                                <option value="news">Newspaper</option>
                                <option value="google">Google Search</option>
                                <option value="youtube">YouTube</option>
                                <option value="justdial">JustDial</option>
                                <option value="friend">Friend</option>
                                <option value="direct">Direct us</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
<br><br>
                        <div class="form-group ">
                                <label for="exampleInputText">Your Message</label>
                                <textarea  class="form-control" name="message" placeholder="Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default" name="enquire">Send Message</button>

                        <hr>
                        <h3>Our Social Sites</h3>
                        <ul class="list-inline banner-social-buttons">
                            <li><a href=" https://twitter.com/ipro3d" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                            <li><a href="https://www.facebook.com/ipro3d.tech" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                            <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram"> <span class="network-name">Instagram</span></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</form>


<?php
if(isset($_POST['enquire'])){
  /*  $query= "INSERT INTO `tblEnquiry`(`name`, `mobile`, `email`, `course`) VALUES ('".$_POST['fname']."','".$_POST['mobileno']."','".$_POST['email']."','".$_POST['message']."')";
    $conn = mysqli_connect("localhost","root", "","dbipro3d");
    $check = mysqli_query($conn,$query);*/
    $to = "hello@ipro3d.io";
    $subject = "Email Enquiry : ";
    $txt = "Student Name : ".$_POST['fname']." Requirement's : ".$_POST['message']." Mobile No. : ".$_POST['mobileno']." Email Address : ".$_POST['email'];
    $headers = "From: mit@arkay.org" . "\r\n" .
        "CC: kad.gaurav.gaurav447@gmail.com";
    mail($to,$subject,$txt,$headers);

    echo "<script>alert('Thanks For Contact...!');</script>";
}

?>
<div class="container-fluid" style="background-color: black;color: whitesmoke;">
    <div class="row">
<?php include 'footer_view.php';?>
    </div>
</div>
</body>

</html>