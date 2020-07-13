<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de Produto</title>
   <!-- <link href="<?php echo base_url('assets/css-custom/cadFuncionario.css');?>" rel="stylesheet"> -->
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
        .imgCadastro{
            width: 300px;
            height: 300px;
        }
        .imgBorder{
            border: 1px solid black;
        }
    </style>
<?php

$this->load->view('cabecalhos/navAdm.php')

?>

<div class="row mt-2">
        <div class="col-lg-6 mx-auto">
            <h1 class="text-center text-light">Cadastro de Produtos</h1> 

            <form action="<?php echo base_url('index.php/adm/vldProduto');?>" class="container tamanhoTela text-light"

             method="POST" id="cadastrar" enctype='multipart/form-data'>

                <div id="imagem" class="imgCadastro mx-auto my-5">
                    <img class='card-img-top imgCadastro imgBorder'
                     src='<?php echo base_url('assets/imagens/avatar.jpg'); ?>'>
                </div>

                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <input type='file' class='form-control-file card-title'
                         accept='image/*' id='arquivo' name='arquivo'>  
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <input class="form-control form-control-lg" type="text" 
                        placeholder="Digite o nome do produto" name="nome">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <input class="form-control form-control-lg" type="text" 
                        placeholder="Digite o Código de Barras" name="codBarras">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <textarea rows="5" class="form-control form-control-lg"
                         placeholder="Digite a descrição do produto" name="descricao"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-5 my-3 ml-auto">
                        <input class="form-control form-control-lg" type="text" 
                        placeholder="Digite o preço" name="preco">
                    </div>

                    <div class="form-group col-lg-4 my-3 mr-auto">
                        <input class="form-control form-control-lg" type="text" 
                        placeholder="Digite a quantidade em estoque" name="estoque">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-6 my-3 mx-auto">
                        <input class="form-control btn-lg btn btn-success" 
                        type="submit" value="Cadastrar" name="cadastro" id="Cadastrar">
                    </div>
                </div>

            </form>
        </div>

</div>
</div>

<script type='text/javascript'>
        $("#arquivo").on('change', function () {
            if (typeof (FileReader) != "undefined") {
                var imagem = $("#imagem");
                imagem.empty();
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "card-img-top imgCadastro imgBorder"
                    }).appendTo(imagem);
                }
                imagem.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } 
            else{
                alert("Este navegador nao suporta FileReader.");
            }
        });
</script>

<script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>

<script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js');?>"></script>

<script src="<?php echo base_url('assets/javascript/vldCad_Prod.js');?>"></script>

</body> 
</html>