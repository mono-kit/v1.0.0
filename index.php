<?php
/**
 * Created by (apexteam.net).
 * Powered by (ApexTeam) and (Mr.Morteza Bagheri)
 */
include "app/config.php";

error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><?= app_name ?></title>
    <?php
    foreach ($meta_names as $key => $value) {
        echo "<meta name='$key' content='$value'>\r\n";
    }
    foreach ($meta_properties as $key => $value) {
        echo "<meta property='$key' content='$value'>\r\n";
    }
    foreach ($styles as $url) {
        echo "<link rel='stylesheet' href='$url'>\r\n";
    }
    ?>
    <meta id="viewport" name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
</head>
<body>

<div id="iframe">

</div>

</body>
<script src="assets/js/monokit/MonoKit.js"></script>
<?php
foreach ($scripts as $url) {
    echo "<script src='$url'></script>\r\n";
}
?>
</html>
