
//morris area chart

$(function () {
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            brewing: 151.3,
            chiller:36.7 ,
           utility: 44.1,
            store: 4.9,
            administration:7.3 
            
        }, {

            brewing: 151.3,
            chiller: 36.6,
           utility: 43.9,
            store: 4.9,
            administration:7.3;
        }, {
            
            brewing: 150.3,
            chiller: 36.4,
           utility: 43.7,
            store: 7.3,
            administration:4.9
        }, {
            
            brewing: 149.2,
            chiller: 36.1,
           utility: 43.3,
            store: 7.2,
            administration:4.8
        }, {
           
          brewing: 151.2,
            chiller: 36.6,
           utility: 43.9,
            store: 7.3,
            administration:4.9
        }, {
           
            brewing: 145,
            chiller: 35.1,
           utility: 42.1,
            store: 7.0,
            administration:4.7
        }, {
            brewing: 136.5,
            chiller: 33.0,
           utility: 39.6,
            store: 6.6,
            administration:4.4
        }, {
            

            brewing: '2010 Q1',
            chiller: 2666,
           utility: null,
            store: 2647,
            administration
        }, {
           
            period: '2012 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
           brewing: 141.6,
            chiller: 34.3,
           utility: 41.1,
            store: 6.9,
            administration:4.6
        }],
        xkey: 'period',
        ykeys: ['brewring', 'chiller', 'utility','store','administration'],
        labels: ['brewiring', 'chiller', 'store',' administration'],
        pointSize: 2,
        hideHover: 'auto',
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
