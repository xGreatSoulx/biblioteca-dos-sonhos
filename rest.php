<?php

    class Rest{

        public function Authorization(){
            $header = $_SERVER['Authorization'];
            return $header;
        }

    }

?>