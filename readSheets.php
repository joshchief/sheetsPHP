<?php


require __DIR__ . '/vendor/autoload.php';

require __DIR__ .'/client.php';

$range = 'sheetsPHP!A1:B1';

$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
if(empty($values)){
    print "No data found.\n";
} else {
    $mask = "%10s %-10s";
    foreach($values as $row){
        echo printf($mask, $row[0], $row[1]);
    }

}