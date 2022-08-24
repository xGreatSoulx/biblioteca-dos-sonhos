<?php

    class Rest{

        public function Authorization(){
            $header = getallheaders();

            return $header;
        }

    }

?>