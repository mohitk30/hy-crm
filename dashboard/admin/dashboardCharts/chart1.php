<!-- chart 1 -->
<?php
 
$dataPoints1 = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);
 
?>

<!-- chart 2 -->
<?php
 
 
 
 $dataPoints2 = array(
	array("x" => 946665000000, "y" => 3289000),
	array("x" => 978287400000, "y" => 3830000),
	array("x" => 1009823400000, "y" => 2009000),
	array("x" => 1041359400000, "y" => 2840000),
	array("x" => 1072895400000, "y" => 2396000),
	array("x" => 1104517800000, "y" => 1613000),
	array("x" => 1136053800000, "y" => 1821000),
	array("x" => 1167589800000, "y" => 2000000),
	array("x" => 1199125800000, "y" => 1397000),
	array("x" => 1230748200000, "y" => 2506000),
	array("x" => 1262284200000, "y" => 6704000),
	array("x" => 1293820200000, "y" => 5704000),
	array("x" => 1325356200000, "y" => 4009000),
	array("x" => 1356978600000, "y" => 3026000),
	array("x" => 1388514600000, "y" => 2394000),
	array("x" => 1420050600000, "y" => 1872000),
	array("x" => 1451586600000, "y" => 2140000)
 );
 
 $dataPoints_s1 = array(
	array("x" => 1483381800000 , "y" => 650),
	array("x" => 1483468200000 , "y" => 700),
	array("x" => 1483554600000 , "y" => 710),
	array("x" => 1483641000000 , "y" => 658),
	array("x" => 1483727400000 , "y" => 734),
	array("x" => 1483813800000 , "y" => 963),
	array("x" => 1483900200000 , "y" => 847),
	array("x" => 1483986600000 , "y" => 853),
	array("x" => 1484073000000 , "y" => 869),
	array("x" => 1484159400000 , "y" => 943),
	array("x" => 1484245800000 , "y" => 970),
	array("x" => 1484332200000 , "y" => 869),
	array("x" => 1484418600000 , "y" => 890),
	array("x" => 1484505000000 , "y" => 930)
 );

 $dataPoints_s2 = array( 
	array("label"=>"Oxygen", "symbol" => "O","y"=>46.6),
	array("label"=>"Silicon", "symbol" => "Si","y"=>27.7),
	array("label"=>"Aluminium", "symbol" => "Al","y"=>13.9),
	array("label"=>"Iron", "symbol" => "Fe","y"=>5)
 
 
)

?>
 <script>
window.onload = function () {
 
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Leads by Year"
	},
	axisY: {
		title: "Leads in No.",
		valueFormatString: "#0,,.",
		suffix: "",
		prefix: ""
	},
	data: [{
		type: "spline",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
 
 
 
 
 






 
 
var chart1 = new CanvasJS.Chart("chartContainer1", {
	title: {
		text: "Leads of last Week"
	},
	axisY: {
		title: "Number of Leads"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});

 
var chart_s1 = new CanvasJS.Chart("chartContainers1", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Site Traffic"
	},
	axisX: {
		valueFormatString: "DD MMM"
	},
	axisY: {
		title: "Total Number of Visits",
		includeZero: true,
		maximum: 1200
	},
	data: [{
		type: "splineArea",
		color: "#6599FF",
		xValueType: "dateTime",
		xValueFormatString: "DD MMM",
		yValueFormatString: "#,##0 Visits",
		dataPoints: <?php echo json_encode($dataPoints_s1); ?>
	}]
});


var chart_s2 = new CanvasJS.Chart("chartContainers2", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Average Composition of Magma"
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		yValueFormatString: "#,##0.0\"%\"",
		showInLegend: true,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints_s2, JSON_NUMERIC_CHECK); ?>
	}]
});




chart1.render();
chart2.render();
chart_s1.render();
chart_s2.render();
 
}
</script>
<div id="chartContainer1" style=" width: 100%;"></div> <br>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<div id="chartContainer2" style=" width: 100%; border-radius: 4px; "></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<div class="dashboard-two-small-graph-div">
<!-- <div id="chartContainers1" style="height: 370px; width: 100%;"></div> -->
<div id="chartContainers1" style="  border-radius: 4px; "></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<div id="chartContainers2" style="  border-radius: 4px; "></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          
               
</div>