(function() {
    //  morris Area chart on dashboard///
  
     Morris.Area({
        element: 'morris-area-chart',
     
    data : [data],
    xkey : 'days',
    ykeys : ['demand','total_energy(GJ)'],
    labels : ['demand','total_energy(GJ)'],
    hideHover:'auto',

        pointSize: 2,
     
        resize: true
    });
}
 });

      
    //  morris donut chart on dashboard///
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "industry consumption",
            value: 30
        }, {
            label: "total energy consumption",
            value: 20
        }],
        resize: true
    });

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

});
