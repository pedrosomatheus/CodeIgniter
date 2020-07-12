<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adm extends CI_Controller
{
    public function funcionario()
    {
        $this->load->view('Adm/funcionario');
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

            $this->session->email = $dados['email'];
            echo "sucesso";
            die();
        }
    }
}
