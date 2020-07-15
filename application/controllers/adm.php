<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adm extends CI_Controller
{
    public function funcionario()
    {
        $this->load->view('Adm/funcionario');
    }

    public function produto()
    {
        $this->load->view('Adm/produto');
    }

    public function vldFuncionario()
    {

        $this->load->model('cadastroModel');

        $dados = [

            'nome' => $this->input->post("name"),

            'username' => $this->input->post("userName"),

            'email' => $this->input->post("email"),

            'cpf' => $this->input->post("cpf"),

            'senha' => $this->input->post("senha"),

            'tipo' => $this->input->post("tipo"),

        ];

        $resultado = $this->cadastroModel->verificaEmail($dados['email']);

        $resultado2 = $this->cadastroModel->verificaCPF($dados['cpf']);

        if (empty($dados['nome'])) {
            echo "erroName";
            die();
        }

        if (empty($dados['username'])) {
            echo "erroUserName";
            die();
        }

        if (empty($dados['tipo'])) {
            echo "erroTipo";
            die();
        }

        if (empty($dados['email'])) {
            echo "erroEmail";
            die();
        }

        if ($resultado['email'] != "") {
            echo "erroEmailExite";
            die();
        }

        if (empty($dados['cpf'])) {
            echo "erroCpf";
            die();
        }

        if ($resultado2['cpf'] != "") {
            echo "erroCPFExiste";
            die();
        }


        if (empty($dados['senha'])) {
            echo "erroSenha";
            die();
        }

        if ($this->cadastroModel->CadastrarUsuario($dados)) {

            echo "sucesso";
            die();
        }
    }


    public function vldProduto()
    {
        $this->load->model('cadastroModel');


        $dados = [
            
            'foto' => "",

            'nome' => $this->input->post("nome"),

            'descricao' => $this->input->post("descricao"),

            'preco' => $this->input->post("preco"),

            'codBarras' => $this->input->post("codBarras"),

            'estoque' => $this->input->post("estoque")

        ];


        if (isset( $_FILES['arquivo']['name'] )) {
        
            $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
            $nome = $_FILES[ 'arquivo' ][ 'name' ];
        
            // Pega a extensão
            $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
        
            // Converte a extensão para minúsculo
            $extensao = strtolower ( $extensao );
        
            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfileiro as extensões permitidas e separo por ';'
            // Isso serve apenas para eu poder pesquisar dentro desta String
            if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
                // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                $novoNome = uniqid ( time () ) . '.' . $extensao;
        
                // Concatena a pasta com o nome
                $destino = ('C:/xampp/htdocs/CodeIgniterAtv/assets/imagens') . $novoNome;
                //CodeIgniterAtv/assets/imagens/15947731125f0e4e78e6049.gif
        
                     // tenta mover o arquivo para o destino
                 if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                      //echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                    //echo '<img src="' . $destino . '"/>';
                    $dados['foto'] = $novoNome;
                     }
                     else{

                      echo "Não foi possível salvar a imagem";  
                      exit();
                }
            }
            else{
                echo "A imagem não está em um formato correto";     
                exit();
            }

        }
        else{
            echo "Por favor, selecione uma imagem para o produto";     
            exit();
        }



        if (empty($dados['nome'])) {
            echo "erroName";
            die();
        }

        if (empty($dados['codBarras'])) {
            echo "erroCod";
            die();
        }

        if(strlen($dados['codBarras']) != 13){
            echo "erroCodN";
            die();
        }

        if (empty($dados['descricao'])) {
            echo "erroDesc";
            die();
        }

        if (empty($dados['preco'])) {
            echo "erroPreco";
            die();
        }

        if (empty($dados['estoque'])) {
            echo "erroEstoque";
            die();
        }

        if ($this->cadastroModel->CadastrarProduto($dados)) {

            echo "sucesso";
           
            die();
        }

       
        

    }

}
