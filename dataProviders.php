<?php

  header('Content-Type: application/json');
  header('Cache-Control: no-cache');
  header('Pragma: no-cache');
  //header("Access-Control-Allow-Origin: *");

error_reporting (2);

echo '
{
    "id": "W00002",
    "dataProvider": {
        "identifier": "urn:bom.gov.au:awris:common:codelist:dataprovider:W00002",
        "name ": "ACTEW Corporation Limited",
        "areGisFilesProvided": false,
        "serviceArea": {
            "shortName": "ACTEW Corporation Limited",
            "longName": "ACTEW Corporation Limited",
            "description": "Blah blah blah, yadda yadda yadda, so on, etc."
        },
        "contacts": [
            {
                "name": "Water Conservation Office ",
                "phone": "(02) 6248 3131",
                "email": "waterconservation@actew.com.au",
                "isPrimaryContact": true
            },
            {
                "name": "ACTEW Secretary",
                "phone": "(02) 6248 5652",
                "email": "secretary@actew.com.au",
                "isPrimaryContact": false
            }
        ]
    }
}
';

?>
