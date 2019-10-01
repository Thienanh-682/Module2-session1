<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form>
        Inventment Amount: <input type="text" name="amount" ><br>
        Yearly Interest Rate: <input type="text" name="rate" ><br>
        Number of Years: <input type="text" name="year"><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
     if ($_SERVER["REQUEST_METHOD"]=="POST") {
         $amount=$_POST['amount'];
         $rate=$_POST['rate'];
         $year=$_POST['year'];
     }
    ?>
</body>
</html>
