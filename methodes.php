<?php
array_shift($argv);   // array shift retire le nom du scrip
// var_dump($argv);

$la = $argv;   // argv recupere les chiffre taper ds le terminal  c'est toujours un tableau
$lb = [];

function sa()
{
    global $la;
    if (count($la) >= 2) {
        $x = $la[0];
        $la[0] = $la[1];
        $la[1] = $x;
    }
};


function sb()
{
    global $lb;

    if (count($lb) >= 2) {
        $x = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $x;
    };
};



function sc()
{
    sa();
    sb();
}

function pa()
{
    global $la;
    global $lb;


    if (!empty($lb)) {
        $b = array_shift($lb);  // array shift = enleve la premiere position
        array_unshift($la, $b); //array unshift = sa pousse a la premiere position
    }
}

function pb()
{
    global $la;
    global $lb;


    if (!empty($la)) {
        $b = array_shift($la);
        array_unshift($lb, $b);
    }
};


function ra()
{


    global $la;
    global $lb;


    $b = array_shift($la);
    array_push($la, $b);
}


function rb()
{

    // global $la;
    global $lb;


    $b = array_shift($lb);
    array_push($lb, $b);
}

function rr()
{
    ra();
    rb();
}

function rra()
{
    global $la;

    $b = array_pop($la);
    array_unshift($la, $b);
}

function rrb()
{
    global $lb;

    $b = array_pop($lb);
    array_unshift($lb, $b);
}

function rrr()
{
    rra();
    rrb();
}

// function verifLa()
// {
//     global $la;
//     $tempoStock = $la;
//     sort($tempoStock);


//     if ($tempoStock === $la) {
//         return true;
//     } else {
//         return false;
//     }
// };

function trie(){
    global $la;
    global $lb;

    $array = [];

    foreach ($la as $key => $value) {
        while ($la[0] != min($la)) {
            if ($la[1] == min($la)) {
                sa();
                array_push($array,"sa");
            }else {
                rra();
                array_push($array, "rra");

            }
        }
        if ($la[0] == min($la)) {
            pb();
            array_push($array, "pb");
        }
    }
    foreach ($lb as $key => $value) {
        if ($lb[0] == max($lb)) {
            pa();
            array_push($array, "pa");
        }
    }

    $method_call = implode(" ", $array);
    echo $method_call . PHP_EOL;
    // var_dump($la);
};



