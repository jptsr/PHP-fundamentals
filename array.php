<?php
    $family = ['Maman', 'Papa', 'Moi', 'Soeur'];
    print_r($family);
    $recipe = ['pizza', 'nouille', 'frites'];
    var_dump($recipe);
    $movie = ['Pride and prejudice', 'Your name', 'Inception', 'Red Notice'];
    echo $movie[0] . " & " . $movie[1];

    $countries = ['Belgium', 'Spain', 'Grece'];
    echo '<pre>';
    print_r($countries);
    echo '</pre>';
    array_push($countries, 'England');
    $countries[] = 'England';
    var_dump($countries);

    $person = [
        'name' => 'Archibald',
        'firstname' => 'Nate',
        'age' => 26
    ];
    $person['function'] = 'Junior Web Developer';
    echo "<pre>";
    print_r($person);
    echo "<pre>";

    $person['function'] = 'Junior Web Developer';
    $person['function'] = 'Senior Web Developer';
    echo "<pre>";
    echo $person['function'];
    echo "<pre>";
    $person[0] = '02/2198445';
    $person[1] = 'Cantersteen 10';
    $person[2] = 'Brussels';
    echo "<pre>";
    echo $person[1];
    echo "<pre>";
    echo $person['firstname'];
    echo "<pre>";

    $me = [
        'name' => 'Ptsr', 
        'firstname' => 'Ju',
        'age' => '21',
        'fav_movies' => $movies = ['Pride and prejudice', 'Your name', 'Inception', 'Red Notice']
    ];
    echo "<pre>";
    print_r($me);
    echo "<pre>";
    $me['hobbies'] = ['dance', 'karate'];
    echo "<pre>";
    print_r($me);
    echo "<pre>";
    $keys = array_keys($me);
    $mother = [
        $keys[0] => 'Ptsr',
        $keys[1] => 'Vero',
        $keys[2] => 50,
        $keys[3] => $mov = ['bla', 'blo', 'bleu']
    ];
    $me['mother'] = $mother;
    echo "<pre>";
    print_r($me);
    echo "<pre>";
    echo 'Number of hobbies : ' . count($me['hobbies']);
    $me['name'] = 'Durand';
    echo "<pre>";
    echo $me['name'];
    echo "<pre>";

    echo '<br><br><p>----------------------</p><br><br>';

    $me = ['dance', 'karate'];
    $soulmate = ['karate', 'judo', 'baseball'];

    // perform array operation
    $possible_hobbies_via_intersection = array_intersect($me, $soulmate);
    $possible_hobbies_via_merge = array_unique(array_merge($me, $soulmate));

    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';

    echo '<br><br><p>----------------------</p><br><br>';

    $web_development = [
        'frontend' => [],
        'backend' => []
    ];
    $web_development['frontend'][] = 'xhtml';
    $web_development['backend'][] = 'Ruby on Rails';
    $web_development['frontend'][] = 'CSS';
    $web_development['frontend'][] = 'Flash';
    $web_development['frontend'][] = 'Javascript';
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    $web_development['frontend'][0] = 'html';
    unset($web_development['frontend'][2]);
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
?>