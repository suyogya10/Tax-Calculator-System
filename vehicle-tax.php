<?php
        if(isset($_POST['Calculate'])){
            $vehicle = $_POST['vehicle'];
            $pradesh = $_POST['Pradesh'];
            $cc = $_POST['cc'];

            if($pradesh == "3"){
                if($cc <= 125){
                    $price = "Rs 2800";
                }
                elseif ($cc <=160 ){
                    $price = "Rs 6000";
                }
                elseif ($cc <=225 ){
                    $price = "Rs 8000";
                }
                elseif ($cc <=400 ){
                    $price = "Rs 11000";
                }
                elseif ($cc <=650 ){
                    $price = "Rs 20000";
                }
                elseif ($cc >=650 ){
                    $price = "Rs 30000";
                }
            }
            else{
                if($cc <= 125){
                    $price = "Rs 2800";
                }
                elseif ($cc <=160 ){
                    $price = "Rs 4500";
                }
                elseif ($cc <=250 ){
                    $price = "Rs 5500";
                }
                elseif ($cc <=400 ){
                    $price = "Rs 9000";
                }
                elseif ($cc <=650 ){
                    $price = "Rs 20000";
                }
                elseif ($cc >=650 ){
                    $price = "Rs 30000";
                }
            }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Tax</title>
</head>
<body>
<form method="post" action="vehicle-tax.php">
    <div> 
        <div>
        <a>Select your Vehicle</a>    
        <select name= "vehicle" placeholder="vehicle">
            <option value= "1"> Bike </option>
        </select>
        </div>

        <div>
            <a>Select your Pradesh:</a>    
            <select name= "Pradesh" placeholder="Pradesh">
                <option value= "1"> Province 1 </option>
                <option value= "2"> Madhesh </option>
                <option value= "3"> Bagmati </option>
                <option value= "4"> Gandaki </option>
                <option value= "5"> Lumbini </option>
                <option value= "6"> Karnali </option>
                <option value= "7"> Sudur Paschim </option>
            </select>
        </div>

        <div>
            <a>Select Fiscal Year:</a>
            <select name= "fy" placeholder="fy">
                <option value= "1"> 2078/79 </option>
            </select>
        </div>

        <div>
            <span>Enter your Vehicle CC: </span>
            <input name = "cc" type = "number" placeholder = "150" >
        </div>

        <div>    
            <button name="Calculate"> Calculate</button>
        </div>
        <div>
            <span>Tax amount</span><input name = "amount" type = "text" placeholder = "" value="<?php
            if(!empty($price)):
                echo $price;
                endif;
             ?>" required>
        </div> 
    </div>
</form>
</body>
</html>