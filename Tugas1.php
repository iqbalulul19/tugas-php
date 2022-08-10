<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loop for</title>
</head>
<body>
    <?php
    for ($i = 100; $i >= 0; $i--) {
        if($i %2 == 1) {
            echo $i."<br>";
        }
    }
    ?>
</body>
</html>