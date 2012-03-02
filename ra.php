<?php

  header('Content-Type: application/json');
  header('Cache-Control: no-cache');
  header('Pragma: no-cache');
  header("Access-Control-Allow-Origin: *");

if ($_GET["q"] == null) {
	echo '
	[
	    {
		"id": "8",
		"restrictionArea": {
		    "levelStageId": "3",
		    "shortName": "Tuggeranong Lake",
		    "startDate": "2011-08-24"
		}
	    },
	    {
		"id": "9",
		"restrictionArea": {
		    "levelStageId": "4",
		    "shortName": "Diamond Hill",
		    "startDate": "2011-08-24"
		}
	    },
		{
		"id": "12",
		"restrictionArea": {
		    "levelStageId": "2",
		    "shortName": "Arizona River",
		    "startDate": "2011-08-24"
		}
	    },
	    {
		"id": "14",
		"restrictionArea": {
		    "levelStageId": "2",
		    "shortName": "The City of Angels",
		    "startDate": "2011-08-24"
		}
	    }
	]
	';
} else {
	echo $_GET["q"];
}

?>
