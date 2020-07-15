<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{


    public function index()
    {
        $this->load->view('Home_Page');
    }

    public function cadastrar()
    {
        $this->load->view('Cad_Page');
    }

    public function voltar()
    {
        $this->load->view('inicio');
    }
    public function Entrar()
    {
        $this->load->view('inicio');
    }

    public function TelaCliente()
    {
        $this->load->view('Cliente/index');
    }

    public function TelaAdm()
    {
        $this->load->view('Adm/index');
    }


    public function vldLogin()
    {

        $this->load->model("cadastroModel");

        $user = $this->input->post("user");

        $pass = $this->input->post("pass");


        if (empty($user)) {
            echo "erroUser";
            die();
        }

        if (empty($pass)) {
            echo "erroPass";
            die();
        }

        $this->session->username = $user;
        


        $resultado = $this->cadastroModel->logarUser($user, $pass);
        //chamada de método
        $linha = $resultado->row();

        if ($resultado->num_rows() <= 0) {

            echo "FalhaLogin";

            die();
        }

        switch ($linha->tipo) {

            case "administrador":
                $this->session->tipo = "administrador";
                echo "sucessoAdm";
                break;


            case "cliente":
                $this->session->tipo = "cliente";
                echo "sucessoCliente";
                break;
        }
    }

    public function vldCad_User()
    {

        $this->load->model('cadastroModel');



        $dados = [

            'nome' => $this->input->post("name"),

            'username' => $this->input->post("userName"),

            'email' => $this->input->post("email"),

            'cpf' => $this->input->post("cpf"),

            'senha' => $this->input->post("senha"),

            'tipo' => "cliente",

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
