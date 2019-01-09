<?php
session_start();
    ?>

<head>
    <title>Upload Product</title>


	
	
	</head>
<body>
<br>
<br>



<br>
<br>
<br>
 <script> 
function GEEKFORGEEKS()                                    
{ 
    var name = document.forms["Form"]["pid"];               
    
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   
   
   return true;
}
</script>
   
    <div class="col-sm-8 text-left">
	<form method="post" action="">
    <section id="contact" class="content-section ">
        <div class="contact-section">
            <div class="container-fluid " style="padding-left: 20%;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
					       <br><br><br>
                           <?php echo form_open('Upload/database_fun'); ?>
                            <?php if (isset($message)) { ?>
                            <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
                            <?php } ?>


                            <div class="form-group">
                                <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">Upload Products</b></label>
                            </div><br>

						    <div class="form-group">
                                <label style="font-size: 16px">Product ID</b></label>
                                <input type="text" class="form-control" name="pid" placeholder="">
                            </div>
                             <div class="form-group">
                               <label style="font-size: 16px">Product Name</label>
                               <?php echo form_input(array('id' => 'pname', 'name' => 'pname')); ?><br />
                            </div>
			
							<div class="form-group">
                                <label  style="font-size: 16px">Create ISQ number</label>
                                <?php echo form_input(array('id' => 'isq', 'name' => 'isq')); ?><br />
                              
                            </div>
							                           
                            <div class="form-group">
                                <label  style="font-size: 16px">Product MRP</label>
                               <?php echo form_input(array('id' => 'pmrp', 'name' => 'pmrp')); ?><br />

                            </div>
							
                           
							<div class="form-group">
                                <label  style="font-size: 16px">Product Height</label>
                               <?php echo form_input(array('id' => 'pheight', 'name' => 'pheight')); ?><br />
                            </div>
							
							<div class="form-group">
                                <label  style="font-size: 16px">Product Width</label>
                                <?php echo form_input(array('id' => 'pwidth', 'name' => 'pwidth')); ?><br />
                            </div>
							
							<div class="form-group">
                                <label  style="font-size: 16px"> Product Volume</label>
                               <?php echo form_input(array('id' => 'pvolume', 'name' => 'pvolume')); ?><br />
                            </div>

                            <div class="form-group">
                                <label  style="font-size: 16px"> Product Color</label>
                               <?php echo form_input(array('id' => 'pcolor', 'name' => 'pcolor')); ?><br />
                            </div>


                            <div class="form-group">
                                <label  style="font-size: 16px"> Product Diameter</label>
                               <?php echo form_input(array('id' => 'pdiameter', 'name' => 'pdiameter')); ?><br />
                            </div>


                            <div class="form-group ">
                                <label  style="font-size: 16px">Description of Product</label>
                                <?php echo form_input(array('type' => 'text-area','id' => 'pdesc', 'name' => 'pdesc')); ?><br />
                            </div>


                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload STL file</label>
                               <?php echo form_input(array('type' => 'file','id' => 'imagestl', 'name' => 'imagestl')); ?><br />

                           </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Front View</label>
                               <?php echo form_input(array('type' => 'file', 'id' => 'imagefront', 'name' => 'imagefront')); ?><br />
                           </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Top View</label> 
                               <?php echo form_input(array('type' => 'file', 'id' => 'imagetop', 'name' => 'imagetop')); ?><br />

                           </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Bottom View</label> 
                               <?php echo form_input(array('type' => 'file', 'id' => 'imagebottom', 'name' => 'imagebottom')); ?><br />

                           </div>

                            <div class="form-group">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Right-Side View</label>
                               <?php echo form_input(array('type' => 'file', 'id' => 'imageright', 'name' => 'imageright')); ?><br />

                           </div>

                            <div class="form-group">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Left-Side View</label> 
                               <?php echo form_input(array('type' => 'file', 'id' => 'imageleft', 'name' => 'imageleft')); ?><br />

                           </div>

                            <div class="form-group">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                <label  style="font-size: 16px">Upload Isometric View</label>
                               <?php echo form_input(array('type' => 'file', 'id' => 'imageisometric', 'name' => 'imageisometric')); ?><br />

                           </div>

							<div class="form-group" align="center">
                                <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
                                <?php echo form_close(); ?><br/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



			
           </div>
		</div>
    </div>
</form>


<div>
<footer class="container-fluid text-center">
        <?php include 'footer.php';?>
    </footer>
</div>



   
</body>
   
   
