<?php

namespace App\Controllers;

//os recurso do framework
use MF\Controller\Action;
use MF\Model\Container;


class IndexController extends Action {


    public function index(){

       $this->render('index');

    }

    public function login(){
        
        $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';

       $this->render('login');
    }

    public function carrinho(){

        $this->render('carrinho');
    }

    public function cadastro(){

        $recebe = isset($_POST['CEP']) ? $_POST['CEP']:null; 

        $this->view->dadosCEP = Container::consultaCEP($recebe);

        $this->view->usuario = array(

            'nome' => '',
            'email' => '',
            'senha' => '',
        );

       

        $this->view->erroCadastro = false;

        $this->render('cadastro');

    }


    public function registrar(){
        

        $usuario = Container::getModel('Usuario');

		$usuario->__set('nome',$_POST['nome']);
		$usuario->__set('email',$_POST['email']);
		$usuario->__set('senha',md5($_POST['senha']));

        if($usuario->validarCadastro() && count($usuario->getUsuarioPorEmail()) == 0){
            
                $usuario->salvar();

                $this->render('cadastrar');

        } else {

            $this->view->usuario = array(
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha'],
            );

            $this->view->erroCadastro = true;

            $this->render('cadastro');
        
        }
        
        

    }

    

    
}



?>




