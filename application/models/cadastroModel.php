<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroModel extends CI_Model {

public function listarTodos(){

$this->db->select("nome, email, userName, tipoUsuario");
$resultado = $this->db->get("Pessoa")->result();
return $resultado;

}

public function logarUser($user, $pass){

    $this->db->where("username", $user);
    $this->db->or_where("email", $user);
    $this->db->where("senha", $pass);

    $resultado = $this->db->get("users");

    return $resultado;
}

public function CadastrarUsuario($dados){

  return  $this->db->insert("users", $dados);

}

public function CadastrarProduto($dados){

    return  $this->db->insert("produto", $dados);
  
}

public function verificaEmail ($dados){

    $this->db->where("email", $dados);
    $resultado = $this->db->get("users")->row_array();
    return $resultado;
}

public function verificaCPF ($dados){

    $this->db->where("cpf", $dados);
    $resultado = $this->db->get("users")->row_array();
    return $resultado;
}


}










