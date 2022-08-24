<?php

    class Rest{

        public function Authorization(){
            $header = $_SERVER['Authorization'];


            foreach ($_SERVER as $key => $value)
            {
                $header[$key] = $value;
         
            }

            return $header;
        }

    }

?>