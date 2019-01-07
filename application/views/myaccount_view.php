<?php
session_start();
?>

    <head>

        <title>Home</title>
        <!-- Latest compiled and minified CSS -->
        
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;}
            }

            #enq_panel, #enq_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #enq_panel {
                padding: 50px;
                display: none;
            }


            #adm_panel, #adm_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*//
            }

            #adm_panel {
                padding: 50px;
                display: none;
            }

            img {
                border-radius: 50%;
            }
            #rpt_panel, #rpt_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #rpt_panel {
                padding: 50px;
                display: none;
            }

            #admin_panel, #admin_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #admin_panel {
                padding: 50px;
                display: none;

            }




            #std_panel, #std_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #std_panel {
                padding: 50px;
                display: none;
            }




            #myac_panel, #myac_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #myac_panel {
                padding: 50px;
                display: none;
            }


            #admission_panel, #admission_flip {
                padding: 5px;
                text-align: center;
                /*background-color: #e5eecc;
                border: solid 1px #c3c3c3;*/
            }

            #admission_panel {
                padding: 50px;
                display: none;
            }




        </style>



    </head>
    <body>
    <?php include 'customer_header.php' ?>
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
        }</script>

    <div class="col-sm-8 text-left">
  <form method="post" action="">
    <section id="contact" class="content-section ">
        <div class="contact-section">
            <div class="container-fluid " style="padding-left: 20%;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1" align="center">
                     <br><br><br>
                      <div class="form-group">
                         <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">My Account</b></label>
                      </div>
					            <br>
	                                <div class="form-group" >
                                        <img src="img/banner1.jpg" height="100px" class="img img-square">
                                        <br><br><br>
                                        <label style="font-size: 16px">Profile Picture</b></label>
                                        <input type="submit" class="btnRegister" name="edit" style="width:20%" value="Edit"/>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Customer Name</label>
                                        <input type="submit" class="btnRegister" name="edit" style="width:20%" value="Edit"/>                       
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Mobile no</label>
                                        <input type="submit" class="btnRegister" name="edit" style="width:20%" value="Edit"/>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label style="font-size: 16px">Add your Company Email Id</label>
                                       <input type="text" class="form-control" name="c_email" placeholder="">
                                   </div>
                                   <br>

                                    
                                    <div class="form-group" align="center">
                                        <input type="submit" class="btnRegister" name="save" style="width:20%" value="Save"/>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
           </form>
       </div>

    </body>

</html>
     <div>
        <footer class="container-fluid text-center">
            <!--?php include 'footer.php';?-->
        </footer>
    </div>



