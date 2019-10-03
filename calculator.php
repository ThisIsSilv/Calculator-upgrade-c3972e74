<?php


echo "watchu wanna do (+ , - , %)\n";
$input = readline();



if ($input !== "%" and
    $input !== "-" and
    $input !== "+") {
    echo "stop daarmee";
    Exit;

}


    if ($input == "+") {
    echo("First>\n");
    $a = readline();
     if (!is_numeric($a)){
         echo "Thats not a number\n";
         Exit;
     }

    echo("Second>\n");
    $b = readline();
    if (!is_numeric($b)){
        echo "Thats not a number\n";
        Exit;
    }
    echo("antwoord --->   ");
    echo($a + $b);
}

if ($input == "-") {
    echo("First>\n");
    $c = readline();
    if (!is_numeric($c)){
        echo "Thats not a number\n";
        Exit;
    }
    echo("Second>\n");
    $d = readline();
    if (!is_numeric($d)){
        echo "Thats not a number\n";
        Exit;
    }
    echo("antwoord --->   ");
    echo($c - $d);
}

if ($input == "%") {
    echo("First>\n");
    $e = readline();
    if (!is_numeric($e)){
        echo "Thats not a number\n";
        Exit;
    }
    echo("Second>\n");
    $f = readline();
    if (!is_numeric($f)){
        echo "Thats not a number\n";
        Exit;
    }
    echo("antwoord --->   ");
    echo($e % $f);
}

