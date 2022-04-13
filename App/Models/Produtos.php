<?php


namespace App\Models;

use MF\Model\Model;


class Produtos extends Model {
    
    private $id;
    private $foto;
    private $produto;
    private $descricao;
    private $nome;
   
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }

    //salvar
    public function salvar(){

        if(isset($_FILES['foto'])){

            $arquivo = $_FILES['foto'];

            if($arquivo['error'])
                die("falha ao enviar arquivo");

            if($arquivo['size'] > 1097152)
                die("Arquivo muito grande !! max: 1Mb");
               
             $pasta = 'img/produtos/';  
             $nomeDoArquivo = $arquivo['name'];
             $novoNomeDoArquivo = uniqid();
             $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

             if($extensao != 'jpg' && $extensao != 'png')
                die('tipo de arquivo não aceito');

               $path = $pasta . $novoNomeDoArquivo . '.' . $extensao; 

              $sucesso = move_uploaded_file($arquivo['tmp_name'], $path);

              if($sucesso){
                   $query = "insert into produtos(produto,descricao,foto)values(:produto,:descricao,:path)";
                   $stmt = $this->db->prepare($query);
                   $stmt->bindParam(':path', $path);
                   $stmt->bindValue(':produto',$this->__get('produto'));
                   $stmt->bindValue(':descricao',$this->__get('descricao'));
                   $stmt->execute();

              }else    
                echo'falha ao enviar';       
        }       

    }

    public function deletar(){

      $query = 'delete from produtos where id=:id';
      $stmt = $this->db->prepare($query);
      $stmt->bindValue(':id',$this->__get('id'));
      $stmt->execute();
    
    }

    //recuperar
    public function getAll(){

        if (isset($_POST['nome'])) {
            $busca = $_POST['nome'];
            $query = "select * from produtos where produto like '%".$busca."%' order by produto";
            print_r($busca);
            
        }
        else {
            $query = "select * from produtos order by produto";
        }
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            echo'Nenhum registro recebido';
        }
       
        
        
      
        

    }  

    

}
