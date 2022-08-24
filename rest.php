<?php

    class Rest{

        public function Autorizacao(){
            $header = $_SERVER['Authorization'];
            return $header;
        }

    }

?>