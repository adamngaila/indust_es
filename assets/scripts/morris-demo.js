
//morris area chart

$(function () {
 $.ajax({
    url: "https://github.com/adamngaila/indust_es/tree/master/class/chora.php",
    method: "GET",
    success: function(data) {
      
      var days = [];
      var demand = [];
      var total_energy(GJ) = [];
      for(var i in data) {
        days.push(data[i].daytime);
        demand.push(data[i].demand);
        total_energy(GJ).push(data[i].total_energy(GJ));
      }
     var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'demand  total_energy(GJ)',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: days
          }
        ]
      };
    }
  var ctx = $('morris-area-chart');

      var barGraph = new Chart(ctx, {
        type: 'Area',
        data: chartdata
      });
    },
    error: function(data) {
      
    }
 });
// Morris.Area({
 //       element: ,
     
 //   data : ['days','demand','total_energy(GJ))'],
  //  xkey : 'days',
   // ykeys : ['demand','total_energy(GJ)'],
  //  labels : ['demand','total_energy(GJ)'],
   // hideHover:'auto',

     
        //resize: true
    });

      
    
 
    //morris donut chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "administration energy consumption",
            value: 12
        }, {
            label: "production energy consumption",
            value: 30
        }, {
            label: "total consumption",
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
