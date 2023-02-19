<?php
// TODO: Chart for home pages 
$dataPoints = array(
	array("label"=> "Computer Science", "y"=> 590),
	array("label"=> "MCA", "y"=> 261),
	array("label"=> "PGDCSA", "y"=> 158),
	array("label"=> "M.Sc AI & ML", "y"=> 72),
	array("label"=> "M.Sc AI & ML Defence", "y"=> 191),
	array("label"=> "M.Sc Integrated ( Computer Science )", "y"=> 573),
);

?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Population of students"
	},
	subtitles: [{
		text: "As per courses"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<!-- <script src="./../js/chart.min.js"></script> -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>     