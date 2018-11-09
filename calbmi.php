<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$s = $c/(pow(($b/100), 2));
print("<h3>Result</h3> <br>");
print($a);
printf("<br> BMI : %.2f <br>" , $s);
if ($s < 18.5){
    printf("BMI Categories : Underweight");
}
elseif (18.5 <= $s and $s <= 24.9){
    print("BMI Categories : Normal Weight");
}
elseif ( 25 <= $s and $s <= 29.9){
    print("BMI Categories : Over Weight");
}
else {
    print("BMI Categories : Obese");
}
echo '<table border=1>
<tr>
    <th>Weight Categories</th>
    <th>BMI</th>
</tr>
<tr>
    <td align="center">Underweight</td>
    <td align="center"><18.5</td>
</tr>
<tr>
    <td align="center">Normal Weight</td>
    <td align="center">18.5-24.9</td>
</tr>
<tr>
    <td align="center">Over Weight</td>
    <td align="center">25-29.9</td>
</tr>
<tr>
    <td align="center">Obese</td>
    <td align="center">30-39.9</td>
</tr>
</table>';
?>