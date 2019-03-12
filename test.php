<?php

use macropage\SDKs\ebay\rest\browse\API\ItemSummaryApi;
use macropage\SDKs\ebay\rest\browse\ApiException as ApiExceptionAlias;
use macropage\SDKs\ebay\rest\browse\Configuration;

require 'vendor/autoload.php';

$Configuration = new Configuration();
$Configuration->setAccessToken('v^1.xxxxxxxxxxxxxxx');
$Configuration->setDebug(true);
$Configuration->setDebugFile('/app/debug.txt');
$ItemSummaryApi = new ItemSummaryApi(
	new GuzzleHttp\Client(['headers' => ['X-EBAY-C-MARKETPLACE-ID' => 'EBAY-DE']]),
	$Configuration
);
try {
	$res = $ItemSummaryApi->search(null,33653,null,null,null,'sellers:{ahk-autoteile}',null,1,0);
} catch (ApiExceptionAlias $e) {
	throw new \RuntimeException($e->getMessage());
}
/** @noinspection ForgottenDebugOutputInspection */
print_r($res);
echo 'Total: '.$res->getTotal()."\n";
foreach ($res->getItemSummaries() as $Item) {
	echo $Item->getItemId().' -> '.$Item->getTitle()."\n";
}
