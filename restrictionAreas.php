<?php

header('Content-Type: application/json');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
//header("Access-Control-Allow-Origin: *");

error_reporting (2);
$randDay = rand( 1 , 30 );
$randDay2 = rand( 1 , 30 );

$id8 = '
{
	"id":"8",
	"restrictionArea": {
	    "shortName": "Condamine Catchment Natural",
	    "longName": "Resource Management Corporation ltd. (Condamine Alliance)",
	    "description": "<html><head><script type=\"text/javascript\">function load(){alert(\"You\'ve been XSSed..\");}</script></head><body onload=\"load();\">Under Stage 3A <em>water restrictions</em>, gardens can only be watered in the <span style=\"font-weight:bold;\">morning</span> on specified watering days:<br>A hand-held hose fitted with trigger nozzle, a water can, bucket, and manual dripper system can be used  to water from 6am-8am.<!--<IMG SRC=javascript:alert(\'XSS\')>--></body></html>",
	    "geographicDescription":"Rocky and shady, large pine trees near the lake. ",
	    "waterRestriction": {
	        "restrictionWebsite": "http://melbwater.com/condamine",
	        "startDate": "2011-01-15",
	        "endDate": "n/a",
	        "targetSavings":"150 ML",
	        "levelStageId": "3A",
	        "type": "Permanent",
	        "changeReasonId": "2345"
	    }
	}
}';

$id34='
{
	"id":"34",
    "restrictionArea": {
        "shortName": "Bacchus Marsh",
        "longName": "Incorporated Land And Water Corp",
        "description": "<html>Watering systems with automatic timers can be used on your alternate days (details below) from midnight to 4am.<br>Alternate days: Even and no-numbered houses can water on even dates of the month odd numbered houses can water on odd dates of the month, Everyone can water on the 31st within the specified times.</html>",
        "geographicDescription":"Hilly and Grassy",
        "waterRestriction": {
            "restrictionWebsite": "http://usgs.grandcanyonwater.com/bacchus",
            "startDate": "2010-06-03",
            "endDate": "2012-06-06",
            "targetSavings":"350 ML",
            "levelStageId": "1B",
            "type": "stage",
            "changeReasonId": "2341"
        }
    }
}';

$id62='
{
	"id":"62",
    "restrictionArea": {
        "shortName": "Diggers Rest",
        "longName": "Society of Miners, Excavators and Shovelers",
        "description": "<html>Cars may be washed at home with either a bucket or a high pressure, water saving device. Cars may be washed using a water efficient commercial or mobile carwash. Watering systems with automatic timers can be used on your alternate days (details below) from midnight to 4am.<br/> Restricted hours - use a manual water system on your alternate day between: 6-10am,8-10pm</html>",
        "geographicDescription":"Sunny and northfacing. Full of mushrooms.",
        "waterRestriction": {
            "restrictionWebsite": "http://water.bom.gov.au/diggers",
            "startDate": "2011-12-01",
            "endDate": "2012-06-06",
            "targetSavings":"750 ML",
            "levelStageId": "4A",
            "type": "stage",
            "changeReasonId": "2657"
        }
    }
}';

$id45='
{
	"id":"45",
    "restrictionArea": {
        "shortName": "Long Forest",
        "longName": "Society of Miners, Excavators and Shovelers",
        "description": "<html>Cars may be washed at home with either a bucket or a high pressure, water saving device. Cars may be washed using a water efficient commercial or mobile carwash. Watering systems with automatic timers can be used on your alternate days (details below) from midnight to 4am.<br/> Restricted hours - use a manual water system on your alternate day between: 6-10am,8-10pm</html>",
        "geographicDescription":"Sunny and northfacing. Full of mushrooms.",
        "waterRestriction": {
            "restrictionWebsite": "http://water.bom.gov.au/longforest",
            "startDate": "2011-12-01",
            "endDate": "2012-06-06",
            "targetSavings":"750 ML",
            "levelStageId": "3A",
            "type": "stage",
            "changeReasonId": "2657"
        }
    }
}';

$id23='
{
	"id":"23",
    "restrictionArea": {
        "shortName": "Mount Macedon",
        "longName": "Society of Miners, Excavators and Shovelers",
        "description": "<html>Cars may be washed at home with either a bucket or a high pressure, water saving device. Cars may be washed using a water efficient commercial or mobile carwash. Watering systems with automatic timers can be used on your <em>alternate</em> days (details below) from midnight to 4am. <br/>Restricted hours - use a manual water system on your alternate day between: 6-10am,8-10pm.</html>",
        "geographicDescription":"Sunny and northfacing. Full of mushrooms.",
        "waterRestriction": {
            "restrictionWebsite": "http://water.bom.gov.au/macedon",
            "startDate": "2011-12-01",
            "endDate": "2012-06-06",
            "targetSavings":"750 ML",
            "levelStageId": "1B",
            "type": "stage",
            "changeReasonId": "2657"
        }
    }
}';

if ($urlVariables[5] == null) {
	echo "[$id8,$id34,$id62,$id45,$id23]";
} elseif ($urlVariables[5] == "8") {
	echo $id8;
} elseif ($urlVariables[5] == "34") {
	echo $id34;
} elseif ($urlVariables[5] == "62") {
	echo $id62;
} elseif ($urlVariables[5] == "45") {
	echo $id45;
} elseif ($urlVariables[5] == "23") {
	echo $id23;	
} else {
    //error!
    include "error.php";
}


?>
