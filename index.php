<?php
    $answer = 0;
    $convertTo = 'unit';
    $convertFrom = 'units';
    if (isset($_POST['convert'])) {
        $value = $_POST['value'];
        $convertFrom = $_POST['convertFrom'];
        $convertTo = $_POST['convertTo'];
        

        if ($convertFrom == 'Gram' AND $convertTo == 'Kilogram') {
            $answer = round(floatval($value)/1000, 5);
        } elseif ($convertFrom == 'Kilogram' AND $convertTo == 'Gram') {
            $answer = round(floatval($value) * 1000, 5);
        } elseif ($convertFrom == 'Kilogram' AND $convertTo == 'Pound') {
            $answer = round(floatval($value) * 2.20462262185, 5);
        } elseif ($convertFrom == 'Pound' AND $convertTo == 'Kilogram') {
            $answer = round(floatval($value) / 2.20462262185, 5);
        } elseif ($convertFrom == 'Gram' AND $convertTo == 'Pound') {
            $answer = round(floatval($value) * 2.20462262185 / 1000, 5);
        } elseif ($convertFrom == 'Pound' AND $convertTo == 'Gram') {
            $answer = round(floatval($value) / 2.20462262185 * 1000, 5);
        } elseif($convertFrom == 'Meter' AND $convertTo == 'Centimeter'){
            $answer = round(floatval($value) * 100, 5);
        } elseif($convertFrom == 'Centimeter' AND $convertTo == 'Meter'){
            $answer = round(floatval($value) / 100, 5);
        } elseif($convertFrom == 'Meter' AND $convertTo == 'Kilometer'){
            $answer = round(floatval($value) / 1000, 5);
        } elseif($convertFrom == 'Kilometer' AND $convertTo == 'Meter'){
            $answer = round(floatval($value) * 1000, 5);
        } elseif($convertFrom == 'Kilometer' AND $convertTo == 'Centimeter'){
            $answer = round(floatval($value) * 100000, 5);
        } elseif($convertFrom == 'Centimeter' AND $convertTo == 'Kilometer'){
            $answer = round(floatval($value) / 100000, 5);
        } else{
            $answer = "Can't convert " . $convertFrom . "s to ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first PHP file</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Measurement Converter App</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td><h3>Enter Value:</h3></td>
                    <td>
                        <input type="text" name="value" placeholder="Enter Value">
                    </td>
                </tr>

                <tr>
                    <td><h3>Convert from:</h3></td>
                    <td>
                        <select name="convertFrom" id="">
                            <option value="" disabled selected>Select Unit</option>
                            <option value="Gram">Grams</option>
                            <option value="Kilogram">Kilograms</option>
                            <option value="Pound">Pounds</option>
                            <option value="Meter">Meters</option>
                            <option value="Centimeter">Centimeters</option>
                            <option value="Kilometer">Kilometers</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><h3>Convert to:</h3></td>
                    <td>
                        <select name="convertTo" id="">
                            <option value="" disabled selected>Select Unit</option>
                            <option value="Gram">Grams</option>
                            <option value="Kilogram">Kilograms</option>
                            <option value="Pound">Pounds</option>
                            <option value="Meter">Meters</option>
                            <option value="Centimeter">Centimeters</option>
                            <option value="Kilometer">Kilometers</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="convert" value="Convert" id="convert">
                    </td>
                </tr>
                
            </table>
        </form>
        <div class="output">
            <p>Output : <?php echo $value . ' ' . $convertFrom . '(s) equals'. ' ' .$answer . ' ' . $convertTo.'(s)'?></p>
        </div>
    </div>
    
</body>


</html>