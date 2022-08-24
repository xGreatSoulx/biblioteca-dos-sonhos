<?php

    class Rest{

        public function Authorization(){
            $headers = array();
            foreach ($_SERVER as $key => $value)
            {
                if (substr($key, 0, 5) == 'HTTP_')
                {
                    $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
                    $headers[$header] = $value;
                }
            }
            
            if (function_exists('getallheaders'))
            {
                $allheaders = getallheaders();
                
                if ($allheaders)
                {
                    return $allheaders;
                }
                
                return $headers;
            }

            if(!empty($header['Authorization']))
                return $headers['Authorization'];
            else{
                http_response_code(403);
                Throw new Exception("Erro de autorização");
            }
        }
    }
?>