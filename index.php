<?php 
    include 'model/ModelBase.php';
    include 'service/Transaction.php';

    $fodase = new ModelBase();
    $teste = new Transaction();
    $resultado = $teste->Transaction();

    //echo $resultado;
    
    $app->get('/cowsay', function() use($app) {
        $app['monolog']->addDebug('cowsay');
        return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
    });
?>
