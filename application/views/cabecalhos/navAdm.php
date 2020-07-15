
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Logo</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item ">
        <a class="nav-link" href="./">Pagina Inicial<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url ('index.php/adm/funcionario'); ?>">Funcionários<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url ('index.php/adm/produto'); ?>">Produtos</a>
      </li>
      <li class = "nav-item">
      
         <?php

         
    if(isset($this->session->username)){
      echo $this->session->username;
    }
    $this->session->sess_destroy();


?>  <span class="sr-only">(current)</span></a>
         ?> 
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a href = "<?php echo base_url('') ?>"  ><button class="btn btn-outline-secondary " type="button" >Sair</button></a>
   
    </form>
  </div>
</nav>

<script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>
