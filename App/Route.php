<?php

namespace App;

use MF\INIT\Boostrap;

class Route extends Boostrap {

    protected function initRoutes(){
        
        $routes['home'] = array(
            
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['carrinho'] = array(
            
            'route' => '/carrinho',
            'controller' => 'indexController',
            'action' => 'carrinho'
        );

        $routes['login'] = array(
            
            'route' => '/login',
            'controller' => 'indexController',
            'action' => 'login'
        );

        $routes['cadastro'] = array(
            
            'route' => '/cadastro',
            'controller' => 'indexController',
            'action' => 'cadastro'
        );

        $routes['registrar'] = array(
            
            'route' => '/registrar',
            'controller' => 'indexController',
            'action' => 'registrar'
        );

        $routes['autenticar'] = array(
            
            'route' => '/autenticar',
            'controller' => 'AuthController',
            'action' => 'autenticar'
        );

        $routes['timeline'] = array(
            
            'route' => '/timeline',
            'controller' => 'AppController',
            'action' => 'timeline'
        );

        $routes['carrinho1'] = array(
            
            'route' => '/carrinho1',
            'controller' => 'AppController',
            'action' => 'carrinho1'
        );

        $routes['sair'] = array(
            
            'route' => '/sair',
            'controller' => 'AuthController',
            'action' => 'sair'
        );

        $routes['produtos'] = array(
            
            'route' => '/produtos',
            'controller' => 'AppController',
            'action' => 'produtos'
        );      

        $routes['adm'] = array(
            
            'route' => '/adm',
            'controller' => 'AppController',
            'action' => 'timelineAdm'
        );

        $routes['area_adm'] = array(
            
            'route' => '/area_adm',
            'controller' => 'AppController',
            'action' => 'AreaAdm'
        );


        $routes['salvaProdutos'] = array(
            
            'route' => '/salvaProdutos',
            'controller' => 'AppController',
            'action' => 'salvaProdutos'
        );

        $routes['deletar'] = array(
            
            'route' => '/deletar',
            'controller' => 'AppController',
            'action' => 'deletar'
        );

        $routes['list_produto'] = array(
            
            'route' => '/list_produto',
            'controller' => 'AppController',
            'action' => 'list_produto'
        );



        $this->setRoutes($routes);
    }

    

    
}