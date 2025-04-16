<?php 
require_once 'config.php';

$conn = new mysqli(HOST, BD_USUARIO, BD_SENHA, BD_SCHEMA);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
$stmt->bind_param("ss", $usuario, $senha);
$stmt->execute();

$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    echo "Login bem-sucedido!";
} else {
    echo "Usuário ou senha incorretos.";
}
?>

