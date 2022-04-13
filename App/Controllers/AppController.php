<?php

namespace App\Controllers;

//os recurso do framework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action{

    public function timeline()
     {
        
        session_start();

         if(!empty($_SESSION['id']) &&  !empty($_SESSION['nome']) ){
               
           $produto = Container::getModel('Produtos');

           $produtos = $produto->getAll();

            $this->view->produtos = $produtos;

            $this->render('timeline');
         }else{
            header('location:/login?login=erro');
         }
     }

    public function carrinho1(){
        session_start();

        if(!empty($_SESSION['id']) && !empty($_SESSION['nome'])){
            
            $produto = Container::getModel('Produtos');

            if(!isset($_SESSION['carrinho'])) {
                $_SESSION['carrinho'] = array();

            }
            if(isset($_GET['acao'])){
                $id = intval($_GET['id']);
                if(!isset($_SESSION['carrinho'][$id])){
                    $_SESSION['carrinho'][$id] = 1;
                }else{
                    $_SESSION['carrinho'][$id] +=1;
                }
            }

            $carrinho = $_SESSION['carrinho'];

            $this->view->produtos = $carrinho;
           
           
            
            $this->render('carrinho1');
        }

       
       
     }

     public function timelineAdm(){
        session_start();

        if(!empty($_SESSION['id']) &&  !empty($_SESSION['nome']) ){
              
          $produto = Container::getModel('Produtos');

          $produtos = $produto->getAll();

         $this->view->produtos = $produtos;
    

           $this->render('adm');
        }
       
        
    }

    public function AreaAdm(){
        session_start();

        if(!empty($_SESSION['id']) &&  !empty($_SESSION['nome']) ){
              
          $produto = Container::getModel('Produtos');

          $produtos = $produto->getAll(); 

          $this->view->produtos = $produtos;
           
           $this->render('area_adm');
        }
       
        
    }

    public function validaAutenticacao(){

        session_start();
   
         if(!isset($_SESSION['id']) || $_SESSION['id'] == '' ||!isset($_SESSION['nome']) || $_SESSION['nome'] == ''){
   
           header('location: /?login=error');
           
         }
     }

     public function salvaProdutos(){

        $this->validaAutenticacao();

        $produtos = container::getModel('produtos');
        
        $produtos->__set('produto',$_POST['produto']);
        $produtos->__set('descricao',$_POST['descricao']);
       
        
        if(!empty($_POST['produto']) && !empty($_POST['descricao'])){
            $produtos->salvar();
        }
    
        header('location:/area_adm');
    }

    public function deletar(){

    
        $produtos = container::getModel('produtos');

        $produtos->__set('id',$_GET['id']);
        
        $produtos->deletar();

        header('location:/area_adm');
       
    }

    public function list_produto(){

        $produto = Container::getModel('Produtos');

        $produtos = $produto->getAll(); 

        $this->view->produtos = $produtos;
        
        $this->render('list_produto');
    }

    
   
     

    
     

     

}


/*

<div class="card-footer">
                                <a href="#" class="btn btn-light disabled mt-2 d-block">
                                    <small>Reabastecendo Estoque</small>
                                </a>
                                <small class="text-danger">
                                    <b>Produto Esgotado</b>
                                </small>
                            </div>
    
*/

?>
