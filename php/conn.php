<?php
	// Conexão à BD
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		// Erro caso a conexão não funcionar
	    die("[VERIFICAR FICHEIRO php/conn.php] Erro de conexão: " . mysqli_connect_error());
	}
?>
