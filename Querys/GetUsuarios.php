<?php
/*  include("../ConnectionBD/Connection.php");
  $con = Conectar();
  echo "Realizado connection";
  //$resultado = $con->Query("Select * from user");
  $resultado = mysql_query("Select * from users") or die(mysql_error);
  echo $resultado + " REs";
  // creamos un variable array del tipo array la cual almacena todos los registros
  $datos = array();
  // iteramos todos los registros devueltos y llenamos el ArrayAccess

  while ($row = mysql_fetch_assoc($resultado)) {
    $datos[] = $row;
  }
  // convertimos a JSON para que angular  pueda leerlo
  echo " Normal: ",  json_encode($datos) ,"\n";*/
  //$arr = array ( 'Ejemplo', array('Name' => "Manuel ", 'Apellido' => "Solis", 'Cellphone' => "+56951212121", 'Email' => "manuelsolisc@gmail.com"));
  $arr = '{ "records":[ {"Name":"Alfreds Futterkiste","City":"Berlin","Country":"Germany"} ,{"Name":"Ana Trujillo Emparedados y helados","City":"México D.F.","Country":"Mexico"} ] }';
  echo ($arr);

 ?>
