<?php
include_once 'util/conexao.php';
// include_once 'password.php';

$name = trim($_POST["nome"]);
$surname = trim($_POST["sobrenome"]);
$email= trim($_POST["email"]);
$password = trim($_POST["senha"]);
$nivelUsuario = 3;

$sql = "INSERT INTO 'usuario'('Nome','Sobrenome','Email','NivelUsuario','Status') VALUES".
    "('$nome','$sobrenome','$email',sha1('$senha'),'$nivelUsuario','Inativo')";
$inserir = mysqli_query($conexao, $sql);
?>

<?php include_once 'util/head.php'?>
<div class="container" style="padding:20px 0; max-width:800px;text-align:center">
    <h4>Usuário <b><?=$nome.' '.$sobrenome?></b> Cadastrado com sucesso, aguarde pela aprovação!</h4>
    <a href="index.php" class="btn btn-sm btn-primary" role="button">Voltar</a>
</div>