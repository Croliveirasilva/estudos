$startTime= \Carbon::parse($request->input('starttime'));
$stime = ($startTime->hour * 60) + $startTime->minute;
$finishTime=\Carbon::parse($request->input('endtime'));
$estime = ($finishTime->hour * 60) + $finishTime->minute;


$minutes=1510;

$hours = intdiv($minutes, 60).':'. ($minutes % 60);
