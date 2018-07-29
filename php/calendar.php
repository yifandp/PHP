<?php
    // 获取年
    $year = $_GET['y'] ? $_GET['y']: date('Y',time());
    // 获取月
    $month = $_GET['m'] ? $_GET['m'] : date('n',time());
    // 获取总天数
    $days = date('t',strtotime("{$year}-{$month}-1"));
    // 本月1号是周几
    $week = date('w',strtotime("{$year}-{$month}-1"));
    // 真正的第一天
    $first = 1 - $week;
    // 下一年 下一个月(月大于12 -> 月为一月 年加一年)))
    if($month >= 12){
        $nextYear=$year+1;
        $nextMonth=1;
    }else{
        $nextYear=$year;
        $nextMonth=$month+1;
    }

    // 上一个月
    if($month <= 1){
        $prevYear=$year-1;
        $prevMonth=12;
    }else{
        $prevYear=$year;
        $prevMonth=$month-1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .calendar-title,.control-date{
        text-align: center;
        color: #666;
    }
    .calendar-title{
        font-size: 20px;
        line-height: 40px;
        background: #ccc;
        text-shadow: 2px 2px 4px rgba(0,0,0,.3);
    }
    table{
        border: 1px solid #333;
        border-collapse: collapse;
        width: 1000px;
        height: 302px;
        margin: 0 auto;
    }
    table th{
        color: rgba(255,0,0,.7);
        font-size: 20px;
        background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
    }
    table td,th{
        border: 1px solid #333;
        height: 40px;
        text-align: center;
    }
    table tbody tr td{
        font-size: 18px;
        text-shadow: 1px 1px 3px rgba(0,0,0,.3);
    }
    table tbody tr td:first-child,
    table tbody tr td:last-child{
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%) !important;
    }
    .control-date a{
        display: inline-block;
        border-radius: 4px;
        line-height: 40px;
        padding: 0 20px;
        font-size: 18px;
        color: #fff;
        text-align: center;
        margin: 10px; 
        text-decoration: none;
        background-image: linear-gradient(to bottom, #89f7fe 0%, #66a6ff 100%);
    }
    </style>
</head>
<body>
    <table>
        <caption class="calendar-title">万年历 <?php echo $year;?>年<?php echo $month;?>月</caption>
        <thead>
            <tr>
                <th>周日</th>
                <th>周一</th>
                <th>周二</th>
                <th>周三</th>
                <th>周四</th>
                <th>周五</th>
                <th>周六</th>
            </tr>
        </thead>
        <thody>
            <?php
                for($i = $first; $i <= $days;){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        if($i <= $days && $i >= 1){
                            echo "<td style='background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);'>{$i}</td>";
                        }else{
                            echo "<td style='background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);'>&nbsp;</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }
            ?>
        </thody>
    </table>
    <div class="control-date">
        <a href="calendar.php?y=<?php echo $prevYear;?>&m=<?php echo $prevMonth;?>">上一月</a>
        <a href="calendar.php?y=<?php echo $nextYear;?>&m=<?php echo $nextMonth;?>">下一月</a>
    </div>
</body>
</html>