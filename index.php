<?php 
    include 'model/ModelBase.php';
    include 'service/Transaction.php';

    use Cowsayphp\Farm;
    use Cowsayphp\Cow;

    $cow = Farm::create(\Cowsayphp\Farm\Cow::class);
    echo '<pre>'.$cow->say("Ohmg I'm a cow!").'</pre>';

    $fodase = new ModelBase();
    $teste = new Transaction();
    $resultado = $teste->Transaction();

    //echo $resultado;

    // $app->get('/cowsay', function() use($app) {
    //     $app['monolog']->addDebug('cowsay');
    //     return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
    // });
?>
