<?php

echo '
<html><head><script type="text/javascript">function load(){alert("You\'ve been XSSed..");}</script></head><body onload="load();"><p onload="javascript:alert("XSSed")">Under Stage 3A <em>water restrictions</em>, gardens can only be watered in the morning on specified watering days:</p><p>A hand-held hose fitted with trigger nozzle, a water can, bucket, and manual dripper system can be used  to water from 6am-8am.</p></body></html><IMG SRC="javascript:alert("XSSed image IE");">';

?>
