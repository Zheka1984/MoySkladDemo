<?php
require_once 'lib.php';
$arr = '{
  "context": {
    "employee": {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/context/employee",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
        "type": "employee",
        "mediaType": "application/json"
      }
    }
  },
  "meta": {
    "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout",
    "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata",
    "type": "cashout",
    "mediaType": "application/json",
    "size": 3,
    "limit": 1000,
    "offset": 0
  },
  "rows": [
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/235c14cf-41b1-11e6-8a84-bae500000073",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata",
        "type": "cashout",
        "mediaType": "application/json"
      },
      "id": "235c14cf-41b1-11e6-8a84-bae500000073",
      "accountId": "f976ed28-2e58-11e6-8a84-bae500000001",
      "owner": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/employee/faba7f37-2e58-11e6-8a84-bae500000028",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
          "type": "employee",
          "mediaType": "application/json"
        }
      },
      "shared": true,
      "group": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/group/f97aa1fb-2e58-11e6-8a84-bae500000002",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/group/metadata",
          "type": "group",
          "mediaType": "application/json"
        }
      },
      "updated": "2016-07-04 09:32:53",
      "name": "00002",
      "description": "Описание ордера",
      "externalCode": "wWfQT10VjQztCieUrE72r2",
      "moment": "2016-07-04 09:31:00",
      "applicable": true,
      "created": "2016-08-25 19:55:00",
      "printed": true,
      "published": true,
      "rate": {
        "currency": {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/currency/faf45b9a-2e58-11e6-8a84-bae500000055",
            "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/currency/metadata",
            "type": "currency",
            "mediaType": "application/json"
          }
        }
      },
      "sum": 35000,
      "organization": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/organization/fae3561a-2e58-11e6-8a84-bae50000004e",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/organization/metadata",
          "type": "organization",
          "mediaType": "application/json"
        }
      },
      "contract": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/contract/2b34d43f-3f52-11e6-8a84-bae500000066",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/contract/metadata",
          "type": "contract",
          "mediaType": "application/json"
        }
      },
      "agent": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8e347-692c-11e6-8a84-bae500000055",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
          "type": "counterparty",
          "mediaType": "application/json"
        }
      },
      "state": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata/states/0eda7963-41b1-11e6-8a84-bae50000006e",
          "type": "state",
          "mediaType": "application/json"
        }
      },
      "attributes": [
        {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata/attributes/c8857703-3f8e-11e6-8a84-bae5000000ff",
            "type": "attributemetadata",
            "mediaType": "application/json"
          },
          "id": "c8857703-3f8e-11e6-8a84-bae5000000ff",
          "name": "AttributeName1",
          "type": "boolean",
          "value": false
        }
      ],
      "paymentPurpose": "Оплата еще одной приемки",
      "expenseItem": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/1be2350e-0479-11e5-b03a-448a5b426e7e",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
          "type": "expenseitem",
          "mediaType": "application/json"
        }
      }
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/489afb43-41b1-11e6-8a84-bae50000007a",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata",
        "type": "cashout",
        "mediaType": "application/json"
      },
      "id": "489afb43-41b1-11e6-8a84-bae50000007a",
      "accountId": "f976ed28-2e58-11e6-8a84-bae500000001",
      "owner": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/employee/faba7f37-2e58-11e6-8a84-bae500000028",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
          "type": "employee",
          "mediaType": "application/json"
        }
      },
      "shared": false,
      "group": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/group/f97aa1fb-2e58-11e6-8a84-bae500000002",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/group/metadata",
          "type": "group",
          "mediaType": "application/json"
        }
      },
      "updated": "2016-07-04 09:33:56",
      "name": "00003",
      "description": "Лмао",
      "externalCode": "Q9wiyzIQiOhYhqpVkq6IE2",
      "moment": "2016-07-04 09:32:00",
      "applicable": true,
      "created": "2016-08-25 19:55:00",
      "printed": true,
      "published": true,
      "rate": {
        "currency": {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/currency/faf45b9a-2e58-11e6-8a84-bae500000055",
            "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/currency/metadata",
            "type": "currency",
            "mediaType": "application/json"
          }
        }
      },
      "sum": 3535000,
      "organization": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/organization/fae3561a-2e58-11e6-8a84-bae50000004e",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/organization/metadata",
          "type": "organization",
          "mediaType": "application/json"
        }
      },
      "contract": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/contract/37def9c0-41b1-11e6-8a84-bae500000077",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/contract/metadata",
          "type": "contract",
          "mediaType": "application/json"
        }
      },
      "project": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/project/722e39f0-313e-11e6-8a84-bae500000008",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/project/metadata",
          "type": "project",
          "mediaType": "application/json"
        }
      },
      "agent": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/counterparty/1509a2f7-32ca-11e6-8a84-bae500000068",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
          "type": "counterparty",
          "mediaType": "application/json"
        }
      },
      "state": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata/states/0eda7963-41b1-11e6-8a84-bae50000006e",
          "type": "state",
          "mediaType": "application/json"
        }
      },
      "attributes": [
        {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata/attributes/c8857703-3f8e-11e6-8a84-bae5000000ff",
            "type": "attributemetadata",
            "mediaType": "application/json"
          },
          "id": "c8857703-3f8e-11e6-8a84-bae5000000ff",
          "name": "AttributeName2",
          "type": "boolean",
          "value": false
        }
      ],
      "paymentPurpose": "Оплата еще одной приемки",
      "expenseItem": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/1be2350e-0479-11e5-b03a-448a5b426e7e",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
          "type": "expenseitem",
          "mediaType": "application/json"
        }
      },
      "operations": [
        {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/supply/90ba347d-6b8b-11e6-8a84-bae5000000bd",
            "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/supply/metadata",
            "type": "supply",
            "mediaType": "application/json"
          },
          "linkedSum": 80000
        }
      ]
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/fd9b07ea-41b0-11e6-8a84-bae500000069",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata",
        "type": "cashout",
        "mediaType": "application/json"
      },
      "id": "fd9b07ea-41b0-11e6-8a84-bae500000069",
      "accountId": "f976ed28-2e58-11e6-8a84-bae500000001",
      "owner": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/employee/faba7f37-2e58-11e6-8a84-bae500000028",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
          "type": "employee",
          "mediaType": "application/json"
        }
      },
      "shared": false,
      "group": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/group/f97aa1fb-2e58-11e6-8a84-bae500000002",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/group/metadata",
          "type": "group",
          "mediaType": "application/json"
        }
      },
      "updated": "2016-07-04 09:34:14",
      "name": "00001",
      "description": "Ордер созданный через UI.",
      "externalCode": "Biim5OxdjUnFcC2saaU551",
      "moment": "2016-07-04 09:30:00",
      "applicable": true,
      "created": "2016-08-25 19:55:00",
      "printed": true,
      "published": true,
      "rate": {
        "currency": {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/currency/cdbc62de-3f68-11e6-8a84-bae500000050",
            "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/currency/metadata",
            "type": "currency",
            "mediaType": "application/json"
          }
        },
        "value": 63
      },
      "sum": 3174603,
      "organization": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/organization/fae3561a-2e58-11e6-8a84-bae50000004e",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/organization/metadata",
          "type": "organization",
          "mediaType": "application/json"
        }
      },
      "contract": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/contract/e16fc992-41b0-11e6-8a84-bae500000066",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/contract/metadata",
          "type": "contract",
          "mediaType": "application/json"
        }
      },
      "project": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/project/722e39f0-313e-11e6-8a84-bae500000008",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/project/metadata",
          "type": "project",
          "mediaType": "application/json"
        }
      },
      "agent": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/counterparty/147c1f1b-32ca-11e6-8a84-bae500000004",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
          "type": "counterparty",
          "mediaType": "application/json"
        }
      },
      "state": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata/states/0eda8542-41b1-11e6-8a84-bae500000070",
          "type": "state",
          "mediaType": "application/json"
        }
      },
      "attributes": [
        {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/cashout/metadata/attributes/c8857703-3f8e-11e6-8a84-bae5000000ff",
            "type": "attributemetadata",
            "mediaType": "application/json"
          },
          "id": "c8857703-3f8e-11e6-8a84-bae5000000ff",
          "name": "AttributeName3",
          "type": "boolean",
          "value": false
        }
      ],
      "paymentPurpose": "Оплата приемки",
      "expenseItem": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/82031d62-2e58-11e6-ab5c-d8cb8a84bae5",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
          "type": "expenseitem",
          "mediaType": "application/json"
        }
      }
    }
  ]
}';

