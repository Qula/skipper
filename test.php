<?php

// główna funkcja wyznaczająca podział liczby
// n – liczba naturalna, której chcemy wyznaczyć podział
// max – maksymalny składnik
// prefix – parametr pomocniczy do przekazywania wygenerowanego ciągu
function P($n, $max, $prefix)
{
    echo '<br> n: '.$n.' max: '.$max." pre: ".$prefix;
// warunek zakończenia rekurencji – jeśli n = 0 tzn, że wyznaczyliśmy podział
    if ($n == 0) {
// sprawdź czy podział jest parami różny, jeśli tak to wyświetl
        echo 'n=0; ';
        if (pairsDifferent($prefix)) {
            echo '<br>ok:'.$prefix.' KON<br/>';
        }else{
            echo 'false<br>';
        }
        return;
    }
// wyznaczamy podziały
    for ($i = min($max, $n); $i >= 1; $i--)
    {
        echo "<br>for:".$i;
        P($n-$i, $i, $prefix." ".$i);
    }
}
// funkcja sprawdza czy zadany podział jest parami różny
function pairsDifferent($prefix)
{
    $components = explode(' ', $prefix); // zamiana ciągu znaków w tablicę liczb całkowitych

    foreach ($components as $k => $c)
    {

        if ($k > 0 && $c == $components[$k-1]) {
            return false;
        }
    }
    return true;
}
// prodecura uruchamiająca algorytm dla zadanej liczby naturalnej
function partition($n)
{
    P($n, $n, '');
}

partition(5);

?>

<script>
    console.log("asd");
    var string = "TEST Termina"
    console.log(string.length);
    console.log(((string.length) > 5  ? 'hello' : 'world'));
    console.log( string.length < 5 ? (string).substring(0,5) : (string) );


</script>
