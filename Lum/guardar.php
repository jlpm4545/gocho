<?php
	//conectamos Con el servidor
	$mysqli = new mysqli('localhost', 'root', '', 'prueba');
    $mysqli->set_charset("utf8");
	$res = $mysqli->query("SELECT * FROM datos");

    while($f = $res->fetch_object()){
    echo $f->nombre.' <br/>';
    }
	
	//ejecutamos la sentencia de sql
	if($query == false){
        die(mysqli_error()."Error from getuser "); //mysqli_error
    } 

    $row = mysqli_fetch_row($query); //mysqli_fetch_row
    return $row[0]; 
	
?>