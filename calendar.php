<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' href='css/jquery-ui.min.css' />
<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			theme: true,
			defaultDate: '2015-02-12',
            defaultView: 'agendaWeek',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
                
				{
					title: 'All Day Event',
					start: '2015-02-01'
				},
				{
					title: 'Long Event',
					start: '2015-02-07',
					end: '2015-02-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2015-02-11',
					end: '2015-02-13'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T10:30:00',
					end: '2015-02-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2015-02-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2015-02-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2015-02-12T20:00:00'
				},
                
				{
					title: 'Birthday Party',
					start: '2015-02-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2015-02-28'
				}
			]
		});
		
	});
</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>
    <?php
include ('spoj.php');
mysql_query("SET NAMES 'utf8'");
//ispis seminara iz kategorije mehanički sustavi
$sql_upit="SELECT subject, module, room, building, professor, start_time, end_time, date, color, text FROM schedule";
if (!$q=mysql_query(@$sql_upit))
{
echo mysql_error();
die();
}
while ($redak=mysql_fetch_array($q)){
    echo '{';
    echo 'title:', '&#39;',$redak["subject"],'&#39;',',';
    echo 'start:', '&#39;',$redak["date"],'&#39;';
    echo '},';
}
?>
	<div id='calendar'></div>

</body>
</html>
