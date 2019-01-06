<?php
/**
 * Created by (apexteam.net).
 * Powered by (ApexTeam) and (Mr.Mench)
 */

include "config.php";

$response['ok'] = false;
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if (!empty($fragments[$id])) {
        $response['ok'] = true;
        $params = '';
        foreach ($fragments[$id]['params'] as $key => $value) {
            $params .= "&$key=" . urlencode($value);
        }
        $response['html'] = file_get_contents($fragments[$id]["url"] . "?" . $params);
        $response['title'] = $fragments[$id]["title"];
    } else {
        $response['ok'] = true;
        $response['html'] = 'Fragment not founded.';
        $response['title'] = app_name;
    }
} else {
    die("Forbidden/700");
}

header("Content-type:application/json");
echo json_encode($response);