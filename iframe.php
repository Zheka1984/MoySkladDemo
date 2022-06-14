<?php

require_once 'lib.php';
require_once 'workWithDB.php';

$previousStart=null;
$nextStart=null;
perfomSchedule();
$periodValues = array(['active'=>true, 'name'=>'week'], ['active'=>true, 'name'=>'day']);
$contextName = 'IFRAME';
//require_once 'user-context-loader.inc.php';

$app = AppInstance::loadApp($accountId);
$infoMessage = $app->infoMessage;
$store = $app->store;

$isSettingsRequired = $app->status != AppInstance::ACTIVATED;

if ($isAdmin) {
    $stores = jsonApi()->stores();
    $storesValues = [];
    foreach ($stores->rows as $v) {
        $storesValues[] = $v->name;
    }
}
$jsonApi = new JsonApi("0cbfc512618efa7d5fa306250bca064c1169b37c");

$counterpartyitems = $jsonApi->getAllEntities("counterpartyitems");
$projectItems = $jsonApi()->getAllEntities("projectItems");
$expenseitems = $jsonApi()->getAllEntities("expenseitems");
$expenseitems1 = json_decode($expenseitems, true);
$projectItems1 = json_decode($projectItems, true);
$counterpartyitems1 = json_decode($counterpartyitems, true);
function jsonToArray($decodeArray){
$array = array();
$finishedArray = array();
$exArray = $decodeArray['rows'];
foreach($exArray as $key=>$value){
  foreach($value as $k=>$v){
  if($k=="id"||$k=="name"){
    $array[$k] = $v;
}
}
$finishedArray[] = $array;
$array = array();
}
return $finishedArray;
}
$counterpartiesValues = jsonToArray($counterpartyitems1);
$projectsValues = jsonToArray($projectItems1);
$expenseitemsValues = jsonToArray($expenseitems1);
$rules = selectAllFromDB();
//print_r($expenseitemsValues);
$operand1Values = ['И', 'ИЛИ', 'И НЕ'];
$operand2Values = ['И СОДЕРЖИТ', 'И НЕ СОДЕРЖИТ'];
$operand3Values = ['И СОДЕРЖИТ', 'И НЕ СОДЕРЖИТ'];

require 'iframe.html';