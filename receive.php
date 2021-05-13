<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/favicon.png" />
    <title>Teste de Insert </title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
    <!-- fim css -->
</head>
<body>
<div class="container">

<?php
// pega dados do formulário ($tarefa)
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$dados = $nome . ';' . $email;
// Abre ou cria o arquivo dados.txt
$fp = fopen("dados.txt", "a");
 
//Escreve no arquivo txt
if (!fwrite($fp, "${dados}\n")) {
       echo "Erro escrevendo no arquivo";
       exit;
}
 
// Fecha o arquivo
fclose($fp); 

$msg = <<<MENSAGEM
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Certo!</strong> Seus dados estão seguros conosco. Muito Obrigado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<a href="index.php" type="button" class="btn btn-outline-primary">
	VOLTAR PARA HOME
</a>

MENSAGEM;

echo $msg;
?>
</div>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</body>
</html>