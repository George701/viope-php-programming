<?php
    $hours=$_GET["hours"];
    $perhour=$_GET["perhour"];
    $tax=$_GET["tax"];

    if(empty($hours) || empty($perhour) || empty($tax))
    {
        echo "Fill out all the fields.";
    }
    else
    {
        $gross_salary = $hours*$perhour;
        $tax_deduction = $hours*$perhour*$tax/100;
        $net_salary = $gross_salary-$tax_deduction;

        echo "Gross salary: ".$gross_salary;
        echo "Tax deduction: ".$tax_deduction;
        echo "Net salary: ".$net_salary;
    }
?>