<?php
    $a = 3;

    function sum($a){
        $tot += $a;

        if($a < 1){
            $tot += sum($a--);
        }

        return $tot;
    }

    echo sum($a); // 6
?>