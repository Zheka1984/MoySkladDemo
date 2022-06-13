<?php
require_once 'workWithDB.php';
echo gmdate("Y-m-d\TH:i:s\Z", strtotime("next day"));
$previousStart=null;
$nextStart=null;
$period = $_POST['period'];
$conn = connectToDb();
$sql = "CREATE TABLE IF NOT EXISTS periods (
id serial PRIMARY KEY,
periodname character varying(20),
previousstart bigint,
nextstart bigint
    )";
$conn->exec($sql);

if ($period=="day"){
    $nextStart = strtotime("now") + strtotime("next day");
}
if ($period=="week"){
    $nextStart = strtotime("now") + strtotime("next week");
}    

    function insertToPeriods($period){
        global $period;
        $conn = connectToDb();
        global $nextStart;
        $sql = "INSERT INTO periods(periodname, nextstart) VALUES ('$period', '$nextStart')";
        $conn->exec($sql);
    }
        
        insertToPeriods($period);