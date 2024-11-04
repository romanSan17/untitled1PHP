<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>PHP tunnitööd</h1>
</header>

<section>
    <?php
    include('nav.php')
    ?>
</section>

<section>
    <?php
    if(isset($_GET["leht"])) {
        include('content/'.$_GET["leht"]);
    } else {
        echo "tere";
    }
    ?>
</section>

<section>
    <?php
    if(isset($_GET["leht2"])) {
        include('content/'.$_GET["leht2"]);
    } else {
        echo "tere";
    }
    ?>
</section>

<?php
    echo "Roman Sandakov &copy";
    echo date('Y');
?>


</body>
</html>