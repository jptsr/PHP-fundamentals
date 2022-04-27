<?php
    $names= ['John', 'jeanne', 'Joan', 'émile'];
    var_dump($names);

    foreach ($names as $key => $value){
        echo "<pre>";
        echo $names[$key] = ucfirst($value);
        echo "<pre>";
    }

    var_dump($names);

    echo '<br><br><p>----------------------</p><br><br>';

    $pronouns = ['I', 'You', 'He/She','We', 'You', 'They'];

    foreach ($pronouns as $pronoun) {
        $verb = ($pronoun == 'He/She') ? "codes" : "code";
        echo $pronoun . " " . $verb . "<br>";
    }

    echo '<br><br><p>----------------------</p><br><br>';

    $amount_of_lines = 1;

    while ($amount_of_lines <= 5)
    {
        echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
        // shorthand writing for 
        // $amount_of_lines = $amount_of_lines +1;
        $amount_of_lines ++;
    }

    echo '<br><br';

    for ($amount_of_lines = 1; $amount_of_lines <= 5; $amount_of_lines ++)
    {
        echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
    }

    echo '<br><br><p>----------------------</p><br><br>';

    // $nb = 1;
    $bool = true;

    function whileLoop(){
        $nb = 1;
        echo 'WHILE<br>';
        while($nb <= 120){
            echo $nb . '<br>';
            $nb ++;
        }
    }

    function forLoop(){
        $nb = 1;
        echo 'FOR<br>';
        for($i = 1; $i <= 120; $i ++){
            echo $i . '<br>';
        }
    }

    $display = ($bool == true) ? whileLoop() : forLoop();

    echo '<br><br><p>----------------------</p><br><br>';

    $names = ['Ptsr', 'Jung', 'Vst'];

    foreach ($names as $name){
        echo $name . '<br>';
    }
?>

<html>
    <head></head>

    <body>
        <label for="countries"></label>

        <select name="countries" method="get">
            <option value="Select a country">Select a country</option>
            <?php
                $countries = [
                    'BE' => 'Belgium',
                    'JP' => 'Japan',
                    'BR' => 'Brazil',
                    'NGA' => 'Nigeria',
                    'CHN' => 'China',
                    'ESP' => 'Spain',
                    'ZAF' => 'South Africa',
                    'US' => 'USA',
                    'CHL' => 'Chile',
                    'MEX' => 'Mexico'
                ];

                foreach ($countries as $key => $value) {
                    echo '<option value="' . $key . '">' . $key . '</option>';
                }
            ?>
        </select>
    </body>
</html>