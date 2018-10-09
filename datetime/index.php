<?php 

// phpinfo();

//basic date and time function 
//current date and time 
echo "Today is ".date('l, F j, Y')."<br><br>";

//static time
echo "The time is". date('g:i:s a')."<br><br>";

//date with time
echo "Today is ". date('g:i:s a \o\n l, F j, Y')."<br><br>";

//date cookie
echo date(DATE_COOKIE)."<br><br>";

//timing how long  a script runs
echo microtime()."<br>"; //first argument is time and second is current time stamp
echo "Time Taken: ". (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']). 'seconds<br>';

// make time
$timestamp = mktime(18,44,0,6,12,2018);  //local timestamp default
$globalTimestamp = gmmktime(18,44,0,6,12,2018); //global timestamp
echo "Local time ".date('g:i:s a, l, F j,Y',$timestamp)."<br><br>";
echo "Global timezone ".date('g:i:s a, l, F j,Y',$globalTimestamp)."<br><br>";

//DATE TIME CLASS METHODS
//modify(), add(), sub(), diff()

$now = new DateTime();
echo "Date and class methods<br><br>";
echo $now->format('g:i a, l, F j, Y');

//each method have equivalent procedural function
$now2 = date_create();
echo date_format($now2, 'l, F j, Y');
// echo nl2br("One line.\nAnother line.");
$format='g:i a, l, F j, Y';
$relative = new DateTime('+3 weeks 2 days');
echo nl2br("\nIn 3 weeks 2 days it will be".$relative->format($format));


//creating date
$dt = new DateTime();
$format = $dt -> format('j F, Y'); // 13 june 2018
echo $format."<br><br>";
echo date("r");
echo gmstrftime('%s');

 ?>