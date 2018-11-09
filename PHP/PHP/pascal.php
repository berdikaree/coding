<?php 

for ($i=0; $i<=5; $i++)
{
    for ($k=0; $k<=((2*5)-(2*$i)); $k++)
    {
        echo "&nbsp;";
    }
    for ($j=0; $j<=$i; $j++)
    {
        if ($j==0||$i==$j)
        {
            $a=1;
        }
        else
        {
            $a=$a*($i+1-$j)/$j;
        }
        echo "&nbsp;";
        echo "$a";
        echo "&nbsp;";
    }
    echo "&nbsp;";
    echo "<br><br>";
}

?>