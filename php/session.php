<?php
    session_start();
    $_SESSION['username'] = 'zhangsan';
    $_SESSION['password'] = '12321';

    // 释放session
    unset($_SESSION['username']);
    session_destroy();
    
    // var_dump($_SESSION);
    // echo 'session 已设置';

    // $a = 2;
    // $b = 3;
    // // $a = (4 || $b = 0)
    // if($a = 4 || $b = 0){
    //     $a++;
    //     $b++;
    // }

    // echo $a;
    // echo '<br>';
    // echo $b;

    // $i = 1;
    // $tot = 0;
    // while($i<=100){
    //     $tot += $i;
    //     $i++;
    // }
    // echo $tot;

    header("Content-Type", "text/html");
    echo '<hr>';

    $i = 1;
    while($i <= 9){
        $j = 1;
        while($j <= $i){
           echo $j.'*'.$i.'='.$i * $j.'&nbsp;&nbsp;&nbsp;&nbsp;';
                 $j++;
        }
        echo '<br />';
        $i++;
    };

    function show(){
        static $a = 0;
        $a++;
        $func = __FUNCTION__;
        echo "第{$a}次调用{$func}函数<br/>";
    }

    show();
    show();
    show();
    show();
?>