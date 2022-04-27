<?php
    $class = 'on';
?>

<html>
    <head>
        <title>Apology Generator</title>

        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <h1>Make a proper apology</h1>

        <form method="post" action="excuse.php">
            <div>
                <label for="child_name">What's the name of the child ?</label>
                <input type="text" name="child_name">
            </div>

            <div>
                <label for="child_gender">What's his / her gender ?</label>
                
                <div>
                    <input type="radio" name="gender" value="boy">
                    <label for="gender">Boy</label>
                </div>

                <div>
                    <input type="radio" name="gender" value="girl">
                    <label for="gender">Girl</label>
                </div>
            </div>

            <div>
                <label for="teacher_name">What's the name of the teacher ?</label>
                <input type="text" name="teacher_name">
            </div>

            <div>
                <label for="motive">What's the motive of absence ?</label>
                
                <div>
                    <input type="radio" name="motive" value="illness">
                    <label for="motive">Illness</label>
                </div>

                <div>
                    <input type="radio" name="motive" value="pet_death">
                    <label for="motive">Death of the pet (or a family member)</label>
                </div>

                <div>
                    <input type="radio" name="motive" value="activity">
                    <label for="motive">Significant extra-curricular activity</label>
                </div>

                <div>
                    <input type="radio" name="motive" value="laziness">
                    <label for="motive">Just don't want to</label>
                </div>
            </div>

            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </body>
</html>

<?php
    $child_name;

    $son_daughter;
    $gender;

    $teacher_name;

    $motive;

    $excuses = [];
    $no_excuse = false;

    $apology_msg;

    $date = date("F j, Y", time());

    if( isset($_POST['child_name']) and isset($_POST['gender']) and isset($_POST['teacher_name']) and isset($_POST['motive']) ){
        $child_name = $_POST['child_name'];
        $son_daughter = ($_POST['gender'] == 'boy') ? 'My son' : 'My girl';
        $gender = ($_POST['gender'] == 'boy') ? 'His' : 'Her';
        $teacher_name = $_POST['teacher_name'];
        $motive = $_POST['motive'];

        switch($motive){
            case 'illness':
                $excuses[] = $gender . ' health condition justifies this absence. The family doctor has recommended a period of rest or one week.';
                $excuses[] = $gender . ' health condition justifies this absence. The family doctor has recommended a period of rest or two week.';
                $excuses[] = $gender . ' health condition justifies this absence. The family doctor has recommended a period of rest or three week.';
                $excuses[] = $gender . ' health condition justifies this absence. The family doctor has recommended a period of rest or four week.';
                $excuses[] = $gender . ' health condition justifies this absence. The family doctor has recommended a period of rest or five week.';
                break;
            case 'pet_death':
                $excuses[] = $gender . 'pet is dead yesterday. That justify a period of mourning of one week.';
                $excuses[] = $gender . 'pet is dead yesterday. That justify a period of mourning of two week.';
                $excuses[] = $gender . 'pet is dead yesterday. That justify a period of mourning of three week.';
                $excuses[] = $gender . 'pet is dead yesterday. That justify a period of mourning of four week.';
                $excuses[] = $gender . 'pet is dead yesterday. That justify a period of mourning of five week.';
                break;
            case 'activity':
                $excuses[] = $gender . 'activities make ' . $child_name . ' really tired. Thats why my child won\' attend class tomorrow';
                $excuses[] = $gender . 'activities make ' . $child_name . ' really tired. Thats why my child won\' attend class for two days';
                $excuses[] = $gender . 'activities make ' . $child_name . ' really tired. Thats why my child won\' attend class for three days';
                $excuses[] = $gender . 'activities make ' . $child_name . ' really tired. Thats why my child won\' attend class for four days';
                $excuses[] = $gender . 'activities make ' . $child_name . ' really tired. Thats why my child won\' attend class for five days';
                break;
            case 'laziness':
                $excuses[] = 'My child is just tired today. You\'ll see ' . $child_name . ' tomorrow.';
                $excuses[] = 'My child is just tired today. You\'ll see ' . $child_name . ' in two days.';
                $excuses[] = 'My child is just tired today. You\'ll see ' . $child_name . ' in three days.';
                $excuses[] = 'My child is just tired today. You\'ll see ' . $child_name . ' in four days.';
                $excuses[] = 'My child is just tired today. You\'ll see ' . $child_name . ' in one week.';
                break;
            default:
                $excuses[] = 'Shit, I don\'t have any excuse left ';
                $no_excuse = true;
                break;
        }

        $motive = ($no_excuse == false) ? $excuses[rand(0, 4)] : $excuses[0];

        $apology_msg = "Dear Professor " . $teacher_name . ", " . "<br><br><br>" . $son_daughter . ', ' . $child_name . ', ' 
        . 'a 4th grader in your school, will not be able to attend class today' . "<br>" . $motive . "<br>"
        . '<br>For any additional information please do not hesitate to contact us.' . '<br>'
        . '<br>Our most sincere greetings' . '<br>' . '<br>The Godmother, ' . $date . ".";

        $class = 'off';

        echo "<p>" . $apology_msg . "</p>";
    }else{
        echo "Please retry, the form is not complete";
    }
?>