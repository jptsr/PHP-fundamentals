<!-- http://localhost/variable/variable_types.php? -->

<?php
    $firstname = 'Julie';
    $age = 21;
    $eyes_color = 'dark brown';
    $persons = [
        'p1' => 'Maman',
        'p2' => 'Papa',
        'p3' => 'Soeur'

    ];
    $hungry = true;
?>

<html>
    <head></head>

    <body>
        <h4><strong>EXERCICE 1</strong></h4>
        <p><?php echo "Hi ! My name is $firstname."; ?></p>
        <p><?php echo "I am $age years old."; ?></p>
        <p><?php echo "My eyes are $eyes_color."; ?></p>
        <p><?php echo "First family member is : " . $persons['p1']; ?></p>
        
        <?php 
            if($hungry){
                echo "I am hungry";
            }else{
                echo "I am not hungry";
            }
        ?>



        <h4><strong>EXERCICE 2</strong></h4>
        <?php
            $right = true;
            $sentence1 = '';
            $sentence2 = '';

            if($right) {
                // code to execute if the condition results TRUE
                $sentence1 = "Yep, that's right.";
                $sentence2 = "And I love being right!";
            } else {
                // code to execute if the condition results FALSE
                $sentence1 = "Nah, it's not.";
                $sentence2 = "Better luck next time :-( .";
            }
        ?>

        <p><?php echo $sentence1; ?></p>
        <p><?php echo $sentence2; ?></p>



        <h4><strong>EXERCICE 3</strong></h4>
        <?php
            $temperature = 20;
            $clothes = 'Lol';

            if( $temperature >= 15 ) {
                // code to execute if the condition results TRUE
                $clothes = "T-shirt";
                $should_i_wear_a_scarf = false;
            } else {
                // code to execute if the condition results FALSE
                $clothes = "Pull-over";
                $should_i_wear_a_scarf = true;
            }
            
            if ($should_i_wear_a_scarf == true){
                // this is a "fake" function for the sake of the example 
                // that function is only executed in the condition is true
                grab_scarf_from_door_hanger();
            }
            // The following function will be executed everytime, 
            // but its $clothes argument changes according to the result
            // of our previous conditional structure
            function cover_my_chest_with($lol) {
                echo "Put a " . $lol;
            }
        ?>

        <p><?php echo cover_my_chest_with($clothes); ?></p>



        <h4><strong>EXERCICE 4</strong></h4>
        <?php
        $age = 10;
        $language = "Spanish";
        // $language = "English";

        if ( $age <= 12 OR /*AND*/ $language == "English" ) { 
            echo "Hello kiddo!";
        } else {
            echo "Good day stranger !";
        }
        ?>

        <p>---</p>

        <?php
            $gender = 'Female';
            $age = 20;
            $language = 'Chinese';

            if ($gender == 'Female'){

                // Instructions here will be ran if gender is "Female"

                if ( $age <= 12 and $language == "English" ) {
                    // Instructions here will be ran if gender is Female, age is below 13 and language is English.  
                    echo "I am {$age} and speak {$language}";
                } else{
                    // Instructions here will be ran if gender is Female, and age is above 12 or language is not English. 
                    echo "Oups";
                }

            } else {
                // Instructions here will be ran if gender is not "Female"

                if ( $age <= 12 and $language == "Chinese" ) {
                    // Instructions here will be ran if gender is not Female, and if age is below 13 and language is Chinese. 
                    echo "I am {$age} and speak {$language}";
                }
            }
        ?>
 
    </body>
</html>