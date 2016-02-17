<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Phrase.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/find_replace", function() use ($app) {
        $my_Phrase = new Phrase;
        $result = $my_Phrase->findReplaceExact($_GET['phrase'], $_GET['word_to_replace'], $_GET['replace_with']);

        return $app['twig']->render('index.html.twig', array(
            'results' => $result
        ));
    });


    return $app;
?>
