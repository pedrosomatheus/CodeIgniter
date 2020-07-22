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

public function buscarProduto(){
    
$query = $this->db->query('SELECT idProduto, nome, descricao, preco, codBarras, ativo, estoque, foto FROM produto');
    
    
    foreach ($query->result() as $row)
    {
        echo'
        <div class="col-lg-3 col-sm-6">
        <div class="card h-100">
            <img class="card-img-top" src="'.base_url('assets/imagens').$row->foto.'">
            <div class="card-body">
                <h4 class="card-title text-center mb-3">'.$row->nome.'</h4>
                <h6 class="card-subtitle text-justify mb-3">'.$row->descricao.'</h6>
                <form action="#" method="POST">
                    <a href="#" class="btn btn-outline-dark btn-block card-link">
                        <label class="mr-3 mt-2">R$ '. number_format($row->preco, 2, ',', '.').'</label>
                        <img src="'.base_url('assets/imagens/carrinho_p.png').'" alt="Carrinho de compras">
                    </a>
                    <input type="hidden" name="id" value="'.$row->idProduto.'">
                </form>
            </div>
        </div>
    </div>    

    ';
    }

   

    // echo "chamou";
  

}



}










