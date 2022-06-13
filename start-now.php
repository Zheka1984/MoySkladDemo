<?php
require_once 'jsonparse.php';
require_once 'lib.php';
$jsonApi = jsonApi($appId, $accountId);
$cashout = $jsonApi->getAllEntities('cashout');
$paymentout = $jsonApi->getAllEntities('paymentout');
$json1 = separateDocument($cashout);
$json2 = separateDocument($paymentout);
function useRule($json, $rule){
    global $jsonApi;
    $newArray = null;
    foreach($json as $key => $value){
    $result = findByRule($value, $rule);
    if($result){
        $newjson = setNewExpenseItem($expenseitem, $value); 
        $newArray[] = $newjson;   
        var_dump($value); 
        echo '<br><br>';
        var_dump($newjson);
    }
    }
    //$jsonApi->refreshDocument($newArray);
    }
if(isset($_POST['comment'])){ //если поиск и изменение документа по одному рулу
$counterparty = $_POST['counterparty'];
$operand1 = $_POST['operand1'];
$project = $_POST['project'];
$operand2 = $_POST['operand2'];
$comment = $_POST['comment'];
$operand3 = $_POST['operand3'];
$purpose = $_POST['purpose'];
$expenseitem = $_POST['expenseitem'];

$rule = array();
$rule['counterpartyid'] = $counterparty;
$rule['operand1'] = $operand1;
$rule['projectid'] = $project;
$rule['operand2'] = $operand2;
$rule['comment'] = $comment;
$rule['operand3'] = $operand3;
$rule['purpose'] = $purpose;
$rule['expenseitemid'] = $expenseitem;

//var_dump($rule);
//AppInstance::load($appId, $accountId);
$json1 = separateDocument($cashout);
$json2 = separateDocument($paymentout);
useRule($json1, $rule);
useRule($json2, $rule);
}
$rules = selectAllFromDB(); //все рулы, по которым будет производиться поиск
foreach($rules as $rule){
useRule($json1, $rule);
useRule($json2, $rule);
}
//var_dump($rule['purpose']." :: $purpose");
echo count($json);



