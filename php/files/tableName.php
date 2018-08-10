<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table{
        width: 800px;
        border: 1px solid #ddd;
        border-collapse: collapse;
        margin: 40px auto;
    }
    table th{
        color: #fff;
        background: skyblue;
    }
    table td,table th{
        padding: 10px;
        border: 1px solid #ddd; 
    }
    table tr:nth-child(even){
        background: #fafcfd;
    }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>姓名</th>
            <th>编号</th>
            <th>年龄</th>
            <th>邮箱</th>
            <th>网站</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contents = file_get_contents('./names.txt');
            $nameDate = explode("\n",$contents);
            foreach($nameDate as $value){
                if(!$value) continue;
                $name = explode('|',$value);
                echo '<tr>';
                    if($name[0] < 10){
                        echo '<td>'.str_repeat('0',1).''.$name[0].'</td>';
                    }else{
                        echo '<td>'.$name[0].'</td>';
                    }
                    echo '<td>'.$name[1].'</td>';
                    echo '<td>'.$name[2].'</td>';
                    echo '<td>'.$name[3].'</td>';
                    echo '<td><a href="'.strtolower($name[4]).'">'.substr(trim($name[4]),7).'</a></td>';
                echo '</tr>';   
            }
        ?>
    </tbody>
</table>
</body>
</html>