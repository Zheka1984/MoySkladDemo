<?php

function connectToDb(){
$host='localhost';
$db = 'expenseitems';
$username = 'postgres';
$password = '1';
 
 
# Создаем соединение с базой PostgreSQL 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
global $conn;
try{
$conn = new PDO($dsn);

if($conn){
//echo "Connected to the <strong>$db</strong> database successfully!";
}
}
catch (PDOException $e){
    echo $e->getMessage();
    }
    return $conn;
}
# Выполняем запрос на создание таблицы testtable
function createTable(){
    $conn = connectToDb();
$sql = "CREATE TABLE IF NOT EXISTS rules (
id serial PRIMARY KEY,
counterpartyname character varying(80),
counterpartyid character varying(80),
operand1 character varying(20),
projectname character varying(80),
projectid character varying(80),
operand2 character varying(20),
comment character varying(500),
operand3 character varying(20),
purpose character varying(200),
expenseitemname character varying(80),
expenseitemid character varying(80)
)";
$conn->exec($sql);
}

function insertRow(){
    $conn = connectToDb();
    global $counterpartyname;
    global $counterpartyid;
    global $operand1;
    global $projectname;
    global $projectid;
    global $operand2;
    global $comment;
    global $operand3;
    global $purpose;
    global $expenseitemname;
    global $expenseitemid;
        if($counterpartyname==null){
        $counterpartyname = 'n\a';
        }
        if($counterpartyid==null){
            $counterpartyid = 'n\a';
            }
        if($projectname==null){
        $projectname = 'n\a';
        }
        if($projectid==null){
            $projectid = 'n\a';
            }
        if($comment==null){
        $comment = 'n\a';
        }
        if($purpose==null){
        $purpose = 'n\a';
        }
        if($expenseitemname==null){
        $expenseitemname = 'na';
        }
        if($expenseitemid==null){
            $expenseitemid = 'na';
            }
       
        $sql = "INSERT INTO rules(counterpartyname, counterpartyid, operand1, projectname, projectid, operand2, comment, 
        operand3, purpose, expenseitemname, expenseitemid) VALUES ('$counterpartyname', '$counterpartyid', '$operand1',
        '$projectname', '$projectid', '$operand2', '$comment', '$operand3', '$purpose', '$expenseitemname', '$expenseitemid')";
        echo $sql;
        $conn->exec($sql);
}
function selectAllFromDB(){
    $conn = connectToDb();
    $sql = 'Select * FROM rules';
    $r = $conn->query($sql);
    $rules = $r->fetchAll(PDO::FETCH_ASSOC);
  
    return $rules;
}
function deleteRow($id){
    $conn = connectToDb();
    $sql = "Delete from rules where id=$id";
    $conn->exec($sql);
}
function perfomSchedule(){
   global $nextStart; 
   global $previousStart;
   $conn = connectToDb();
   $sql = "SELECT nextstart FROM PERIODS ORDER BY id DESC LIMIT 1";
   $res = $conn->query($sql);
   $result = $res->fetchAll(PDO::FETCH_ASSOC);
   $nextStart = $result[0]['nextstart']; 
   if (strtotime("now") >= $nextStart){
       include "start-now.php";
       $previousStart=strtotime("now");
   }

}