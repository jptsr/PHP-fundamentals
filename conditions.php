<?php
    /**
     * Series of exercises on PHP conditional structures.
    */  


    // 1.1 Clean your room Exercise 

    $room_is_filthy = true;

    function cleanup_room(){
        echo '<br>cleaning ...';
    };

    if( $room_is_filthy ){
        echo "Yuk, Room is dirty : let's clean it up !";
        cleanup_room();
        echo "<br>Room is now clean!";
        $room_is_filthy = false;
    } else {
        echo "Nothing to do, room is neat.";
    }
?>

<p>-----</p>

<?php
    // 1.2 Clean your room Exercise, improved

    // Create the array of possible states
    $possible_states = [
        'health hazard', 
        'filthy', 
        'dirty', 
        'clean', 
        'immaculate'
    ];

    // When testing, change the index value to navigate to the possible array values

    $room_filthiness = $possible_states[4];

    if( $room_filthiness == 'health hazard' ){
        echo "Yuk, Room is Disgusting! Let's clean it up !";
    } else if( $room_filthiness == 'filthy' ){
        echo "Yuk, Room is filthy : let's clean it up !";
    } else if( $room_filthiness == 'dirty' ){
        echo "Yuk, Room is dirty : let's clean it up !";
    }else if( $room_filthiness == 'clean' ){
        echo "Wow, Room is clean : good job !";
    } else {
        echo "Nothing to do, room is neat.";
    }
?>

<p>-----</p>

<?php
    // 2. "Different greetings according to time" Exercise

    $now = date( "G:i:s",time()); // How to get the current time in PHP ? Google is your friend ;-)
    $actual_hour = substr($now, 0, 2) + 2;
    $actual_minutes = substr($now, 3, 2);

    // Test the value of $now and display the right message according to the specifications.
    if( $actual_hour >= 5 AND $actual_hour <= 9){
        echo "Good morning !";
    }else if($actual_hour >= 9 AND $actual_hour <= 12 AND $actual_minutes > 0){
        echo "Good morning !";
    }else if ($actual_hour >= 12 AND $actual_hour <= 16 AND $actual_minutes > 0) {
        echo "Good afternoon !";
    }else if ($actual_hour >= 16 AND $actual_hour <= 21 AND $actual_minutes > 0) {
        echo "Good evening!";
    }else if (($actual_hour >= 21 AND $actual_minutes > 0) OR ($actual_hour <= 4 AND $actual_minutes < 60)) {
        echo "Good night !";
    }
?>

<p>-----</p>

<html>
    <head></head>

    <body>
        <h3>Form</h3>
        <form method="get" action="conditions.php">
            <div>
                <label for="age">What's your age ?</label>
                <input type="number" name="age">
            </div>

            <div>
                <label for="gender">Man or Woman ?</label>
                <input type="radio" value="man" name="genders">
                <label for="man">MAN</label>
                <input type="radio" value="woman" name="genders">
                <label for="woman">WOMAN</label>
            </div>

            <div>
                <label for="mothertongue">Do you speak English ?</label>
                <input type="radio" value="yes" name="mothertongue">
                <label for="yes">YES</label>
                <input type="radio" value="no" name="mothertongue">
                <label for="no">NO</label>
            </div>

            <div>
                <input type="submit" name="submit" value="Greet me now">
            </div>
        </form>
    </body>
</html>

