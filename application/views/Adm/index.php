<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pagina ADM</title>
   <link href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>" rel="stylesheet">
</head>
<body>

  

<?php

$this->load->view('navAdm.php');


?>


 <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>


</body> 
</html>