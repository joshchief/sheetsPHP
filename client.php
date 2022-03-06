<?php

$client = new \Google_Client();
$client->setApplicationName('sheetsPHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "13KnHDBx4HwuSADCimQteMWt5udQaNvLfByCvKS2MFTI";