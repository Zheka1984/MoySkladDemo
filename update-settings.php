<?php

require_once 'workWithDB.php';
require_once 'iframe.php';

$counterparty = $_POST['counterparty'];
$operand1 = $_POST['operand1'];
$project = $_POST['project'];
$operand2 = $_POST['operand2'];
$comment = $_POST['comment'];
$operand3 = $_POST['operand3'];
$purpose = $_POST['purpose'];
$expenseitem = $_POST['expenseitem'];

foreach($counterpartiesValues as $v){
    if($v['id']==$counterparty){
        $counterpartyname = $v['name'];
        $counterpartyid = $v['id'];
    }
}
foreach($projectsValues as $v){
if($v['id']==$project){
    $projectname = $v['name'];
    $projectid = $v['id'];
}
}
foreach($expenseitemsValues as $v){
    if($v['id']==$expenseitem){
        $expenseitemname = $v['name'];
        $expenseitemid = $v['id'];
    }
    }

echo "<br><a href=\"iframe.php\"><img src=\"arrows.png\"  title='обновить страницу'/></a>";


connectToDB();
insertRow();



