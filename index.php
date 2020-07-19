<!DOCTYPE html>
<html lang="pt">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cadastro de devedores </title>
  </head>
  <body>
    <h1>Consulte aqui!</h1>

    <form method="post" action="dados.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome:</label>
      <input type="email" class="form-control" value="nome">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Escolha CPF ou CNPJ:</label>
      <select id="inputState" class="form-control">
        <option selected>Selecione...</option>
        <option value="cpf">CPF</option>
        <option value="cnpj">CNPJ</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Data de Nascimento:</label>
    <input type="text" class="form-control" value="data_de_nascimento" placeholder="Data de nascimento">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Endereço:</label>
    <input type="text" class="form-control" value="endereco" placeholder="Endereço">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Descrição de titulo:</label>
    <input type="text" class="form-control" value="descricao_de_titulo" placeholder="Descrição de titulo">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Valor</label>
      <input type="text" class="form-control" value="valor">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Data de Vencimento</label>
      <input type="text" class="form-control" value="data_de_vencimento">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">UpdatedTime</label>
      <input type="text" class="form-control" value="updatedtime">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <button type="submit" class="btn btn-info">Consultar</button>
</form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>