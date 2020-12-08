<head> 
    <meta charset="utf-8">
</head>
<h1>Квадраты чисел</h1>
<form method="POST">
    От <input type="text" name="number1" value="0" size="2">
    До <input type="text" name="number2" value="0" size="2">
    <input type="submit" name="button" value="Посчитать">
    <input type="submit" name="buttonClear" value="Очистить">
    <table border=1 style="border-collapse=collapse; width:15%; text-align:center;">
        <tr style="background-color: #ff5333"> 
            <td>Число</td>
            <td>Степень</td>
        </tr>
        <tr>
        </tr>    
    
</form>
<?php
    if (!isset($_POST['button'])) {
        $st = $_POST['number1'];
        $end = $_POST['number2'];
    
    for ($st;$st <= $end; $st++) {
        $pow = pow($st, 2);
        echo("<tr>
            <td>Число = $st</td>
            <td>$pow</td>
        </tr>" 
        );
    }  
}
?>
</table>

<table style="none" border=1 style="border-collapse=collapse; width:15%; text-align:center; with=2000">
<?php
     if (isset($_POST['button'])) {
        $st = $_POST['number1'];
        $end = $_POST['number2'];
    
    for ($i = 1;$i <= 9; $i++) {
        echo("<tr  with=50>");
        for ($st;$st <= $end; $st++) {
            if ($i == 1) {
                for ($st;$st <= $end; $st++) {
                    echo("<td height=20 align=center><b> $st </b></td>");
                }
            break;
            }
            $mul = $i * $st;
            echo("<td height=20> $st * $i = $mul</td>");
        } 
        echo("</tr>");
        $st = $_POST['number1'];
    } 
}
?>
</table>