
<?php 

    $year = "2020";
    $check1 = is_string($year);
    echo $check1;
    echo "<br>";
    var_dump($check1);
    echo "<br>";
    $data = array(1,2,3);
    $check = is_array($data);
    var_dump($check);
    
    // is_string(variable_name);
    // is_bool(variable_name);
    // is_float(variable_name);
    // is_integer(variable_name);
    // is_numeric(variable_name);        // أي أرقام
    // is_null(variable_name);
    
    // is_array(variable_name);
    // is_object(variable_name);
?>