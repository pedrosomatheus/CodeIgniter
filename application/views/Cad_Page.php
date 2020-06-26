<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro</title>
   <link href="<?php echo base_url('assets/css-custom/homePage.css');?>" rel="stylesheet">
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

<div class="container">
  <div class="content">
  
<p>Cadastre-se se para conhecer nosso site</p>


<form action="<?php echo base_url('index.php/login/vldCad_User');?>" id="cadastrar" method="POST">

    <label for="">Nome</label>
    <input type="text" placeholder="Digite seu nome" name="name" id="name">
    <label for="">UserName</label>
    <input type="text" placeholder="Digite seu UserName" name="userName" id="userName">
    <label for="">Email</label>
    <input type="text" placeholder="Digite seu email" name="email" id="email">
    <label for="">CPF</label>
    <input type="text" placeholder="Digite seu CPF, aquele lá" name="cpf" id="cpf">
    <label for="">Senha</label>
    <input type="text" placeholder="Digite sua senha mais bolada" name="senha" id="senha">

    <button class="btn" type="submit">Cadastrar</button>
</form>


</div>
</div>

<script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js');?>"></script>

<script src="<?php echo base_url('assets/javascript/vldCad_User.js');?>"></script>

</body> 
</html>