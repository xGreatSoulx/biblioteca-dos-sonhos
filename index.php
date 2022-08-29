<?php 
    require 'rest.php';
    // require 'model/ModelBase.php';
    // require 'service/Transaction.php';

    // $fodase = new ModelBase();
    // $teste = new Transaction();
    // $result = $teste->transaction();

    // echo $result;

    $rest = new Rest();
    $authorization = $rest->Authorization();
    
    $class = isset($_REQUEST['class']) ? $_REQUEST['class'] : '';
    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
    header('Location: https://www.google.com/');
    echo "TESTE";
?>
