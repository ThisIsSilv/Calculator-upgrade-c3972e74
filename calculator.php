<?php


echo "watchu wanna do (+ , - , %)\n";
$input = readline();



if ($input !== "%" and
    $input !== "-" and
    $input !== "+") {
    echo "stop daarmee";
    exit();

}


    if ($input == "+") {
    echo("First>\n");
    $nOne = readline();
     if (!is_numeric($nOne)){
         echo "Thats not a number\n";
         exit();
     }

    echo("Second>\n");
    $nTwo = readline();
    if (!is_numeric($nTwo)){
        echo "Thats not a number\n";
        exit();
    }
    echo("antwoord --->   ");
    echo($nOne + $nTwo);
}

if ($input == "-") {
    echo("First>\n");
    $nThree = readline();
    if (!is_numeric($nThree)){
        echo "Thats not a number\n";
        exit();
    }
    echo("Second>\n");
    $nFour = readline();
    if (!is_numeric($nFour)){
        echo "Thats not a number\n";
        exit();
    }
    echo("antwoord --->   ");
    echo($nThree - $nFour);
}

if ($input == "%") {
    echo("First>\n");
    $nFive = readline();
    if (!is_numeric($nFive)){
        echo "Thats not a number\n";
        exit();
    }
    echo("Second>\n");
    $nSix = readline();
    if (!is_numeric($nSix)){
        echo "Thats not a number\n";
        exit();
    }
    echo("antwoord --->   ");
    echo($nFive % $nSix);
}

