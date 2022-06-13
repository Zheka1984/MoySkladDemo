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
$counterpartyitems = '{  
  "context":{  
    "employee":{  
      "meta":{  
        "href":"https://online.moysklad.ru/api/remap/1.2/context/employee",
        "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
        "type":"employee",
        "mediaType":"application/json"
      }
    }
  },
  "meta":{  
    "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty",
    "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
    "type":"counterparty",
    "mediaType":"application/json",
    "size":4,
    "limit":1000,
    "offset":0
  },
  "rows":[  
    {  
      "meta":{  
        "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8b923-692c-11e6-8a84-bae500000053",
        "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
        "type":"counterparty",
        "mediaType":"application/json"
      },
      "id":"12a8b923-692c-11e6-8a84-bae500000053",
      "accountId":"1185513e-692c-11e6-8a84-bae500000001",
      "owner":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/employee/12747f9e-692c-11e6-8a84-bae50000002a",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
          "type":"employee",
          "mediaType":"application/json"
        }
      },
      "shared":false,
      "group":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/group/11883c67-692c-11e6-8a84-bae500000002",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/group/metadata",
          "type":"group",
          "mediaType":"application/json"
        }
      },
      "updated":"2016-08-23 15:21:09",
      "name":"ООО \"Поставщик\"",
      "externalCode":"aZBfWOKzj-lcq7c7IWZON3",
      "archived":false,
      "created":"2007-02-07 17:16:41",
      "companyType":"legal",
      "legalTitle":"Общество с ограниченной ответственностью \"Поставщик\"",
      "legalAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 123, addInfo",
      "legalAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"123",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "actualAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 111, addInfo",
      "actualAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"111",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "inn":"7736570901",
      "kpp":"773601001",
      "accounts":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8b923-692c-11e6-8a84-bae500000053/accounts",
          "type":"account",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "tags":[  

      ],
      "contactpersons":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8b923-692c-11e6-8a84-bae500000053/contactpersons",
          "type":"contactperson",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "notes":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8b923-692c-11e6-8a84-bae500000053/notes",
          "type":"note",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "state":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata/states/fb56c504-2e58-11e6-8a84-bae500000069",
          "type":"state",
          "mediaType":"application/json"
        }
      },
      "salesAmount":0,
      "priceType":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/context/companysettings/pricetype/672559f1-cbf3-11e1-9eb9-889ffa6f2222",
          "type":"pricetype",
          "mediaType":"application/json"
        },
        "id":"672559f1-cbf3-11e1-9eb9-889ffa6f49fd",
        "name":"Цена продажи",
        "externalCode":"cbcf493b-55bc-11d9-848a-00112f43529a"
      },
      "bonusProgram": {
        "meta": {
          "href": "https://online.moysklad.ru/api/remap/1.2/entity/bonusprogram/129626ee-ac91-11e9-ac12-000d00000009",
          "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/bonusprogram/metadata",
          "type": "bonusprogram",
          "mediaType": "application/json",
          "uuidHref": "https://online.moysklad.ru/app/#discount/edit?id=129626ee-ac91-11e9-ac12-000d00000009"
        }
      },
      "bonusPoints": 0
    },
    {  
      "meta":{  
        "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8e347-692c-11e6-8a84-bae500000055",
        "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
        "type":"counterparty",
        "mediaType":"application/json"
      },
      "id":"12a8e347-692c-11e6-8a84-bae500000055",
      "accountId":"1185513e-692c-11e6-8a84-bae500000001",
      "owner":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/employee/12747f9e-692c-11e6-8a84-bae50000002a",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
          "type":"employee",
          "mediaType":"application/json"
        }
      },
      "shared":false,
      "created":"2007-02-07 17:16:41",
      "group":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/group/11883c67-692c-11e6-8a84-bae500000002",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/group/metadata",
          "type":"group",
          "mediaType":"application/json"
        }
      },
      "updated":"2016-08-23 15:21:09",
      "name":"ООО \"Покупатель\"",
      "externalCode":"DTItQRbDhyl472ZqC5OWw2",
      "archived":false,
      "companyType":"legal",
      "legalTitle":"Общество с ограниченной ответственностью \"Покупатель\"",
      "legalAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 123, addInfo",
      "legalAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"123",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "actualAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 111, addInfo",
      "actualAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"111",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "inn":"7736570902",
      "kpp":"773601002",
      "accounts":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8e347-692c-11e6-8a84-bae500000055/accounts",
          "type":"account",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "tags":[  

      ],
      "contactpersons":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8e347-692c-11e6-8a84-bae500000055/contactpersons",
          "type":"contactperson",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "notes":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12a8e347-692c-11e6-8a84-bae500000055/notes",
          "type":"note",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "salesAmount":0
    },
    {  
      "meta":{  
        "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12c9ebcf-692c-11e6-8a84-bae50000005d",
        "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
        "type":"counterparty",
        "mediaType":"application/json"
      },
      "id":"12c9ebcf-692c-11e6-8a84-bae50000005d",
      "accountId":"1185513e-692c-11e6-8a84-bae500000001",
      "owner":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/employee/12747f9e-692c-11e6-8a84-bae50000002a",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
          "type":"employee",
          "mediaType":"application/json"
        }
      },
      "shared":false,
      "group":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/group/11883c67-692c-11e6-8a84-bae500000002",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/group/metadata",
          "type":"group",
          "mediaType":"application/json"
        }
      },
      "updated":"2016-08-23 15:21:09",
      "name":"Розничный покупатель",
      "externalCode":"lBvYwLWMiBsct7sVRrFnJ2",
      "archived":false,
      "created":"2007-02-07 17:16:41",
      "companyType":"legal",
      "legalAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 123, addInfo",
      "legalAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"123",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "actualAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 111, addInfo",
      "actualAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"111",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "accounts":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12c9ebcf-692c-11e6-8a84-bae50000005d/accounts",
          "type":"account",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "tags":[  

      ],
      "contactpersons":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12c9ebcf-692c-11e6-8a84-bae50000005d/contactpersons",
          "type":"contactperson",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "notes":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/12c9ebcf-692c-11e6-8a84-bae50000005d/notes",
          "type":"note",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "salesAmount":0
    },
    {  
      "meta":{  
        "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/df2fdd2d-6934-11e6-8a84-bae500000049",
        "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata",
        "type":"counterparty",
        "mediaType":"application/json"
      },
      "id":"df2fdd2d-6934-11e6-8a84-bae500000049",
      "accountId":"1185513e-692c-11e6-8a84-bae500000001",
      "owner":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/employee/12747f9e-692c-11e6-8a84-bae50000002a",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/employee/metadata",
          "type":"employee",
          "mediaType":"application/json"
        }
      },
      "shared":false,
      "group":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/group/11883c67-692c-11e6-8a84-bae500000002",
          "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/group/metadata",
          "type":"group",
          "mediaType":"application/json"
        }
      },
      "updated":"2016-08-23 16:24:08",
      "name":"rtr",
      "externalCode":"rRlzrdZmjql9r9dveXPE43",
      "archived":false,
      "created":"2007-02-07 17:16:41",
      "companyType":"legal",
      "legalAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 123, addInfo",
      "legalAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"123",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "actualAddress":"125009, Россия, г Москва, Москва, ул Тверская, 1, 111, addInfo",
      "actualAddressFull":{  
        "postalCode":"125009",
        "country":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/country/9df7c2c3-7782-4c5c-a8ed-1102af611608",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/country/metadata",
            "type":"country",
            "mediaType":"application/json"
          }
        },
        "region":{  
          "meta":{  
            "href":"https://online.moysklad.ru/api/remap/1.2/entity/region/00000000-0000-0000-0000-000000000077",
            "metadataHref":"https://online.moysklad.ru/api/remap/1.2/entity/region/metadata",
            "type":"region",
            "mediaType":"application/json"
          }
        },
        "city":"Москва",
        "street":"ул Тверская",
        "house":"1",
        "apartment":"111",
        "addInfo":"addinfo",
        "comment":"some words about address"
      },
      "accounts":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/df2fdd2d-6934-11e6-8a84-bae500000049/accounts",
          "type":"account",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "tags":[  

      ],
      "contactpersons":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/df2fdd2d-6934-11e6-8a84-bae500000049/contactpersons",
          "type":"contactperson",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "notes":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/df2fdd2d-6934-11e6-8a84-bae500000049/notes",
          "type":"note",
          "mediaType":"application/json",
          "size":0,
          "limit":1000,
          "offset":0
        }
      },
      "state":{  
        "meta":{  
          "href":"https://online.moysklad.ru/api/remap/1.2/entity/counterparty/metadata/states/fb56c504-2e58-11e6-8a84-bae500000069",
          "type":"state",
          "mediaType":"application/json"
        }
      },
      "salesAmount":0
    }
  ]
}';
$projectItems = '{
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
    "href": "https://online.moysklad.ru/api/remap/1.2/entity/project",
    "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/project/metadata",
    "type": "project",
    "mediaType": "application/json",
    "size": 2,
    "limit": 1000,
    "offset": 0
  },
  "rows": [
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/project/51f263f9-0307-11e6-9464-e4de0000007c",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/project/metadata",
        "type": "project",
        "mediaType": "application/json"
      },
      "id": "51f263f9-0307-11e6-9464-e4de0000007c",
      "accountId": "84e60e93-f504-11e5-8a84-bae500000008",
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
      "updated": "2016-04-15 15:41:05",
      "name": "Аггрегатор томатной пасты",
      "description": "Проект по сбору и переработке томатной пасты от всех поставщиков",
      "code": "1248y12hrd",
      "externalCode": "HZV7dGc8iAnf0aNjrvQvN0",
      "archived": false,
      "attributes": [
        {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/project/metadata/attributes/0cd74e1e-2e59-11e6-8a84-bae50000008a",
            "type": "attributemetadata",
            "mediaType": "application/json"
          },
          "id": "ddff1ee8-12c1-11e6-9464-e4de0000007a",
          "name": "Приоритет проекта",
          "type": "string",
          "value": "Высокий"
        }
      ]
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/project/8477d916-0aef-11e6-9464-e4de00000103",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/project/metadata",
        "type": "project",
        "mediaType": "application/json"
      },
      "id": "8477d916-0aef-11e6-9464-e4de00000103",
      "accountId": "84e60e93-f504-11e5-8a84-bae500000008",
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
      "updated": "2016-04-25 17:10:51",
      "name": "План",
      "description": "Проект отслеживающий выполнение плана продаж",
      "code": "124721fsavy",
      "externalCode": "lv7MmPK4jvaqq-nA3g3NL2",
      "archived": false,
      "attributes": [
        {
          "meta": {
            "href": "https://online.moysklad.ru/api/remap/1.2/entity/project/metadata/attributes/0cd74e1e-2e59-11e6-8a84-bae50000008a",
            "type": "attributemetadata",
            "mediaType": "application/json"
          },
          "id": "ddff1ee8-12c1-11e6-9464-e4de0000007a",
          "name": "Приоритет проекта",
          "type": "string",
          "value": "Низкий"
        }
      ]
    }
  ]
}';
$expenseitems = '{
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
    "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/",
    "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
    "type": "expenseitem",
    "mediaType": "application/json",
    "size": 8,
    "limit": 1000,
    "offset": 0
  },
  "rows": [
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/1be2350e-0479-11e5-b03a-448a5b426e7e",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "1be2350e-0479-11e5-b03a-448a5b426e7e",
      "updated": "2015-05-27 17:03:10",
      "name": "Закупка товаров",
      "description": "Расходы на закупку товаров учитываются в отчете «Прибыли и убытки» как себестоимость проданных товаров",
      "code": "1",
      "externalCode": "1"
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/1be2395a-0479-11e5-baee-448a5b426e7e",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "1be2395a-0479-11e5-baee-448a5b426e7e",
      "updated": "2015-05-27 17:03:10",
      "name": "Возврат",
      "description": "Расходы по возвратам не учитываются в отчете «Прибыли и убытки»",
      "code": "3",
      "externalCode": "3"
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/1be23a18-0479-11e5-a260-448a5b426e7e",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "1be23a18-0479-11e5-a260-448a5b426e7e",
      "updated": "2015-05-27 17:03:10",
      "name": "Налоги и сборы",
      "description": "Расходы по налогам и сборам учитываются как отдельная статья, не включенная в операционные расходы",
      "code": "2",
      "externalCode": "2"
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/23f05a1e-0479-11e5-8bb9-448a5b426e7e",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "23f05a1e-0479-11e5-8bb9-448a5b426e7e",
      "updated": "2015-05-27 17:03:24",
      "name": "Списания",
      "description": "Списания",
      "code": "4",
      "externalCode": "4"
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/82031d62-2e58-11e6-ab5c-d8cb8a84bae5",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "82031d62-2e58-11e6-ab5c-d8cb8a84bae5",
      "updated": "2016-06-09 18:40:35",
      "name": "Перемещение",
      "description": "Перемещения денег между кассами не учитываются в отчете «Прибыли и убытки».",
      "code": "5",
      "externalCode": "5"
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/fb0a4b75-2e58-11e6-8a84-bae500000058",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "fb0a4b75-2e58-11e6-8a84-bae500000058",
      "accountId": "f976ed28-2e58-11e6-8a84-bae500000001",
      "updated": "2016-06-09 18:43:58",
      "name": "Аренда",
      "description": "Аренда",
      "code": "Аренда",
      "externalCode": "IVslr34uhCUuglxPD7Idm0"
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/fb0c8620-2e58-11e6-8a84-bae500000059",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "fb0c8620-2e58-11e6-8a84-bae500000059",
      "accountId": "f976ed28-2e58-11e6-8a84-bae500000001",
      "updated": "2016-06-09 18:43:58",
      "name": "Зарплата",
      "description": "Зарплата",
      "code": "Зарплата",
      "externalCode": "RY7G3TULiTyjqYRrzr3V03"
    },
    {
      "meta": {
        "href": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/fb0dc966-2e58-11e6-8a84-bae50000005a",
        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/expenseitem/metadata",
        "type": "expenseitem",
        "mediaType": "application/json"
      },
      "id": "fb0dc966-2e58-11e6-8a84-bae50000005a",
      "accountId": "f976ed28-2e58-11e6-8a84-bae500000001",
      "updated": "2016-06-09 18:43:58",
      "name": "Маркетинг и реклама",
      "description": "Маркетинг и реклама",
      "code": "Маркетинг и реклама",
      "externalCode": "1PMtKJq-jjVJQbu5OWqBG1"
    }
  ]
} 
  ';
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