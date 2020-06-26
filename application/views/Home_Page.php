<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/inicio.css');?>">

    <title>Home</title>
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

         <form action="<?php echo base_url('index.php/login/cadastrar');?>" method="POST" id="login">

            <button class="btn" type="submit">Cadastrar</button>
            <br>  
               
         </form>

         <form action="<?php echo base_url ('index.php/login/voltar'); ?>">

         <button class="btn2" type="submit">Login<a href=""></a></button>
        
        </form>
    </div>
</div>



</div>

<script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>

    
</body>
</html>