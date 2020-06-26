<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/inicio.css');?>">

    <title>Faça seu Login</title>
    <style>
        body{
            background-image:url('<?php echo base_url('assets/imagens/Index.jpg'); ?>');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-font-somoothing: antialiased !important;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="content">

         <form action="<?php echo base_url('index.php/login/vldLogin');?>" method="POST" id="login">
              
            <label class="" for="">Usuário ou Email</label>
            <input class="" type="text"  placeholder="Digite aqui seu email ou usuário" name="user" id="usuario">
            <label class="" for="">Senha</label>
            <input class="" type= "password" placeholder="Digite sua senha mais louca pique area 51" name="pass">


            <button class="btn" type="submit">Entrar</button>
            <br>
            <a class="link text-center" href="<?php echo base_url ('index.php/login/cadastrar'); ?>">Cadastra-se</a>
               
         </form>
    </div>
</div>



<script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js');?>"></script>

<script src="<?php echo base_url('assets/javascript/vldLogin.js');?>"></script>


</body>
</html>