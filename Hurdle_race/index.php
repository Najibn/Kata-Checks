<?php 


require_once 'HurdlesRaceClass.php';


$actions = ["run","run","jump","jump","run"];
$track =  "__||_";


$race = new HurdlesRace($actions, $track);
$wasSuccessful = $race->run_race();

echo "Was the race successful? " . ($wasSuccessful ? "Yes" : "No") . PHP_EOL;
echo "Final track: " . $race->getFinalTrack() . PHP_EOL;




?>