<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['cpf'];
$fone = $_POST['cnpj'];
$cidade = $_POST['data_de_nascimento'];
$estado = $_POST['endereco'];
$carro = $_POST['descricao_de_titulo'];
$horarioligar = $_POST['valor'];
$mensagem = $_POST['data_de_vencimento'];
$mensagem = $_POST['updatetime'];


$sql = "insert into cadastro_cubo (nome,cpf,cnpj,data_de_nascimento,endereco,descricao_de_titulo,valor,data_de_vencimento,updatetime) values ('$nome','$cpf','$cnpj','$data_de_nascimento','$endereco','$descricao_de_titulo','$valor','data_de_vencimento''updatetime')";

$salvar = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);
mysqli_close($conexao);

?>
<h1>Confirmação de Cadastro</h1>
<a href="index.php"><h4>Voltar</h4>

<?php

if($linhas == 1){
    print"Cadastro efetuado com sucesso";
}else{
    print"Cadastro nao efetuado";
}


?>