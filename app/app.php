<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('anagram.html.twig'); //
    });

    // Grabs User Input
    $app->get("/userInput", function() use ($app) {
        $input_word = $_GET['word'];
        $input_list = $_GET['list'];
        $my_anagram = new Anagram;

        // var_dump($my_anagram);

        $results_bool = $my_anagram->anagramMatch($input_word, $input_list);

        $results_match = $my_anagram->getMatchResultArray();
        $results_fail = $my_anagram->getFailResultArray();
        // var_dump($results_fail);
        // var_dump($results_match);

        return $app['twig']->render('anagram.html.twig', array(
            'input' => $input_word,
            'list' => $input_list,
            'results' => $results_bool,
            'match' => $results_match,
            'fail' => $results_fail));
    });

    return $app;

?>
