<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electricity Bill Calculator</title>
</head>
<body>
<div class="container" style="text-align:center">
    <div>
        <h2>PHP Electricity Bill Calculator</h2>
            <form action="" method="POST" id="myForm">
                <input type="number" min="1" name="units" placeholder="Please enter units" style="width=200px"/>
                <input type="submit" name="btn" value="Submit"/>
            </form>
    </div>


    <?php
    
    function calcBill($units){

        if ($units<=50) {
            $bill = $units * 3.50;
        } elseif ($units>=51 && $units<=150) {
            $firstSet = 50 * 3.50;
            $current = ($units - 50) * 4.00;
            $bill = $firstSet + $current;
        } elseif ($units>=151 && $units<=250) {
            $firstSets = (50 * 3.50) + (100 * 4.00);
            $current = ($units - 150) * 5.20;
            $bill = $firstSets + $current;
        } else {
            $firstSets = (50 * 3.50) + (100 * 4.00) + (100 * 5.20);
            $current = ($units - 250) * 6.50;
            $bill = $firstSets + $current;
        }
        return number_format($bill,2). "";
    }

    if (isset($_POST['btn'])) {
        $units = ($_POST['units']);
        if ($units == "") {
            echo "Please enter amount of units!";
        } else {
            $result = calcBill($units);
            echo "Total amount for ", $units, "units ", "= ", $result, "NGN";
        }
    }


     

    ?>
</div>
    
</body>
</html>