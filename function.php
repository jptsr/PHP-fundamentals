<?php
    $str = 'This is going to be shuffled !';
    $str = str_shuffle($str);
    echo $str;

    echo '<br><br><p>----------------------</p><br><br>';

    $string = 'foo   bar';  // multiple spaces
    var_dump(explode(' ', $string));
    // var_dump(split(' +', $string));
    var_dump(preg_split('/ +/', $string));

    echo '<br><br><p>----------------------</p><br><br>';

    $txt = 'According to a researcher (sic) at Cambridge University, it doesn\'t matter in what order the letters in a word are, the only 
    important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without 
    problem. This is because the human mind does not read every letter by itself but the word as a whole .';

    $words = preg_split('/ +/', $txt);
    // $words = explode(" ", $txt);
    
    foreach ($words as $key => $value) {
        $words[$key] = str_shuffle($value);
        echo $words[$key] . " ";
    }

    // var_dump($words);

    echo '<br><br><p>----------------------</p><br><br>';

    $name = 'émile';
    $day = date('l');
    $day_nb = date('jS');
    $month = date('F');
    $year = date("Y");
    // echo $day . " " . $day_nb . " " . $month . " " . $year;

    function upCaseFirst($word) {
        echo mb_convert_case($word, MB_CASE_TITLE, 'UTF-8');
    }
    upCaseFirst($name);

    function sum ($nb1, $nb2) {
        if(is_numeric($nb1) == true and is_numeric($nb2) == true){
            echo $nb1 + $nb2;
        }else{
            echo 'Error: argument is the not a number.';
        }
    }
    echo '<br>';
    sum(45, 'lol');

    function acronyme ($string) {
        $words = explode(' ', mb_convert_case($string, MB_CASE_TITLE, 'UTF-8'));
        foreach ($words as $key => $value) {
            echo $words[$key][0];
        }
    }
    echo '<br>';
    acronyme('lol je me ballade.');
    
    function replaceAE ($word) {
        echo str_replace('ae', 'æ', $word);
    }
    echo '<br>';
    replaceAE('caecotrophie');

    function replaceAEreverse ($word) {
        echo str_replace('æ', 'ae', $word);
    }
    echo '<br>';
    replaceAE('cæcotrophie');

    echo '<br><br><p>----------------------</p><br><br>';
?>

<html>
    <head></head>

    <body>
        <h3>Warning message</h3>

        <?php
            function message ($class, $msg) {
                $final_msg  = ((is_string($class)) and (is_string($msg))) ? "<div class=\"info\">Info : blabla.</div>" : "<div class=\"$class\">$msg</div>" ;
                echo $final_msg;
            }

            message('error', 'dld,m');

            echo '<br><br><p>----------------------</p><br><br>';

            function generateWords () {
                echo "<h3>Generate a new word</h3>";

                $letters = 'abcdefghijklmnopqrstuvwxyz';
                $arr_letters = str_split($letters);
                
                $letters_nb1 = rand(1, 5);
                $letters_nb2 = rand(7, 15);

                $word1 = [];
                $word2 = [];

                for ($i = 1; $i <= $letters_nb1; $i ++) {
                    $word1[] = $letters[rand(0, 25)];
                }

                for ($i = 1; $i <= $letters_nb2; $i ++) {
                    $word2[] = $letters[rand(0, 25)];
                }

                echo implode('', $word1);
                echo '<br>';
                echo implode('', $word2);
            }

            generateWords();

            echo '<br><br><p>----------------------</p><br><br>';
        ?>
    </body>
</html>

<?php
    echo "<h3>Generate a new word</h3>";

    $arr_of_words = ['lol', 'camion', 'sucette', 'orgie', 'cancer', 'IceTea', 'lunettes', 'cheveux', 'ça', 'armoire', 'bouteille', 'cave'];

    function chooseWord ($arr = []) {
        if (count($arr) == 1) {
            echo $arr[0] . '<br>';
        } else {
            echo $arr[rand(0, (count($arr) - 1))] . '<br>';
        }
    }

    function findWords ($start_arr, $nb_letter, $end_arr) {
        foreach ($start_arr as $word) {
            if (mb_strlen($word) == $nb_letter) {
                $end_arr[] = $word;
            }
        }

        if (empty($end_arr) == 1) {
            $rand = ($nb_letter < 7) ? rand(1, 5) : rand(7, 15);
            findWords($start_arr, $nb_letter = $rand, $arr = []);
        } else {
            chooseWord($end_arr);
        }
    }

    findWords($arr_of_words, rand(1, 5), $words = []);
    findWords($arr_of_words, rand(7, 15), $words = []);

    echo '<br><br><p>----------------------</p><br><br>';

    function decapitalize ($string) {
        echo mb_strtolower($string);
    }

    decapitalize('STOP YELLING I CAN\'T HEAR MYSELF THINKING!!');

    echo '<br><br><p>----------------------</p><br><br>';

    function calculate_cone_volume ($width_ray, $height) {
        $volume = pow($width_ray, 2) * M_PI * $height * (1/3);
        echo 'The volume of a cone which ray is ' . $width_ray . ' and height is ' . $height . ' = ' . round($volume, 2, PHP_ROUND_HALF_UP) . ' cm<sup>3</sup><br />'; 
        return $volume;
    }

    calculate_cone_volume(5, 2);
    calculate_cone_volume(3, 4);
?>