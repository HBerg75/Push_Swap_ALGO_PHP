<?php


require_once('methodes.php');



// function algo(){
//     global $la;

//     $default = verifLa();

//     $flag = true;
//     foreach($default as $key=>$value)
//         if($value!=$default[$key])
//             $flag = false;  

//             if($flag){
//             echo PHP_EOL;  
//             }else{
//         return false;

//     }
// }


function algo()
{
    global $la;
    $sort = $la;

    sort($sort);

    $flag = true;
    foreach ($sort as $key => $value)
        if ($value != $la[$key])
            $flag = false;

    if ($flag) {
        echo PHP_EOL;
    } else {
        trie();
    }
}

algo();



// je dois verifier que la valeur minimal es 0 (valeur de l'index du premiere element de mon tableau)
//En pleine recherche de doc sur comment reussir le pushswap car apres les methodes je ne comprends rien du tout 