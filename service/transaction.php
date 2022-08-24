<?php
    class Transaction{

        public function transaction(){

            $model_base = new ModelBase;

            if($model_base->beginTransaction() == true){
                $resultado = true;
                //$sql = 'SELECT * FROM tab_livros';
    
                return $resultado;
  
            }else{
                Throw new Exception("DEU ERRO");
            }
        }
    }
?>