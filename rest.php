<?php

    class Rest{

        public function Authorization(){
            $header = get_headers();

            return $header;
        }

    }

?>