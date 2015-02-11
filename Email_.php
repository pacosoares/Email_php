<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Autor: Pascoal J.M.S.
Date: 2014-02-11
-->
<!doctype html>
        <html>
            <head>            
             <meta http-equiv="Content-Type" content="text/html" CHARSET = "UTF-8" />
             <link rel="stylesheet" type="text/css" href="CSS/All.css"/>
            </head>
            <div id="email"> <body>
                <?php 
               include("Connect.php");
               

			                    if(isset($_POST['Cadastrar'])){

			                                        function email(){
			                                                                                 
			                                        $title=$_POST['title'];
			                                        $Email_send = $_REQUEST['email_send'];
			                                        $message = $_POST['message'];
													$youremail = $_POST['your_email'];
													$name = $_POST['name'];
			                                        $headers = "Content-Yype:text/html; charset = UTF-8\n";
			                                        $headers .= "From :".$youremail."\n";
			                                        $headers .= "X-Sender :<".$youremail.">\n";
			                                        $subject = "$title";
			                                        $message = "$message \n\n\n";
			                                        

			                                 if(mail($Email_send,$title,$message,$headers)){
													

			?>
						<script>
						alert("Sending email with success!")
						window.location="<?$_SERVER["SERVER_ADDR"];?>http://pascoal.esy.es/Jornal/Email_.php"
						</script>
						<?php
						
					}else{		
						?>
						<script>
						alert("Error to Send Email")
						window.location="<?$_SERVER["SERVER_ADDR"];?>http://pascoal.esy.es/Jornal/Email_.php"
						</script>
						<?php
					}
			                                        }

			                                       email();
			                                       
			     
			                                }
                                
                                ?>
                        <center>
                        <form name="Cadastrar" method="post" action="">
                          <label>
                          <h2>Send one e-mail to Anyone.</h2>
                          </label><br><br><br>                            
                            <label for="title">Title</label>
                            <input type="text" name="title" style="margin-left:78px; width:430px;">
                            <br>
							<label for="title">Email_Send</label>
                            <input type="text" name="email_send" style="margin-left:3px; width:430px;"><br>	
                            
                            <label for="title">Your Email</label>
                            <input type="text" name="your_email" style="margin-left:14px; width:430px;"><br>								
							<label for="title" name = "name"> Name</label>
                            <input name ="name" type="text" style="margin-left: 65px; margin-top: 0px; width:430px;"></text><br><br>
                            
                            <label for="title">Message</label>
                            <textarea name="message" style="margin-left:38px; width:430px;" cols="1" rows="5"> </textarea><br>                            <br><br>
                            <input type="hidden" name="Cadastrar"/>
                            <center>
                            <input type="submit" name="OK" value="SEND_EMAIL"/></center>
                        </form>
                        
                        
                       
                      </body>
                  
                    </div>
       <center> <footer>Solutions in PHP</footer></center>


       
        </html>
        