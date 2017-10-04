<?php
    echo "<h2>Types</h2>";
    /*2.1*/
    //PHP is a loosely typed programming language.
    // PHP will determine the data type at the time data is assigned to each variable i.e you can change a variable's data type at any time.

    //The variable $type switchs between three data types
    $type = 3;                                      //integer
    $type .= "The variable changes data type";      //string
    $type = 2.35;                                   //float

    /*2.2*/
    //Array is used as a storage for multiple data types
    $variable[index];

    /*2.3*/
    //Special data types
    /*Resource & NULL*/

    /*2.4*/
    //String
    $myString="This is a string";
    echo "$myString";
    echo "</br>";

    /*2.5*/
    //Check variable type
    $intValue="3";
    $floatValue="Non";
    $stringValue="Yes or No";
    $binaryValue="01001001";

    echo "The statement that value has a type of int is ";
    echo is_int($intValue);
    echo "</br>";

    /*2.6*/
    //PHP-Operators
    //Operators are the most common building block almost in almost every programming language.

    /*Four categories of operators:
    1)Assigned Operator
    2)Arithmetic Operator
    3)Comparison Operator
    4)Logical Operator*/

    /*2.6.1*/
    //Assignment Operator
    //Assignment right-side operand to left through "="
    $greeteing = "hi there";


    /*2.6.2*/
    //Arithmetic Operator
    //Similar to assignment + - * /

    //Concatenation Operator
    // "."
    $var = "test";
    $var2 = "This is a ".$var;
    echo($var2);
    echo "</br>";

    /*2.6.3*/
    //Comparison Operator
    /*
     * == equal to
     * != not equal to
     * === identical
     * <
     * >
     * <=
     * >=
    */

    /*2.6.4*/
    //Logical Operator
    /*
     * AND &&
     * OR ||
     * XOR either right or left is true will show result true statement (But not both)
     * ! not
     * */

    /*2.7*/
    //PHP include() header, footer or menu
    //include("Data Types.php");
    /*It is much easier to create an php footer, header or menu and include them in the web page.
    Also it is beneficial in case if it is needed to be changed, cause it will be changed in all web pages at the same time.*/

    /*2.8*/
    //PHP require()
    /*The difference between include and require() is that in case of include() if we don't have a file code will be executed anyway.
    In case of require() it will give fatal error*/

    $eur = "5euros";
    $e=10;
    $e+=$eur;
    echo($e);
?>