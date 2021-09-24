<?php 
	require('/storage/ssd1/637/17371637/public_html/contacto/phpconnect.php');
 ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>LISTA DE DATOS</title>

<body>
    <div class="w3-container">
    <h2><b>Lista de consultas</b></h2>
        
    <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        else if (isset($_POST['submit'])) {
            $aSubmitVal = array_keys($_POST['submit'])[0];
            require('/storage/ssd1/637/17371637/public_html/contacto/phpconnect.php');
            $sql="DELETE FROM Contacto WHERE Mensaje='$aSubmitVal'";
		$result = $mysqli->query($sql);
            if (!$result) {
                echo "ERROR!!";
                echo "$aSubmitVal";
            } else {
            echo "Mensaje Limpiado!"; }
}
        function button1() {
            require('/storage/ssd1/637/17371637/public_html/contacto/phpconnect.php');
            $sql="DELETE FROM Contacto";
		$result = $mysqli->query($sql);
            if (!$result) {
                echo "ERROR!";
            } else {
            echo "Lista Limpiada!"; }
        }
        function button2() {
            echo "Recargaste la pagina, mzi";
        }
    ?>
    

        
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Limpiar Lista" />
          
        <input type="submit" name="button2"
                class="button" value="Recargar pagina" />
    </form>
    <ul class="w3-ul w3-card-4">
        
    <?php 
		$sql="SELECT * FROM `Contacto`";
		$result = $mysqli->query($sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
    
    <li class="w3-bar">
        <form method="post">
            <input id="someId" type="submit" name="submit[<?php echo $mostrar['Mensaje'] ?>]" class="w3-bar-item w3-button w3-white w3-xlarge w3-right button" value="x"/>
        </form>
      <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
      <div class="w3-bar-item">
        <span class="w3-large"><?php echo $mostrar['Nombre'] ?></span><br>
        <span><?php echo $mostrar['Email'] ?></span>
        <span>(<?php echo $mostrar['Fecha'] ?>)</span>
        <span><br><?php echo $mostrar['Mensaje'] ?></br></span>
      </div>
    </li>
    

	<?php 
	}
	 ?>
    </ul>
</div>

</body>
</html>