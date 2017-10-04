<?php
/**
 * Created by PhpStorm.
 * User: wedie_000
 * Date: 7/11/2017
 * Time: 10:42 PM
 */
    $name=$_GET["givenName"];//name
    $age=$_GET["givenAge"];//age
    $weight=$_GET["givenWeight"]; //weight

    echo("<fieldset><legend><b>Person</b></legend>");
    echo("<p>Name of the person is <b>$name </b>age of the person is: <b>$age</b> weight of the person is: <b>$weight</b>.</p>");
    echo("</fieldset>");
?>