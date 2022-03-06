<?php

// Api_key = AIzaSyCt2Mvj57GcN9OWAXd6W9wU4p47JQG5ybE;
// Client_id = 138839046259-fto63oqe9u2e6joo67h1u5pphnmbi3eb.apps.googleusercontent.com;
// Client_secret = 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;

// defined('ABSPATH') || exit;
// ini_set('memory_limit', '-1');
// ini_set('max_execution_time', '-1');
// ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

require __DIR__ .'/client.php';

$range = 'sheetsPHP';

$params = [
    'valueInputOptions' => 'RAW'
];
$insert = [
    'insertDataOptions' => 'INSERT_ROWS'
];
$values = [
    ['testing', 'joshua ghaffar'],
];
// echo "<pre>";print_r($values);echo "</pre>";exit;
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW'
];
$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params
);
if($result->updates->updatedRows == 1){
    echo "Success";
} else {
    echo "Fail";
}