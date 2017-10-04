<?php
/**
 * Created by PhpStorm.
 * User: wedie_000
 * Date: 7/11/2017
 * Time: 10:31 PM
 */
    $name=$_POST["givenName"];//name
    $age=$_POST["givenAge"];//age
    $weight=$_POST["givenWeight"]; //weight

    echo("<fieldset><legend><b>Person</b></legend>");
    echo("<p>Name of the person is <b>$name </b>age of the person is: <b>$age</b> weight of the person is: <b>$weight</b>.</p>");
    echo("</fieldset>");
?>