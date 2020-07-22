<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina ADM</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css-padrao/css-padrao.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/cliente.css'); ?>">

</head>

<body>
    <style>

        .loading {
            position: absolute;
            left: 30%;
            
           
        }
    </style>

    <div class="loading" id="loading">
        <img src="http://media.giphy.com/media/FwviSlrsfa4aA/giphy.gif" />
    </div>

    <script type="text/javascript">
        var i = setInterval(function() {

            clearInterval(i);

            // O código desejado é apenas isto:
            document.getElementById("loading").style.display = "none";

        }, 4000);
    </script>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>

    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>

    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>


</body>

</html>