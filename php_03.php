<!DOCTYPE html>
<html>

<body>
    <form method="post" action="">
        แม่สูตรคูณ: <input type="number" name="multiplication" required>
        <button type="submit">แสดง</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $multiplication = $_POST['multiplication'];
        echo "ตารางสูตรคูณแม่ $multiplication:<br>";
        for ($i = 1; $i <= 12; $i++) {
            echo "$multiplication x $i = " . ($multiplication * $i) . "<br>";
        }
    }
    ?>
</body>

</html>