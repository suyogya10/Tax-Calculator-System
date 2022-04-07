<?php
    if(isset($_POST['calculate'])){
    $salary = $_POST['ysal']; //Takes value from Yearly Salary
    $bonus = $_POST['ybonus']; //Takes value from Yearly Bonus
    $epf = $_POST['epf']; //Takes value from Employee Providend Fund
    $cit = $_POST['cit']; //Takes value from Citizen Investment Trust
    $pfcit = $epf + $cit; //Sum of EPF and CIT
    $insu = $_POST['insu']; //Takes value from Insurance
    $total = $salary + $bonus; //Sum of Ysal and Ybonus
    $status = $_POST['status']; //Check status married, unmarried or nonresident
    if ($pfcit < 300000){ //check if EPF adn CIT are lesser than required
        if ($pfcit < (0.33*$total)){ //check if EPF adn CIT are lesser than salary total
            $total = $total - $pfcit;
            if ($insu <= 25000){ //check if insurance is lesser than 25k which is max
                $total = $total-$insu;
                if ($status== 'married'){

                    if($total <= 450000){
                        $outcome = 0.01 * $total;
                    }
                    elseif($total <= 500000){ //next 1 lakh
                        $prevOut = 0.01 * 450000;
                        $newTotal = $total - 450000;
                        $outcome = 0.10 * $newTotal + $prevOut;
                    }
                    elseif($total <= 700000){ //next 2 lakh
                        $firstOut = 0.01 * 450000;
                        $prevTotal = 0.10 * 100000;
                        $newTotal = $total - 500000;
                        $outcome = 0.20 * $newTotal + $firstOut + $prevTotal;
                    }
                    elseif($total <= 2000000){ //next 13 lakh
                        $firstOut = 0.01 * 450000;
                        $secondOut = 0.10 * 100000;
                        $thirdOut = 0.20 * 200000;
                        $newTotal = $total - 700000;
                        $outcome = 0.30 * $newTotal + $firstOut + $secondOut + $thirdOut;
                    }
                }
                if ($status== 'unmarried'){

                    if($total <= 400000){
                        $outcome = 0.01 * $total;
                    }
                    elseif($total <= 500000){
                        $prevOut = 0.01 * 400000;
                        $newTotal = $total - 400000;
                        $outcome = 0.10 * $newTotal + $prevOut;
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
            }
            else{
                $outcome ="Maximum Insurance is 25k"; //error msg
            }
        }
        elseif ($pfcit > (0.33*$total)){
            $outcome = "CIT and EPF exceeded the limit"; //error msg
        }
    }
    else{
        $outcome = "CIT and EPF exceeded the limit"; //error msg
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
            <input type="text" id="ybonus" name="ybonus" value="0"><br>
            <label>Employee Provident Fund:</label><br>
            <input type="text" id="epf" name="epf" value="0"><br>
            <label>Citizen Investment Trust:</label><br>
            <input type="text" id="cit" name="cit" value="0"><br>
            <label>Insurance:</label><br>
            <input type="text" id="insu" name="insu" value="0"><br><br>
            <input type="submit" value="Calculate" name="calculate" value="0">
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