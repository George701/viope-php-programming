<?php
/**
 * Created by PhpStorm.
 * User: wedie_000
 * Date: 7/13/2017
 * Time: 6:48 AM
 */
    //If statement (if, else if, else
    //rand comb
    $comb=rand(0,9);
    $opportunity=$comb;
    $phrase="";

    echo "<h2>Conditions</h2></br>";

    if ($opportunity<=4){
        $phrase .="You won everything!";
    }
    else if($opportunity>=6){
        $phrase .="You have to try once again";

    }
    else {
        $phrase .="You keep the balance!";
    }
    echo "Result is $phrase</br>";

    //Switch-statement
    //Poker combinations

    switch ($comb){
        case 0: $card_comb="Royal Flush";
            break;
        case 1: $card_comb="Straight Flush";
            break;
        case 2: $card_comb="Four of a Kind";
            break;
        case 3: $card_comb="Full House";
            break;
        case 4: $card_comb="Flush";
            break;
        case 5: $card_comb="Straight";
            break;
        case 6: $card_comb="Three of Kind";
            break;
        case 7: $card_comb="Two Pairs";
            break;
        case 8: $card_comb="Pair";
            break;
        case 9: $card_comb="High Card";
            break;
    }
    echo "You got $card_comb</br>";
?>