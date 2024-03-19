<?php 
    // EXERCICIOS BOOLEANOS: 

    // Utilizando || 
    false || false; // false
    true || false; // true
    false || true; // true
    true || true; // true 



    // Utilizando &&
    false && false; // false 
    true && false; // false 
    false && true; // false
    true && true; // true



    false || false || true; // true
    false && false && true; //  false 
    false || true && true; //true 
    (false || true) && true; // true
    


    // Utilizando !
    !false; //true
    !true; //false

    !(10 < 20) // !true = false
    (true && (!true || false)) && !false; // false

    (1 < 2) || (3 > 4) // true || false = true 
    (1 > 2) || (3 > 4) // false || false = false 

    (10 < 20) && (20 < 30) // true && true = true
    (20 < 30) && (30 > 40) // true && false = false

    (20 < 30) && !(30 > 40) // true && !false = true
?>