<?php 
require_once 'config.php';

$conn = new mysqli(HOST, BD_USUARIO, BD_SENHA, BD_SCHEMA);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "Login bem-sucedido!";
} else {
    echo "Usuário ou senha incorretos.";
}
?>
