<html>

<head>
    <title>Upload Form</title>
</head>

<body>
<?php echo $error;?>
<?php echo form_open_multipart('upload/do_upload');?>

<form action = "" method = "">
    <input type="text" name="product_name"/>
    <input type = "file" name = "userfile" size = "20000" />
    <br /><br />
    <input type = "submit" value = "upload" /></br></br>
    <a href="<?php echo base_url(); ?>index.php/Upload/dashboard_fun">Dashboard</a></form>

</body>

</html>