<?php
    $s = "Я хочу быть программистом ";
    $word="";

    for($i=0;$i<strlen($s);$i++)
    {
        if($s[$i]==' ')
        {
            $arr[] = $word;
            echo $word . "<br />";
            $word="";
        }
        If(!($s[$i]==" "))
        $word .=$s[$i];


    }
?>