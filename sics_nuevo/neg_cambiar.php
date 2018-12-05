<?php 

session_start();
include ("conexion.php");


        if(isset($_SESSION['Documento_usuario'])) { // comprobamos que la sesión esté iniciada
            if(isset($_POST['enviar'])) {
                if($_POST['clave_actual'] != $_POST['clave_nueva']) {
                    echo'<script type="text/javascript">
                                    alert("Las contraseñas ingresadas no coinciden");
                                     window.location.href="cambiar_password.php";
                            </script>';
                }else {
                    $Documento_usuario = $_SESSION['Documento_usuario'];
                    $usuario_clave = mysql_real_escape_string($_POST['clave_actual']);
                    $sql = "UPDATE usuario SET Contrasena='".$usuario_clave."' WHERE Documento_usuario='".$Documento_usuario."'";
                        if (!$result = $db->query($sql))
                        {   
                            die ('Error de conexion[' . $db->error . ']');
                        }
                        if($sql) {
                        echo'<script type="text/javascript">
                                    alert("CONTRASEÑA CAMBIADA CORRECTAMENTE");
                                     window.location.href="Administrador.php";
                            </script>';
                        }else {
                            echo '<script language="javascript">alert("No se puedo cambiar la contraseña"); location.href="cambiar_password.php"</script>';
                            
                        }
                }
            }else {
                 }
        }else {
            echo "Acceso denegado.";
        }


?>