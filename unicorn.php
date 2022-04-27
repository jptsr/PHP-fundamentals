<!-- 
    Get or Post ?
    
    GET => Limitation of characters (2000) and visible by everyone (in url)

    POST => No limitation of characters and invisible
-->



<html>
    <head></head>

    <body>
        <h3>UNICORN ?</h3>

        <form method="post" action="unicorn.php">
            <label for="race">"Are you a human, a cat or a unicorn ?"</label>

            <div>
                <input type="radio" name="race" value="human">
                <label for="race">HUMAN</label>
                <input type="radio" name="race" value="cat">
                <label for="race">CAT</label>
                <input type="radio" name="race" value="unicorn">
                <label for="race">UNICORN</label>
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
    
<?php
    $race;
    $src;

    if(isset($_POST['race'])){
        $race = $_POST['race'];

        $src = ($race == 'human') ? "<iframe src=\"https://giphy.com/embed/oJQ1b4p89kcM\" width=\"433\" height=\"480\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/colinraff-unicorn-art-animation-oJQ1b4p89kcM\">via GIPHY</a></p>" : (($race == 'cat') ? "<iframe src=\"https://giphy.com/embed/BzyTuYCmvSORqs1ABM\" width=\"480\" height=\"480\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM\">via GIPHY</a></p>" : (($race == 'unicorn') ? "<iframe src=\"https://giphy.com/embed/3oxRmhpsOgxoSeJiz6\" width=\"366\" height=\"480\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/illustration-animated-gif-3oxRmhpsOgxoSeJiz6\">via GIPHY</a></p>" : "???"));

        echo $src;

        
    }else{
        echo "Please state your race.";
    }
?>

<!-- ///////////////////////////////////////////////////////////////// -->

<?php
    // Specific field being mandatory

    // $fullname = $_GET['fullname'];

    // if ( strlen($fullname) == 0 ){
    // echo "Ahem. You forgot to enter your name.";
    // exit;
    // }

    $email1 = 'juptsr.becode@gmail.com';    // renvoie l'addresse mail
    $email2 = 'juptsr.becode@gmail.com';    // renvoie rien
    // $valid = filter_var($email, $filter = FILTER_VALIDATE_EMAIL, 0);

    // echo $valid;
?>