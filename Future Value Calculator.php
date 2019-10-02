<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" >
    <table>
        <tr>
            <td>Investment Amount: </td>
            <td><input type="text" name="InventmentAmount"></td>
        </tr>
        <tr>
            <td>Yearly Interest Rate: </td>
            <td><input type="text" name="YearlyInterestRate"></td>
        </tr>
        <tr>
            <td>Number of Years: </td>
            <td><input type="text" name="NumberOfYears"></td>
        </tr>
    </table>
    <input type="submit" value="calculate">
</form>
    <?php
     if ($_SERVER["REQUEST_METHOD"]=="POST") {
         $InventmentAmount=$_POST['InventmentAmount'];
         $YearlyInterestRate=$_POST['YearlyInterestRate'];
         $NumberOfYears=$_POST['NumberOfYears'];
         $futerValue = $InventmentAmount+ ($InventmentAmount * $YearlyInterestRate /100)*$NumberOfYears;
         echo "Investment Amount: $InventmentAmount";
         echo "<br>";
         echo "Yearly Interest Rate: $YearlyInterestRate%";
         echo "<br>";
         echo "Number of Years: $NumberOfYears";
         echo "<br>";
         echo "Future Value: $futerValue";
     }
    ?>
</body>
</html>
