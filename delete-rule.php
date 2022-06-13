<?php
require_once 'workWithDB.php';
$rule_number = $_POST['rule_number'];
deleteRow($rule_number);
echo "<br><a href=\"iframe.php\"><img src=\"arrows.png\"  title='обновить страницу'/></a>";