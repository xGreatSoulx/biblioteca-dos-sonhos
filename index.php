<?php 
    include 'model/ModelBase.php';
    include 'service/Transaction.php';

    $fodase = new ModelBase();
    $teste = new Transaction();
    $resultado = $teste->Transaction();

    echo $resultado;
?>
