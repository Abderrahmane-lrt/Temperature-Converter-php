<?php

if (isset($_POST['submit'])) {
    $temp = $_POST['temperature'];
    $unit = $_POST['units'];
    if (!empty($unit)) {
        if ($unit === 'C') {
            $result = ($temp * 9 / 5) + 32;
        } elseif ($unit === 'F') {
            $result = ($temp - 32) * 5 / 9;
        } else {
            $result = "Invalid unit";
        }
    } else {
        $result = "required fields!!";
    }



    header("Location: index.php?result=$result");
}
