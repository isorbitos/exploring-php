<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/customStyle.css">
    <title>Document</title>
</head>
<?php
function nameAndAge()
{
    $name = "Jonas";
    $surname = "Jonaitis";
    $bDate = 1900;
    $cDate = 2000;
    printf("Aš esu %s %a. Man yra %j metai(ų)", $name, $surname, ($cDate - $bDate)) ;

    // echo printf("Aš esu %s %s. Man yra %s metai(ų)", $name, $surname, $cDate - $bDate);
    // echo "Aš esu {$name} {$surname}. Man yra {$cDate-$bDate} metai(ų)";
}

function printDivision()
{
    $firstNumber = random_int(0, 4);
    $secondNumber = random_int(0, 4);
    if ($firstNumber * $secondNumber > 0) {
        return number_format(max($firstNumber, $secondNumber) / min($firstNumber, $secondNumber), 2);
    }
    return "Netinkami skaiciai";
}

function printMidNumber()
{
    $random01 = random_int(0, 25);
    $random02 = random_int(0, 25);
    $random03 = random_int(0, 25);
    return $random01 + $random02 + $random03 - min($random01, $random02, $random03) - max($random01, $random02, $random03);
}

function shortString()
{
    $firstActror = "Johnny Depp";
    $secondActor = "Amber Heard";
    echo strlen($firstActror) < strlen($secondActor) ? $firstActror : $secondActor;
}

function upperLower()
{
    $name = "Amber";
    $surname = "Depp";
    echo strtolower($name) . " " . strtoupper($surname);
}

function printInitials()
{
    $firstName = "Arnold";
    $lastName = "Shvarcneger";
    return "{$firstName[0]}{$lastName[0]}";
}

function random300numbers()
{
    $numbers = "";
    $biggerThen150 = 0;
    for ($i = 0; $i < 300; $i++) {
        $number = random_int(0, 300);
        $numbers .= $number > 275 ? "[${number}] " : "${number} ";
        if ($number > 150) {
            $biggerThen150 = $biggerThen150 + 1;
        }
    }
    echo $numbers;
    echo "<br>Bigger then 150: {$biggerThen150}";
}

function magicWith77()
{
    $numbersStr = "";
    $myNumber = 77;

    while (2 * 8 == 8 * 2) {
        $numbersStr .= $myNumber;
        $myNumber =$myNumber + 77;
        if ($myNumber > 3000) break;
        $numbersStr .= ", ";
      }
      return $numbersStr;
}

function simpleSquare(){
    for ($x=0; $x < 10; $x++) { 
        $line = "";
        for ($y=0; $y < 10; $y++) { 
            $line .="*";
        }
        echo "<p>{$line}</p>";
    }
}

function generateHtag($text, $hSize){
    if(1 <= $hSize and $hSize <=6 ){
        echo "<h{$hSize}>{$text}</h{$hSize}>";
    }else{
        echo "<h{$hSize}>wrog tag size</h{$hSize}>";
    }
}

function generateRandomString(){
    $rand = md5(microtime());
    return $rand;
}

function magicWithRandomString(){
    $randomString = generateRandomString();
    $numbers = "";
    foreach(str_split($randomString) as $char){
        if(is_numeric($char)){
            $numbers .= $char;
        }elseif(strlen($numbers) > 0){
            generateHtag($numbers,1);
            $numbers = "";
        }
    }
    if(strlen($numbers) > 0){
        generateHtag($numbers,1);
    }
}

function isPrime($number){
    $toReturn = 0;
    for ($x=2; $x <$number/2 ; $x++) { 
        if($number % $x == 0){
            $toReturn++;
        }
    }
    return $toReturn;
}



function randomArray(){
    $myArray = array();
    for ($x=0; $x < 100; $x++) { 
        array_push($myArray, random_int(33,77));
    }
    usort($myArray, fn($x, $y)=> isPrime($y) - isPrime($x));
    var_export($myArray);
}


?>

<body>
    <div class="b-example-divider"></div>

    <div class="container py-4">
        <div class="row align-items-md-stretch">
            <div class="col-md-4">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Task01 Part01</h2>
                    <p>
                        <?php
                            nameAndAge();
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Task02 Part01</h2>
                    <p>
                        <?php
                        echo printDivision();
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Task03 Part01</h2>
                    <p>
                        <?php
                        echo printMidNumber();
                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="b-example-divider"></div>

    <div class="container py-4">
        <div class="row align-items-md-stretch">

            <div class="col-md-4">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Task01 Part02</h2>
                    <p>
                        <?php
                        shortString();
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Task02 Part02</h2>
                    <p>
                        <?php
                        echo upperLower();
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Task03 Part02</h2>
                    <p>
                        <?php
                        echo printInitials();
                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container py-4">
        <div class="row align-items-md-stretch">
            <div class="col-md-4">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Task01 Part03</h2>
                    
                        <?php
                        random300numbers();
                        ?>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Task02 Part03</h2>
                    <p>
                        <?php
                        echo magicWith77();
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-5 text-bg-dark rounded-3 ">
                    <h2>Task03 Part03</h2>
                    <div class="square">
                        <?php
                         simpleSquare();
                        ?>
                    </div>
                        
                </div>
            </div>

        </div>
    </div>

    <div class="b-example-divider"></div>

<div class="container py-4">
    <div class="row align-items-md-stretch">
        <div class="col-md-4">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Task02 Part04</h2>
                
                    <?php
                    generateHtag("There are many variations of passages of Lorem Ipsum available",4);
                    ?>
                
            </div>
        </div>

        <div class="col-md-4">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Task03 Part04</h2>
                <p>
                    <?php
                        magicWithRandomString();
                    ?>
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="h-100 p-5 text-bg-dark rounded-3 ">
                <h2>Task05 Part03</h2>
                <div class="square">
                    <?php
                     randomArray();
                    ?>
                </div>
                    
            </div>
        </div>

    </div>
</div>

    <div class="container py-4"></div>
</body>

</html>