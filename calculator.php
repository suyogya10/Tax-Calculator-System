<?php
    if(isset($_POST['calculate'])){
    $salary = $_POST['ysal'];
    $bonus = $_POST['ybonus'];
    $epf = $_POST['epf'];
    $cit = $_POST['cit'];
    $insu = $_POST['insu'];
    $total = $salary + $bonus;
    $status = $_POST['status'];
    if ($status== 'unmarried'){

        if($total <= 400000){
        $outcome = 0.01 * $total;
        }
        elseif($total <= 500000){
        $prevOut = 0.01 * 400000;
        $newTotal = $total - 400000;
        $outcome = 0.10 * $newTotal + $prevOut; //Condition Milyo
        }
        elseif($total <= 700000){
        $firstOut = 0.01 * 400000;
        $prevTotal = 0.10 * 100000;
        $newTotal = $total - 500000;
        $outcome = 0.20 * $newTotal + $firstOut + $prevTotal;
        }
        elseif($total <= 2000000){
        $firstOut = 0.01 * 400000;
        $secondOut = 0.10 * 100000;
        $thirdOut = 0.20 * 200000;
        $newTotal = $total - 700000;
        $outcome = 0.30 * $newTotal + $firstOut + $secondOut + $thirdOut;
        }
    }
        if ($status== 'married'){

            if($total <= 450000){
                $outcome = 0.01 * $total;
            }
            elseif($total <= 500000){
                $prevOut = 0.01 * 450000;
                $newTotal = $total - 450000;
                $outcome = 0.10 * $newTotal + $prevOut;
            }
            elseif($total <= 700000){
                $firstOut = 0.01 * 450000;
                $prevTotal = 0.10 * 100000;
                $newTotal = $total - 500000;
                $outcome = 0.20 * $newTotal + $firstOut + $prevTotal;
            }
            elseif($total <= 2000000){
                $firstOut = 0.01 * 450000;
                $secondOut = 0.10 * 100000;
                $thirdOut = 0.20 * 200000;
                $newTotal = $total - 700000;
                $outcome = 0.30 * $newTotal + $firstOut + $secondOut + $thirdOut;
            }
        }

        if ($status== 'nonresident'){

            if($total <= 450000){
                $outcome = 0.01 * $total;
            }
            elseif($total <= 500000){
                $prevOut = 0.01 * 450000;
                $newTotal = $total - 450000;
                $outcome = 0.10 * $newTotal + $prevOut;
            }
            elseif($total <= 700000){
                $firstOut = 0.01 * 450000;
                $prevTotal = 0.10 * 100000;
                $newTotal = $total - 500000;
                $outcome = 0.20 * $newTotal + $firstOut + $prevTotal;
            }
            elseif($total <= 2000000){
                $firstOut = 0.01 * 450000;
                $secondOut = 0.10 * 100000;
                $thirdOut = 0.20 * 200000;
                $newTotal = $total - 700000;
                $outcome = 0.30 * $newTotal + $firstOut + $secondOut + $thirdOut;
            }
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <div class="form">
        <form method="post" action="calculator.php">
            <label>Status:</label><br>
            <select name="status" id="status">
                <option value="married" name="married">Married</option>
                <option value="unmarried" name="unmarried">Un-Married</option>
                <option value="nonresident" name="nonresident">Non-Resident</option>
            </select><br><br>
            <label>Yearly Salary:</label><br>
            <input type="text" id="ysal" name="ysal"><br>
            <label>Yearly Bonus:</label><br>
            <input type="text" id="ybonus" name="ybonus"><br>
            <label>Employee Provident Fund:</label><br>
            <input type="text" id="epf" name="epf"><br>
            <label>Citizen Investment Trust:</label><br>
            <input type="text" id="cit" name="cit"><br>
            <label>Insurance:</label><br>
            <input type="text" id="insu" name="insu"><br><br>
            <input type="submit" value="Calculate" name="calculate">
        </form><br>
        <textarea name="ans">
            <?php
                if (!empty($outcome)):
                    echo $outcome;
            endif;

            ?>
        </textarea>
    </div>
</head>
<body>
</body>
</html>