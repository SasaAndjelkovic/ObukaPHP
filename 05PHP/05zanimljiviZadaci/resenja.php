<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezbanje</title>
</head>

<body>

    <?php
    // 1. Napisati funkciju koja računa faktorijal nekog broja (broj ne sme biti negativan).
    // Napomena: faktorijal od 0 je 1
    function factorial($num)
    {
        if ($num < 0) {
            return;
        }
        if ($num = 0 || $num = 1) {
            return 1;
        }
        $factorijal = 1;
        for ($i = 2; $i <= $num; $i++) {
            $factorijal *= $i;
        };

        return $num;
    }

    $broj = 3;
    factorial($broj);

    echo "***Prvi zadatak***<br>";
    echo "Faktorijal broja $broj je: " . factorial($broj) . "<br><br>";

    // 2. Napisati funkciju koja proverava da li je broj prost.
    function isPrime($broj)
    {
        for ($i = 2; $i <= $broj / 2; $i++) {
            if ($broj % $i == 0)
                return "je slozen broj";
        }
        return "je prost broj";
    }

    $broj = 3;
    isPrime($broj);
    echo "***Drugi zadatak***<br>";
    echo "$broj " . isPrime($broj) . "<br><br>";

    //3. Pronađite indeks prvi peak elementa u nizu. Peak element je element čija vrednost nije manja od oba suseda 
    //(ako postoji jedan, onda samo od tog jednog).
    function findPeak($arr, $n)
    {
        if ($n == 1)
            return 0;
        if ($arr[0] >= $arr[1])
            return 0;
        for ($i = 1; $i < $n - 1; $i++) {
            if ($arr[$i] >= $arr[$i - 1] && $arr[$i] >= $arr[$i + 1])
                return $i;
        }
        if ($arr[$n - 1] >= $arr[$n - 2])
            return $n - 1;
    }

    $arr = [1, 3, 20, 4, 1, 0];
    $n = count($arr);
    $encoded = json_encode($arr);
    echo "***Treći zadatak***<br>";
    echo "U nizu $encoded peak element je na indeksu:" . findPeak($arr, $n) . "<br><br>";

    // 4. Napraviti funkciju koja vraća najmanji i najveće element niza. Povratna vrednost funkcije je niz sa tim vrednostima.
    function minAndMaxElement($arr)
    {
        // $mx = max($arr);
        // $mn = min($arr);
        // return [$mn, $mx];
        return [min($arr, max($arr))];
    }
    $arr = [100, 20, 30, 50, 220, 3, 22, 56];
    $encodedArr = json_encode($arr);
    $encodedMinMax = json_encode(minAndMaxElement($arr));
    echo "***Četvrti zadatak***<br>";
    echo "U nizu $encodedArr min i max elementi su: $encodedMinMax<br><br>";

    // 5. Napraviti funkciju koja sortira i ispisuje niz u rastućem redosledu.
    function sortArray($arr)
    {
        sort($arr);
        $encodedArr = json_encode($arr);
        echo "Sortiran niz: $encodedArr<br><br>";
        return $arr;
    }

    $arr = [100, 20, 30, 50, 220, 3, 22, 56];
    echo "***Peti zadatak***<br>";
    $arr = sortArray($arr);

    // 6. Napraviti funkciju koja ipsisuje niz u obrnutom redosledu.
    function reverseArray($arr)
    {
        array_reverse($arr);
        $encodedArr = json_encode($arr);
        echo "Okrenut niz je:  $encodedArr<br><br>";
        return $arr;
    }
    echo "***Šesti zadatak***<br>";
    reverseArray($arr);

    // 7. Napraviti funkciju koja vraća elemente koji nedostaje u nizu. Niz je sortiran rastuće i nema elemenata koji se ponavljaju.
    function findMissingElement($arr)
    {
        //bez gotovih funkcija
        $missing = [];
        $j = 0;
        for ($i = $arr[0]; $i < max($arr); $i++) {
            if ($i != $arr[$j])
                $missing[] = $i;
            else
                $j++;
        }
        return json_encode($missing); //niz u string
    }

    function findMissingElement2($arr)
    {
        //sa gotovim funckijama
        $new_arr = range($arr[0], max($arr));
        return json_encode(array_diff($new_arr, $arr));
    }
    $arr = [1, 3, 5, 8, 10];
    echo "***Sedmi zadatak***<br>";
    echo "Elementi koji nedeostaje su: " . findMissingElement($arr) . "<br>";
    echo "Elementi koji nedeostaje su: " . findMissingElement2($arr) . "<br><br>";

    //8. Napisati funkciju koja ispisuje sve elemente matrice.
    function writeMatrix($m)
    {
        $rows = count($m);
        $cols = count($m[0]);
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++)
                echo ($m[$i][$j]) . " ";
        }
        echo "<br>";
        // foreach ($m as $matrica) {
        //     foreach ($matrica as $matrica1) {
        //         print_r($matrica1);
        //     }
        //     echo "<br>";
        // }
    }

    $matrixA = array(
        array(1, 0, 1),
        array(4, 5, 6),
        array(1, 2, 3)
    );

    $matrixB = array(
        array(1, 1, 1),
        array(2, 3, 1),
        array(1, 5, 1)
    );

    echo "***Osmi zadatak***<br>";
    echo "Matrica A: <br>";
    echo  writeMatrix($matrixA) . "<br>";
    echo "Matrica B: <br>";
    echo  writeMatrix($matrixB) . "<br>";

    //9.Napisati funkciju koja sabira elemente matrice.
    function sumMatrix($ma, $mb)
    {
        $rows = count($ma);
        $cols = count($ma[0]);
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $mc[$i][$j] = 0;
                $mc[$i][$j] = $ma[$i][$j] + $mb[$i][$j];
            }
            // echo ($ma[$i][$j] + $mb[$i][$j]) . " ";
        }
        return $mc;
    }

    echo "<br>";
    echo "***Deveti zadatak***<br>";
    echo "Suma dve matrice: <br>";
    echo  writeMatrix(sumMatrix($matrixA, $matrixB)) . "<br>";

    //10. Napisati funkciju za izračunavanje sume elemenata na glavnoj dijagonali. //sta ako je 2*2
    function sumOnMatrixDiagonal($m)
    {
        $rows = count($m);
        $cols = count($m[0]);
        $sum = 0;
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($i == $j)
                    $sum += $m[$i][$j];
            }
        }
        return $sum;
    }

    echo "***Deseti zadatak***<br>";
    echo "Suma na glavnoj dijagonali matrice A je: " . sumOnMatrixDiagonal($matrixA) . "<br>";
    echo "Suma na glavnoj dijagonali matrice B je: " . sumOnMatrixDiagonal($matrixB) . "<br><br>";

    //11. Napisati funkciju koja će izvaditi username iz email-a. Npr. aleksa@gmail.com => aleksa
    function extractUsername($email)
    {
        $indeksEt = strpos($email, "@");
        return substr($email, 0, $indeksEt);
    }

    $email = "aleksa@gmail.com";
    echo "***Jedanaesti zadatak***<br>";
    echo "Username na osnovu email-a ($email) je: " . extractUsername($email) . "<br><br>";

    //12. Napisati funkciju koja će izdvojiti naziv fajla iz putanje 
    function extractFilename($path)
    {
        $slashIndex = strrpos($path, "/");
        return substr($path, $slashIndex + 1);
    }
    $path = "C:/xampp/htdocs/UNDP/vezbanje.php";
    echo "***Dvanaesti zadatak***<br>";
    echo "Naziv fajla iz putanje ($path) je: " . extractFilename($path) . "<br><br>";

    //13. Napisati funkciju koja će ukloniti sve nule na početnu string-a i na kraju ako se nalaze posle zareza (tačke). 
    //Tako dobijen broj zokružiti na ceo broj i vratiti kao povratnu vrednost funkcije.

    function removeZerosAndRoundNumber($str)
    {
        // return round((int)$str); //pretvaranje teksta u broj
        $str = ltrim($str, "0"); //sklonili smo nule sa pocetka
        if (strpos($str, ".") != false)
            $str = rtrim($str, "0");
        return round((int)$str);
    }
    echo "***Trinaesti zadatak***<br>";
    echo removeZerosAndRoundNumber('000547023.24') . "<br>";
    echo removeZerosAndRoundNumber('547023.24000') . "<br>";
    echo removeZerosAndRoundNumber('54702300000') . "<br>";
    echo removeZerosAndRoundNumber('000547023.24000') . "<br>";


    // 14. Na prazna mesta u rečenici upisati odgovarajuće reči. Voditi računa da dužina reči odgovara dužini crtica.
    function fillTheSentence($sentence, $words)
    {
        $i = 0;
        $startingUnderlineIndex = strpos($sentence, '_');
        while ($i < strlen($sentence)) {
            $nuberOfLindes = countConsecutively($sentence, $startingUnderlineIndex);
            $word = findTheWordBasedOnCharacters($words, $nuberOfLindes);
            $sentence = replaceUnderlinesWithString($sentence, $word, $startingUnderlineIndex, $startingUnderlineIndex + $nuberOfLindes);
            $startingUnderlineIndex = strpos($sentence, '_', $startingUnderlineIndex + $nuberOfLindes);
            $i = $startingUnderlineIndex;
            if ($i == false)
                return $sentence;
        }
    }

    function replaceUnderlinesWithString($sentence, $word, $start, $end)
    {
        $j = 0;
        for ($i = $start; $i < $end; $i++) {
            $sentence[$i] = $word[$j++];
        }
        return $sentence;
    }

    function findTheWordBasedOnCharacters($words, $numberOfCharacters)
    {
        foreach ($words as $word) {
            if (strlen($word) == $numberOfCharacters)
                return $word;
        }
    }

    function countConsecutively($sentence, $startingIndex)
    {
        $count = 0;
        for ($i = $startingIndex; $i < strlen($sentence); $i++) {
            if ($sentence[$i] == "_") $count++;
            else return $count;
        }
    }



    $sentence = "____________ Srbije odbranile su titulu svetskih prvakinja. ______________ Srbije je u finalu u holandskom _________ savladala selekciju Brazila sa ___, po setovima 26:24, _____, 25:17.";
    $words = ["Odbojkašice", "3:0", "25:17", "Apeldornu", "Reprezentacija"];
    echo "***Četrnaesti zadatak***<br>";
    echo "Početna rečenica je: <br> $sentence <br><br>";
    echo "Konačna rečenica je: <br>" . fillTheSentence($sentence, $words) . " <br>";
    ?>

</body>

</html>