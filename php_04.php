<!DOCTYPE html>
<html>

<body>
    <form method="post" action="">
        เริ่มต้น: <input type="number" name="start" required>
        สิ้นสุด: <input type="number" name="end" required>
        <button type="submit">แสดง</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $start = $_POST['start'];
        $end = $_POST['end'];
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                echo "$i เป็นเลขคู่<br>";
            } else {
                echo "$i เป็นเลขคี่<br>";
            }
        }
    }
    ?>
</body>

</html>