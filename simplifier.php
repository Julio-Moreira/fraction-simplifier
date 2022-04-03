<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simplifier fraction - result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>The result:</h1>
    <p>
        <?php
            $numer = $_GET["numer"];
            $num = $numer;
            $denom = $_GET["denom"];
            $den = $denom;
            $resto;
            
            function mdc($a, $b) {
                if ($b == 0) {
                    return $a;
                }
                $resto = $a % $b;
                $a = $b;
                $b = $resto;
                return mdc($a, $b);
            }

            $mdc = mdc($numer, $denom);
            $numer_sim = $num / $mdc;
            $denom_sim = $den / $mdc;
            echo "<span>$numer  --  $numer_sim<br>$denom  --  $denom_sim</span>";

        ?>
    </p>
    <a href="index.html"><button>back</button></a>
</body>
</html>