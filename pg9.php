<?php
    $states="Missisippi Alabama Texas Massachusetts Kansas";
    $statesarray=[];
    $states1=explode(" ",$states);
    echo"Original Array <br>";
    foreach($states1 as $i=>$value)
    {
        echo "STATES[$i]=$value<br>"; 
    }

    foreach($states1 as $state) {
        if(preg_match( '/xas$/', ($state)))
        $statesarray[1] = ($state);
        }
    foreach($states1 as $state)
    {
        if(preg_match('/^k.*s$/i',$state))
        $statesarray[2]=$state;
    }
    foreach($states1 as $state)
    {
        if(preg_match('/^M.*s$/',$state))
        $statesarray[3]=$state;
    }
    foreach($states1 as $state)
    {
        if(preg_match('/a$/',$state))
        $statesarray[4]=$state;
    }
    echo"NEW ARRAY<br>";
    foreach($statesarray as $j=>$value)
    {
        echo "STATES[$j]=$value<br>"; 
    }
    