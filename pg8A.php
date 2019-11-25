<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="post">
<table>
    <caption> <h2> Simple Calculator</h2></caption>
    <tr> <td>NUMBER 1</td> <td><input tpye="text" name="num1"></td><td rowspan="2"><input type="submit" name="submit" value="calculate"></td></tr>
    <tr> <td>NUMBER 2</td> <td><input tpye="text" name="num2"></tr>
</form>
<?php
    if(isset($_POST['submit']))
    {
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        if(is_numeric($num1) and is_numeric($num2))
        {
            print"<tr><td>ADD</td><td>".($num1+$num2)."</td></tr>";
            print"<tr><td>SUB</td><td>".($num1-$num2)."</td></tr>";
            print"<tr><td>MUL</td><td>".($num1*$num2)."</td></tr>";
            print"<tr><td>DIV</td><td>".($num1/$num2)."</td></tr>";
        }
    } 
    ?>   
</table>
</body>
</html>