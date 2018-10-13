<?php
	include('GrowthChart.class.php');

	$patientXData = array(2,  4,  6,  8, 10, 12);
	$patientYData = array(36, 40, 42.2, 44, 45, 45.8);

	$xvals = join(',', $patientXData);
	$yvals = join(',', $patientYData);
	
?>
<html>
<head>
	<title>Growth Chart Example</title>
</head>
<body>

	<img src="chart.php?style=head-age&sex=<?php echo GrowthChart::SEX_MALE; ?>&maxage=35&xvals=<?php echo $xvals; ?>&yvals=<?php echo $yvals; ?>" />

</body>
</html>