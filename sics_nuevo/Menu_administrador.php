<aside id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div id="toggle-sidebar"  > 
                    <div></div>
                    <div></div>
                    <div></div>
                </div>


<!-- CONSULTA NOMBRE DE USUARIO -->

<?php  

  $doctemp=$_SESSION["Documento_usuario"];
  include ('conexion.php');
   $sqlx="SELECT * FROM usuario where Documento_usuario='$doctemp'";
          if (!$resultx=$db->query($sqlx))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$resultx->fetch_assoc())
          {
            $ddusuario=stripslashes($row["Nombre_usuario"]);
          }           
?>


<!-- CONSULTA NOMBRE DE USUARIO -->


<!-- CONSULTA NOMBRE DE ROL -->

<?php  
 
  
   $sql="SELECT * FROM usuario INNER JOIN permisos ON idusuario = usuario_idUsuario INNER JOIN rol ON idRol = rol_idRol WHERE Documento_usuario = '$doctemp'";
          if (!$result=$db->query($sql))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result->fetch_assoc())
          {
            $ddrol=stripslashes($row["Descripcion_rol"]);
          }           
?>


<!-- CONSULTA NOMBRE DE ROL -->

                
                <div class="sidebar-brand">
                    <center><a >SABOR COSTEÑO</a></center>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <a href="perfil_usuario.php"><img class="img-responsive img-portfolio img-hover" src="images/user.jpg" alt="User picture"></a>
                    </div>
                    <div class="user-info">
                        <span class="user-name">

                         <?php  echo "<font color='white'>"; echo $ddusuario; echo"</font>" ?>
                                
                        </span>
                        <span class="user-role">
                            
                           <?php  echo "<font color='white'>"; echo $ddrol; echo"</font>" ?>      

                        </span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span> <BR>                       
                    </div>
                </div>
                


                <div class="sidebar-menu">
                    <CENTER><a href="perfil_usuario.php"><button class="btn btn-primary"> PERFIL</button></a></CENTER>
                    <ul>
                        <li class="header-menu">
                            <span>Inicio</span>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Productos</span>
                                
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="listar_producto_admin.php">Lista Productos</a>
                                    </li>
                                    <li>
                                        <a href="#">Requerir Productos</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Reportes</span>
                                
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Reporte de Ventas</a>
                                        <div class="sidebar-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="reporte_mesa.php"> Reporte Por Mesa</a>
                                                </li>
                                                   <li>
                                                    <a href="reporte_ventas_usuario.php"> Reporte Por Usuario</a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </li>
                                   
                                    <li>
                                        <a href="#">Reporte de Inventario</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-diamond"></i>
                                <span>Platos</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="platos.php">Lista Platos</a>
                                    </li>
                                    <li>
                                        <a href="Tipo_plato.php">Categoria Platos</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Registro Mesas</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="mesa.php">Listar Mesa</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Permisos</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="listar_usuarios.php">Listado de Usuarios</a>
                                    </li>
                                    <li>
                                        <a href="permisos.php">Asignar Permisos</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <div class="sidebar-footer">
               <a href="#">
                   <i class="fa fa-bell"></i>
               </a>
            </div>
        </aside>