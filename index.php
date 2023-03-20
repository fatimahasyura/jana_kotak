<!DOCTYPE html>
<html>

<body>
    <center>
        <h3>JANA KOTAK</h3>
        <form method="POST">
            Tinggi:
            <input type="text" name="tinggi" id="tinggi" size="5">
            <br><br>
            Lebar:
            <input type="text" name="lebar" id="lebar" size="5">
            <br><br>
            <input type="submit" name="submit" id="submit" value="Jana">
            <br><br>
        </form>
    </center>
</body>

</html>

<?php
if ($_POST['submit']) {
    $tinggi = $_POST["tinggi"];
    $lebar = $_POST["lebar"];
    echo "<table border='1' align='center' width='50%' height='50%' cellpadding='2' cellspacing='0' style='text-align: center;'>";

    for ($row = 0; $row <= $tinggi; $row++) {
        echo "<tr> \n";
        for ($col = 0; $col <= $lebar; $col++) {
            $submit = $tinggi + $lebar;
            echo "<td>".(($row >= $submit ? $submit - $row : $row) + ($col >= $submit ? $submit = $col : $col))."</td> \n";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>