<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de Funcionário</title>
   <link href="<?php echo base_url('assets/css-custom/cadFuncionario.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>" rel="stylesheet">
</head>
<body>
 
<style>
        body{
            background-image:url('<?php echo base_url('assets/imagens/Index.jpg'); ?>');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-font-somoothing: antialiased !important;
        }
    </style>
<?php

$this->load->view('cabecalhos/navAdm.php')

?>
<div class="container">
  <div class="content">
  
<p>Cadastro de Funcionário</p>


<form action="<?php echo base_url('index.php/adm/vldFuncionario');?>" id="cadastrar" method="POST">

    <label for="">Nome</label>
    <input type="text" placeholder="Digite o nome" name="name" id="name">
    <label for="">UserName</label>
    <input type="text" placeholder="Digite o UserName" name="userName" id="userName">
    <label for="">Email</label>
    <input type="text" placeholder="Digite o email" name="email" id="email">
    <label for="">CPF</label>
    <input type="text" placeholder="Digite o CPF" name="cpf" id="cpf">
    <label for="">Tipo</label>
    <input type="text" placeholder="Digite o cargo" name="tipo" id="tipo">
    <label for="">Senha</label>
    <input type="text" placeholder="Digite a senha" name="senha" id="senha">

    <button class="btn" type="submit">Cadastrar</button>
</form>


</div>
</div>

<script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js');?>"></script>

<script src="<?php echo base_url('assets/javascript/vldCad_Func.js');?>"></script>

</body> 
</html>