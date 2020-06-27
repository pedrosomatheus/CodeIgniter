<?php
defined('BASEPATH') or exit('No direct script access allowed');



class controle_acesso{

    public function controlar(){

        $CI = get_instance();
        $user = $CI->session->userdata("users");
        if(empty($user)){
            redirect("voltar");
        }

    }

}




?>