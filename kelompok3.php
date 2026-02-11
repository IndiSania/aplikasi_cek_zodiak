<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tahu Zodiakmu</title>
</head>
<body>
    <h2>Zodiak Finder</h2>
    <form method="post">
        <label>Tanggal Lahir:</label><br>
        <input type="number" name="tanggal" min="1" max="31" required><br><br>
        <label>Bulan Lahir:</label><br>
        <input type="number" name="bulan" min="1" max="12" required><br><br>
        <button type="submit">Cek Zodiak</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tgl = (int)$_POST['tanggal'];
        $bln = (int)$_POST['bulan'];
        $zodiak = "";

        if (($bln == 1 && $tgl >= 20) || ($bln == 2 && $tgl <= 18)) {
            $zodiak = "Aquarius";
        } elseif (($bln == 2 && $tgl >= 19) || ($bln == 3 && $tgl <= 20)) {
            $zodiak = "Pisces";
        }elseif (($bln == 3 && $tgl >= 21) || ($bln == 4 && $tgl <= 19)) {
            $zodiak = "Aries";
        }elseif (($bln == 4 && $tgl >= 20) || ($bln == 5 && $tgl <= 20)) {
            $zodiak = "Taurus";
        }elseif (($bln == 5 && $tgl >= 21) || ($bln == 6 && $tgl <= 20)) {
            $zodiak = "Gemini";
        }elseif (($bln == 6 && $tgl >= 21) || ($bln == 7 && $tgl <= 22)) {
            $zodiak = "Cancer";
        }elseif (($bln == 7 && $tgl >= 23) || ($bln == 8 && $tgl <= 22)) {
            $zodiak = "Leo";
        }elseif (($bln == 8 && $tgl >= 23) || ($bln == 9 && $tgl <= 22)) {
            $zodiak = "Virgo";
        }elseif (($bln == 9 && $tgl >= 23) || ($bln == 10 && $tgl <= 22)) {
            $zodiak = "Libra";
        }elseif (($bln == 10 && $tgl >= 23) || ($bln == 11 && $tgl <= 21)) {
            $zodiak = "Scorpio";
        }elseif (($bln == 11 && $tgl >= 22) || ($bln == 12 && $tgl <= 21)) {
            $zodiak = "Sagitarius";
        }elseif (($bln == 12 && $tgl >= 22) || ($bln == 1 && $tgl <= 19)) {
            $zodiak = "Capri  corn";
        } else {
            $zodiak = "Tanggal tidak valid.";
        }

        echo "<p>Zodiak kamu adalah: <strong>$zodiak</strong></p>";
    }
    ?>

</body>
</html>