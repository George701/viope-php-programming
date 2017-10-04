<?php
    $students = "students.txt";
    $id = $_GET['student'];
    $line = file($students);
    $i=0;

    /*$string_line_array = explode('|', $line[0]);

    echo $string_line_array[1];
    echo $line[1];*/

    $fp=@fopen($students, r);
    if(is_resource($fp))
    {
        while(!fgets($line[$i]))
        {
            $string_line_array = explode('|', $line[$i]);
            if($string_line_array[0] == $id)
            {
                if($string_line_array[2] == 0)
                {
                    echo $string_line_array[1]."(".$string_line_array[0]."): "."hasn\'t signed up";
                    break;
                }
                else
                {
                    echo $string_line_array[1]."(".$string_line_array[0]."): "."has signed up";
                    break;
                }

            }
            else
            {
                echo "No students with that id!";
            }
            $i++;
        }
    }
    else
    {
        echo "Error!";
    }
?>