//$array = array();
//разделение расходных ордеров и исходящих платежей на отдельные ордера или платежи
function separateDocument($arr){
$doc =json_decode($arr, true);
  global $array;
  foreach ($doc as $key => $value){
    if(gettype($value)=="string"||gettype($value)=="boolean"||gettype($value)=="integer"){
      continue;
    }
  else{
    if(gettype($key)=="integer"){
      //var_dump($value);
      $array[] = $value;}
      else separateDocument($value);}
}
//echo "элементов ".count($array);
return $array;
}
//$json - отдельный исходящий платеж или расходный ордер из массива $array
function findByCounterparty($json, $rule){
     $id = $rule['counterpartyid'];
     foreach($json as $key => $value){
       if($key=="agent"){
        foreach($value as $k => $val){
          if($k=="meta"){
            foreach($val as $kk => $v){
              if($kk=="href"){
               if(str_contains($v, "counterparty/$id")){
                 return true;
               }
              }
            }
          }
        }
       }
     }
     return false;
}
function findByProject($json, $rule){
  $id = $rule['projectid'];
  foreach($json as $key => $value){
    if($key=="project"){
     foreach($value as $k => $val){
       if($k=="meta"){
         foreach($val as $kk => $v){
           if($kk=="href"){
            if(str_contains($v, "/project/$id")){
              return true;
            }
           }
         }
       }
     }
    }
  }
  return false;
}
function findByComment($json, $rule){
  $comment = $rule['comment'];
  foreach($json as $key => $value){
    if($key=="description"&&$value==$comment){
      return true;
    }
  }
  return false;
}
function findByPurpose($json, $rule){
  $purpose = $rule['purpose'];
  foreach($json as $key => $value){
    //echo "$key : $value<br>";
    if($key=="paymentPurpose"&&$value==$purpose){
      //echo "$key : $value<br>";
      return true;
    }
  }
  return false;
}
function findByExpenseItem($json, $rule){
  $id = $rule['expenseItemid'];
  foreach($json as $key => $value){
    if($key=="expenseItem"){
     foreach($value as $k => $val){
       if($k=="meta"){
         foreach($val as $kk => $v){
           if($kk=="href"){
            if(str_contains($v, "/expenseItem/$id")){
              return true;
            }
           }
         }
       }
     }
    }
  }
  return false;
}
function findByRule($json, $rule){
  $result = false; //результат поиска по всему рулу в отдельном json-представлении расходника или исходящего платежа
  $operand1 = $rule['operand1'];
  if($operand1=="И") $result=findByCounterparty($json, $rule) && findByProject($json, $rule); 
  //echo 'результат '.findByProject($json, $rule);
  if($operand1=="ИЛИ") $result=findByCounterparty($json, $rule) || findByProject($json, $rule);
  echo 'результат '.$result;
  if($operand1=="И НЕ") $result=findByCounterparty($json, $rule) && !findByProject($json, $rule); 
  echo 'результат '.$result;
  //echo findByProject($json, $rule);
  $operand2 = $rule['operand2'];
  if($operand2=="И СОДЕРЖИТ") $result = $result && findByComment($json, $rule);
  if($operand2=="И НЕ СОДЕРЖИТ") $result = $result && !findByComment($json, $rule);
  echo 'результат '.$result;
  $operand3 = $rule['operand3'];
  if($operand3=="И СОДЕРЖИТ") $result = $result && findByPurpose($json, $rule);
  if($operand3=="И НЕ СОДЕРЖИТ") $result = $result && !findByPurpose($json, $rule);
  echo 'результат '.$result;
  return $result;
}
//separateDocument($ar);
//$newid - id новой статьи расходов, $json - представление отдельного расходного ордера или исходящего платежа
function setNewExpenseItem($newId, $json){
  $newjson = $json;
foreach($newjson as $key=>&$value){
  if($key=='expenseItem'){
    foreach($value as $kk=>&$vv){
    if($kk=='meta'){
      foreach($vv as $k=>&$v){
        if($k=='href'){
          $old = $v;
          $href = "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/".$newId;
          $vv['href'] = $href;
          echo $old.'<br>';
          echo $newjson['expenseItem']['meta']['href'];
        }
      }
    }
   }
  }
}
return $newjson;
}
//var_dump(count($ar));