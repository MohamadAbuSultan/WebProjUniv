<!DOCTYPE html>
<html>
<body>

<?php
    function fib($num)
    {
       $arr = array();
       $arr[0]=0; 
       $arr[1]=1;
       for($i = 2; $i <= $num; $i++){
        $arr[$i] = $arr[$i-1] + $arr[$i-2];
        echo $arr[$i] . "<br>";
       } 
       return $arr[$num];
    }
    $n = 16;
    fib($n);
?> 
    
</body>
</html>
