<?php

    $numberstring = $_GET['numberstring'];
    $array = explode(',',$numberstring);

    echo "Order in the beginning: ".$numberstring."</br>";

    function bubble_sort($arr, $desc = false)
    {
        $size = count($arr);
        for ($i=0; $i<$size; $i++)
        {
            for ($j=0; $j<$size-1-$i; $j++)
            {
                if($desc)
                {
                    if ($arr[$j+1] > $arr[$j])
                    {
                        swap($arr, $j, $j+1);
                    }
                }
                else
                    {
                    if ($arr[$j+1] < $arr[$j])
                    {
                        swap($arr, $j, $j+1);
                    }
                }
            }
        }
        return $arr;
    }

    function swap(&$arr, $a, $b)
    {
        $tmp = $arr[$a];
        $arr[$a] = $arr[$b];
        $arr[$b] = $tmp;
    }

    $minus_array=implode(',',bubble_sort($array));
    $smallest_largest=$minus_array;

    $plus_array=implode(',',bubble_sort($array, true));
    $largest_smallest=$plus_array;

    echo "Largest to smallest: ".$largest_smallest."</br>";

    echo "Smallest to largest: ".$smallest_largest."</br>";

/*if($array[$i]>$array[$i+1])
{
$temp=$array[$i];
$array[$i]=$array[$i+1];
$array[$i+1]=$temp;
$i=-1;
}
$smallest_largest=$i;

$array[$i]=$temp;
                $array[$i+1]=$array[i];
                $temp=$array[$i+1];

for($x = 0; $x < count($array); $x++)
    {
        for($i = 0; $i < count($array)-1; $i++)
        {
            if($array[$i]>$array[$i+1])
            {
                $temp = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $temp;
                $new_array
            }
        }
        $array=implode(',',$array);
        $largest_smallest=$array;
    }
*/

?>