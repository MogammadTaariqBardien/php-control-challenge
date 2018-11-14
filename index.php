<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Control Challenge</title>
</head>
<body>
    
    <?php
    // Challenge 1
    $break = "<br>";
    $lightColour = 'green';

    switch ($lightColour) {
        case 'red':
            echo 'Stop'.$break;
            break;

        case 'yellow':
            echo 'Slow down'.$break;
            break;

        case 'green':
            echo 'Go'.$break;
            break;
        
        default:
            echo 'Treat as 4-way stop'.$break;
            break;
    }
    echo "<hr>";
    // Challenge 2
    $age = 66;

    switch ($age) {
        case ($age <= 2):
                echo 'Free'.$break;
            break;
        case ($age >= 2 && $age <= 12):
                echo 'R20'.$break;
            break;
        case ($age >= 13 && $age <= 17):
                echo 'R30'.$break;
            break;
        case ($age >= 18 && $age <= 25):
                echo 'R40'.$break;
            break;
        case ($age >= 26 && $age <= 64):
                echo 'R60'.$break;
            break;
        case ($age >= 65):
                echo 'R30'.$break;
            break;
        
        default:
            echo 'You are not alive'.$break;
            break;
    }
    echo "<hr>";
    // Challenge 3
    $name = 'Taariq';

    switch ($name) {
        case ($name === 'Taariq'):
            echo 'Good day Sir!';
            break;
        case ($name === 'Evan'):
            echo 'Good day you beast!';
            break;
        case ($name === 'Taufeeq'):
            echo 'Hello Kind Sir!';
            break;
        case ($name === 'Josh'):
            echo 'You will be the best!';
            break;
        case ($name === 'Natheer'):
            echo 'Ay ya what is up';
            break;
        
        default:
            echo 'Unknown user';
            break;
    }
    echo "<hr>";
    ?>
</body>
</html>