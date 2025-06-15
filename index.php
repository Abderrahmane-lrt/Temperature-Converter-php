<?php
$result = '';
$temperature = $_GET['temperature'] ?? '';
$units = $_GET['units'] ?? '';

if ($temperature !== '' && $units !== '') {
    $temp = floatval($temperature);
    if ($units === 'C') {
        $result = round(($temp * 9 / 5) + 32, 2) . ' °F';
    } elseif ($units === 'F') {
        $result = round(($temp - 32) * 5 / 9, 2) . ' °C';
    } else {
        $result = 'Invalid unit!!';
    }
}else{
    $result = 'Fiedls Required!!';
}
?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Document</title>
</head>

<body>

    <h1 class="text-center text-danger fw-bolder py-3 bg-danger-subtle">Temperature Converter</h1>
    <div class="container w-50 mt-5">
        <div class="card p-5">
            <form  id="form">
                <div class="card-header p-2">
                    <div class="input-group">
                        <input type="text" name="temperature" placeholder="Enter Temperature here..."
                            class="form-control py-3" id="temps" required >
                    </div>
                    <div class="card-body mt-2 d-flex justify-content-between justify-content-centerp-2 ">
                        <div class="form-check form-switch ">
                            <input class="form-check-input h4" type="radio" name="units" value="C">

                            <label class="form-check-label h2 text-warning" for="flexSwitchCheckDefault">C</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input h4" type="radio" name="units" value="F">
                            <label class="form-check-label h2 text-warning" for="flexSwitchCheckChecked">F</label>
                        </div>
                        <div class="">

                            <input type="text" value="<?= $result ?>" class="form-control py-2 text-danger fw-bolder" placeholder="Result" readonly>
                        </div>

                    </div>
                    <div class="card-footer d-grid p-2">
                        <button class="btn btn-dark py-2" name="submit">Convert</button>
                    </div>


                </div>
            </form>

        </div>

    </div>

</body>

</html>