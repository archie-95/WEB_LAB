<?php
    $a=array(array(1,2,3),array(4,5,6),array(7,8,9));
    $b=array(array(7,8,9),array(4,5,6),array(1,2,3));
    $m=count($a);   
    $n=Count($a[2]);
    $p=count($b);
    $q=count($b[2]);

    print" The First matrix is <br>";
    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++)
        {
            echo " ".$a[$row][$col];
        }
        echo"<br/>";
        }
    
    
    print" The second matrix is <br>";
    for ($row = 0; $row < $p; $row++) {
            for ($col = 0; $col < $q; $col++)
            {
                echo " ".$b[$row][$col];
            }
            echo"<br/>";
            }

    
            print" The Addition matrix is <br>";
            for ($row = 0; $row < $m; $row++) {
                    for ($col = 0; $col < $n; $col++)
                        {
                            echo "\t".$a[$row][$col]+$b[$row][$col]." ";
                        }
                        echo"<br/>";
                        }

     
     $result=array();
    for ($row = 0; $row < $m; $row++)
     {
    for ($col = 0; $col < $q; $col++)
    {
        $result[$row][$col]=0;
        for($k=0;$k<$n;$k++)
        {
            $result[$row][$col]+=$a[$row][$k]*$b[$k][$col];
            
        } 
     }
    }   
    print" The MUL matrix is <br>";
    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++)
        {
            echo " ".$result[$row][$col];
        }
        echo"<br/>";
        }
    
    
    
?>