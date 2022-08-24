<?php 
    require 'model/ModelBase.php';
    require 'service/Transaction.php';

    $fodase = new ModelBase();
    $teste = new Transaction();
    $result = $teste->transaction();

    echo $result;
?>
