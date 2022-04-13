<?php

namespace App\Controllers;

//os recurso do framework
use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action{


    public function autenticar(){

        $usuario = Container::getModel('Usuario');

        $usuario->__set('email',$_POST['email']);
        $usuario->__set('senha',md5($_POST['senha']));

        $retorno = $usuario->autenticar();
        
       if(!empty($usuario->__get('id')) && !empty($usuario->__get('nome'))){
          
            session_start();

            $_SESSION['id'] = $usuario->__get('id');
            $_SESSION['nome'] = $usuario->__get('nome');

            if($_SESSION['id'] == 1){

                header('location:/adm');

            }else if(isset($_SESSION['id']) && isset($_SESSION['nome'])){

                header('location:/timeline');
            }

       }else{
        header('location:/login?login=erro');
       }
      
    }

    
    

    public function sair(){
        session_start();
        session_destroy();
        header('location:/');
    }

    


}

   



?>