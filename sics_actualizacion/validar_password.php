<?php

class Olvido_modelo
{
//*************************varivable globales ****************************//
    private $db;
    private $ndocumento;
    private $correo;
    private $codigo;
    private $asunto;
	private $heade;
    private $texto;

//***************************************************************//
//***********************constructor****************************//   
    public function __construct()
	{


    }
    

//***************************************************************//


//***********************Metodo Generador de codigos *************//	

public function  set_codigo ($codigo)
{


      $azar = "1234567890abcdefghijklmnopqrstuvwxyz";

        for($i = 1; $i < 8; $i++) 
        { 

     $codigo .= $azar{rand(0, 35)};

            
     } 
     $this->codigo=$codigo;
      }


//*********************Metodo Correo*****************************//	
                    

	public  function correo()
	{

		$asun="Codigo usuario";
		$head="MIME-Version: 1.0\r\n";
		$head.="Content-type: text/html; charset=iso-8859-1\r\n";
		$head.="From: codigo usuarios < rafaelfc515454@gmail.com >\r\n";
		$text="<h3>Bienvenido a Newviewsoft<h3><br><br><a><img src='logo.png' width='50px' /></a><br><br> tu nuevo codigo es:  <b>$this->codigo<b><br><br> por favor ingresar a esta direccion y verificar					que todo este correcto http://localhost:8080/proyecto/ <br><br> gracias por usar nuestro sistema de informacion";
		$this->asunto=$asun;
		$this->heade=$head;
		$this->texto=$text;
	
	}	

//***************************************************************//
//***********************Metodo recive datod *******************//
    public function set_olvidoc($ndoc,$correo)
    {
        $this->ndocumento=$ndoc;
        $this->correo=$correo;
    }
//***************************************************************//
//***********************Metodo consulta sql*******************//

    public function set_recuperar()
    {
    	require_once ("conexion.php");
			$userexiste=0;

    	$sql= "SELECT count(*) AS total FROM usuario WHERE Documento_usuario='$this->ndocumento' AND Correo_usuario='$this->correo'";
    	$result = $db->query($sql);
		$values = $result->fetch_assoc(); 
		$num_rows = $values['total']; 


        if($num_rows==1)
        {
            $prueba="UPDATE usuario SET Contrasena='$this->codigo' WHERE Documento_usuario='$this->ndocumento' AND Correo_usuario='$this->correo'";

			$result2= $db->query($prueba);

			if ($result2==false){

				echo "error al registrar";
					}else {

					$exito=mail($this->correo,$this->asunto,$this->texto,$this->heade);

					if($exito==false){

						echo "correo enviado";

					}else{

					echo "error en mail";
				}
      		 }

    	}else{

    		echo "error : este usuario no existe";
    	}

	}
}


$doc=$_POST['Documento_usuario'];
$correo=$_POST['Correo_usuario'];	

$nuevo=new Olvido_modelo();
$nuevo->set_codigo(rand(1,9));
$nuevo->correo();
$nuevo->set_olvidoc($doc,$correo);
$nuevo->set_recuperar();




?>