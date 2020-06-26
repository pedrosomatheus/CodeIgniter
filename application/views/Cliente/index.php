<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Cliente</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css-padrao/css-padrao.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/cliente.css');?>">
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



    <?php

    $this->load->view('navCliente.php');
    $this->load->view('logo.php');


    ?>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>

    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>

    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>


</body>

</html>