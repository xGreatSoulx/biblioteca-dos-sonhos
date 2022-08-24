<?php 
    require 'rest.php';
    // require 'model/ModelBase.php';
    // require 'service/Transaction.php';

    // $fodase = new ModelBase();
    // $teste = new Transaction();
    // $result = $teste->transaction();

    // echo $result;

    // $class = isset($_REQUEST['class']) ? $_REQUEST['class'] : '';
    // $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

    $rest = new Rest();
    $authorization = $rest->Authorization();
    
    echo $authorization;

?>
