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
        $input_array = explode(" ", $input_list);
        $my_anagram = new Anagram;

        $results_bool = $my_anagram->anagramMatch($input_word, $input_list);

        $results_match = $my_anagram->getMatchResultArray(); // calls the function to get array
        $results_fail = $my_anagram->getFailResultArray();

        return $app['twig']->render('anagram.html.twig', array(
            'input' => $input_word,
            'list' => $input_array,
            'results' => $results_bool,
            'match' => $results_match,
            'fail' => $results_fail));
    });

    return $app;

?>
