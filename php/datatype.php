<?php
    function computed(){
        echo '<table width="800" border="1" cellspacing="0" cellpadding="0">';
            for($i = 1; $i <= 9; $i++){
                echo '<tr>';
                    for($j = 1; $j <= $i; $j++){
                        echo '<td>'.$j.'*'.$i.'='.$i*$j.'</td>';
                    }
                echo '</tr>';
            }
        echo '</table>';
    }
    // computed();
    phpinfo();

?>