<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
        <html>
            <head>
             <meta http-equiv="Content-Type" content="text/html" CHARSET = "UTF-8" />
             <link rel="stylesheet" type="text/css" href="CSS/All.css"/>
            </head>
            <div id="email"> <body>
                <?php 
                //session_start();
                //echo $_SESSION['nome'];
               include("Connect.php");
                //include 'Class/Validacao.class.php'; 
                 //include 'Model/Insert.class.php';


                    if(isset($_POST['Cadastrar'])){

                                        function email(){
                                            
                                       
                                        $titulo=$_POST['titulo'];
                                        $destino = $_REQUEST['destinatario'];
                                        $mensagem = $_POST['mensagem'];
										$nome = $_POST['nome'];
                                        //echo $mensagem1;
                                        //echo $comunidade.$titulo.$destino;
 




                                        $headers = "Content-Yype:text/html; charset = UTF-8\n";
                                        $headers .= "From :jornal@pascoal.esy.es\n";
                                        $headers .= "X-Sender :<jornal@pascoal.esy.es>\n";
                                        $subject = "$titulo";
                                        $mensagem = "$mensagem \n\n\n";
                                        //$mensagem .= "Este email é automático, por favor, não responde-lo \nAtt.$nome";
                                        ///$mensagem .= "http://pascoal.esy.es/Sonda/CadastroOk.php?nome=$nome&id=$id";
                                        
                                        //$link = "<a href= '' > link </a>";
                                        //$mensagem = "Click no link para confirmar cadastro.";

                                        if(mail($destino,$titulo,$mensagem,$headers)){
										

?>
			<script>
			alert("Ação inserida com sucesso!")
			window.location="<?$_SERVER["SERVER_ADDR"];?>http://pascoal.esy.es/Jornal/Email_.php"
			</script>
			<?php
			
		}else{		
			?>
			<script>
			alert("Erro ao inserir ação")
			window.location="<?$_SERVER["SERVER_ADDR"];?>http://pascoal.esy.es/Jornal/Email_.php"
			</script>
			<?php
		}
                                        }
//	//}else
//		{
//		echo "<script>alert(\"Por favor, preencha os campos corretamente.\")</script>";
//		echo "<script>
//		history.back();   
//		</script>  
//				";
//		
//		
//	
//	}	
//                                        }else{
//                                                echo 'email não enviado';
//                                               // echo $headers.$nome.$email;
//                                                //echo $nome.$email;
//                                        }
//                                        }

                                       email();

 
                  




                                }
                                
                                ?>
            <center>
                        <form name="Cadastrar" method="post" action="">
                          <h2>Envair email ao administrador</h2></label><br><br><br>                            
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" style="margin-left:66px;">
                            <br>
							<label for="titulo">Destinatario</label>
                            <input type="text" name="destinatario"><br>
							<label for="titulo">Mensagem</label>
                            <input type="text" name="mensagem" style="margin-left:16px;"><br>
							<label for="titulo" name = "nome"> Nome</label>
                            <input name ="nome" type="text" style="margin-left: 64px; margin-top: 0px;"></text><br><br><br>
                            <input type="hidden" name="Cadastrar"/>
                            <center>
                            <input type="submit" name="OK" value="Enviar"/></center>
                        </form>
                        
                        
                        <?php


        //$query = $mysql_query("INSERT INTO `Start_emails`(`Id`, `Nome`, `Email`) VALUES ('','$nome' ,'$email,''");



                        ?>
                    </body>
                    </div>
        </html>
        