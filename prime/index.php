<?php
    $n1=$_POST["number1"];
    $n2=$_POST["number2"];

    if ($n1 > $n2) {
        $start = $n2;
        $end = $n1;
        print "<h4>Prime Numbers between $start & $end</h4>";
        for ($i = $start; $i < $end; $i++) {
            $div_count=0;  
            for ($j = 1; $j <= $i; $j++) {  
                if (($i % $j) == 0) {  
                    $div_count++;  
                }  
            }  
            if ($div_count < 3 && $i != 1) {
                print "<h4>$i</h4><br>";    
            }
        }
    }

    if ($n1 < $n2) {
        $start = $n1;
        $end = $n2;
        print "<h4>Prime Numbers between $start & $end</h4>";
        for ($i = $start; $i < $end; $i++) {
            $div_count=0;  
            for ($j = 1; $j <= $i; $j++) {  
                if (($i % $j) == 0) {  
                    $div_count++;  
                }  
            }  
            if ($div_count < 3 && $i != 1) {
                print "<h4>$i</h4><br>";    
            }
        }
    }
?>