<?php
    $age;
    $gender;
    $mothertongue;

    if (isset($_GET['age']) and isset($_GET['genders']) and isset($_GET['mothertongue'])){
        $age =  $_GET['age'];
        $gender = $_GET['genders'];
        $mothertongue = $_GET['mothertongue'];

        if($age >= 0 and $age < 12){
            if($mothertongue == 'yes'){
                if($gender == 'woman'){
                    echo "Hello Girl !";
                }else{
                    echo "Hello Boy !";
                }
            }else{
                if($gender == 'woman'){
                    echo "Aloha Girl !";
                }else{
                    echo "Aloha Boy !";
                }
            }
        }else if($age >= 12 and $age < 18){
            if($mothertongue == 'yes'){
                if($gender == 'woman'){
                    echo "Hello Miss Teen !";
                }else{
                    echo "Hello Mister Teen !";
                }
            }else{
                if($gender == 'woman'){
                    echo "Aloha Miss Teen !";
                }else{
                    echo "Aloha Mister Teen !";
                }
            }
        }else if($age >= 18 and $age < 115){
            if($mothertongue == 'yes'){
                if($gender == 'woman'){
                    echo "Hello Ma'am !";
                }else{
                    echo "Hello Sir !";
                }
            }else{
                if($gender == 'woman'){
                    echo "Aloha Ma'am !";
                }else{
                    echo "Aloha Sir !";
                }
            }
        }else if($age >= 115){
            if($mothertongue == 'yes'){
                if($gender == 'woman'){
                    echo "Wow! Still alive Ma'am ? Are you a robot, like me ? Can I hug you ?";
                }else{
                    echo "Wow! Still alive Sir ? Are you a robot, like me ? Can I hug you ?";
                }
            }else{
                if($gender == 'woman'){
                    echo "Wow, aloha! Still alive Ma'am ? Are you a robot, like me ? Can I hug you ?";
                }else{
                    echo "Wow, aloha! Still alive Sir ? Are you a robot, like me ? Can I hug you ?";
                }
            }
        }else{
            echo "What are you exactly ?";
        }
    }else{
        echo "Form's not complete, please retry";
    }
?>

<p>-----</p>

<html>
    <head></head>

    <body>
        <h3>Welcome ! Wanna be a soccer member of our team ? Complete the form :</h3>
        <form method="get" action="conditions.php">
            <label for="firstname">What's your name ?</label>
            <input type="text" name="firstname">

            <label for="age">How old are you ?</label>
            <input type="number" name="age">

            <label for="gender">Man or Woman ?</label>
            <input type="radio" name="gender" value="yes">
            <label for="gender">YES</label>
            <input type="radio" name="gender" value="no">
            <label for="gender">NO</label>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<?php
$name;
$age;
$gender;
$msg1 = "Sorry you don't fit the criteria.";

    // if(isset($_GET['firstname']) and isset($_GET['age']) and isset($_GET['gender'])){
    //     $name = $_GET['firstname'];
    //     $age = $_GET['age'];
    //     $gender = $_GET['gender'];

    //     if($age >= 21 and $age <= 40 and $gender == 'yes'){
    //         echo "Welcome to the team !";
    //     }else{
    //         echo "Sorry you don't fit the criteria.";
    //     }
    // }else{
    //     echo "The form is incomplete, please retry.";
    // }

    if(isset($_GET['firstname']) and isset($_GET['age']) and isset($_GET['gender'])){
        $name = $_GET['firstname'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];

        if($age >= 21 and $age <= 40 and $gender == 'yes'){
            $msg1 = "Welcome to the team !";
        }

        echo $msg1;
    }
    
    if(!(isset($_GET['firstname'])) or !(isset($_GET['age'])) or !(isset($_GET['gender']))){
        echo "The form is incomplete, please retry.";
    }
?>

<p>-----</p>

<html>
    <head></head>

    <body>
        <h3>Nasty teacher</h3>

        <form method="get" action="conditions.php">
            <label for="grade">What's your grade ?</label>
            <input type="number" name="grade">

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<?php
$grade;
$msg;

if(isset($_GET['grade'])){
    $grade = $_GET['grade'];

    if($grade <= 4 and $grade >= 0){
        $msg = "This work is really bad. What a dumb kid! ";
    }else if($grade >=5 and $grade <= 9){
        $msg = "This is not sufficient. More studying is required.";
    }else if($grade == 10){
        $msg = "barely enough!";
    }else if($grade > 10 and $grade <= 14){
        $msg = "Not bad!";
    }else if($grade >= 15 and $grade <= 18){
        $msg = "Bravo, bravissimo!";
    }else if($grade == 19 or $grade == 20){
        $msg = "Too good to be true : confront the cheater!";
    }else{
        $msg = "Are you stupid ?";
    }

    echo $msg;
}
?>