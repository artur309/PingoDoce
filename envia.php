<?php //recebe o formulario de recrutamento e trata e volta  a enviar
if (isset($_POST) && !empty($_POST)){ 
	$array = json_encode($_POST);

	echo "Nome: ";print_r($_POST['nome']);echo '<br>';
	
	echo "Data Nascimento: ";print_r($_POST['bday']);echo '<br>'; 
	
	echo "E-Mail: ";print_r($_POST['email']);echo '<br>'; 
	
	echo "Cargo: ";print_r($_POST['cargo']);echo '<br>';  
	
	echo "Carga Horária: ";print_r($_POST['time']);
}
?>