
//morris area chart

$(function () {
<?php

$connection = mysql_connect("bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","zx0hce4ovc2os4cs","x2den1myinx55q73","xdvjkpkp986nwt21");
$query = "SELECT * FROM daily_consumption";
$result =mysql_query($connection,$query);
$chart_data = '';
while ($row = mysql_fetch_array($result)) {
	$chart_data .="{days:'".$row["datetim"]."',demand : ".$row["demand"].",total_energy(GJ) : ".$row["total_energy(GJ)"]."},";
}
$chart_data = substr($chart_data,0, -2);

?>

    Morris.Area({
        element: 'morris-area-chart',
     
		data : [<?php echo $chart_data;  ?>],
		xkey : 'days',
		ykeys : ['demand','total_energy(GJ)'],
		labels : ['demand','total_energy(GJ)'],
		hideHover:'auto',

        pointSize: 2,
     
        resize: true
    });
    //morris donut chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });
    //morris bar chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });
    //morris line chart
    Morris.Line({
        element: 'morris-line-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
