<?php
    class Transaction{

        public function transaction(){

            $model_base = new ModelBase;

            if($model_base->beginTransaction() == true){
                $sql = 'SELECT * FROM tab_livros';

                $sth = $model_base->prepare($sql);

                $resultado = $sth->execute();
        
                return $resultado;
  
            }else{
                Throw new Exception("DEU ERRO");
            }
        }
    }
?>