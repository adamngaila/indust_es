
//morris area chart

$(function () {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2017 Q1',
            brewiring: 2666,
            utility: null,
            store: 2647
        }, {
            period: '2017 Q2',
            brewiring: 2778,
            utility: 2294,
            store: 2441
        }, {
            period: '2017 Q3',
            brewering: 4912,
            utility: 1969,
            store: 2501
        }, {
            period: '2018 Q4',
            brewiring: 3767,
            utility: 3597,
            store: 5689
        }, {
            period: '2019 Q1',
            brewiring: 6810,
            utility: 1914,
            store: 2293
        }, {
            period: '2019 Q2',
            brewiring: 5670,
            utility: 4293,
            store: 1881
        }, {
            period: '2019 Q3',
            brewiring: 4820,
            utility: 3795,
            store: 1588
        }, {
            period: '2019 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2019 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2019Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['brewiring', 'utility', 'store'],
        labels: ['brewiring', 'utility', 'store'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
    //morris donut chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "demand(KVA)",
            value: 13
        }, {
            label: "administration consumption",
            value: 5
        }, {
            label: "production energy consumption",
            value: 85
        }],
        resize: true
    });
    //morris bar chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'january2018',
            a: 146,
            b: 90
        }, {
            y: 'febuary2018',
            a: 175,
            b: 65
        }, {
            y: 'march2018',
            a: 150,
            b: 40
        }, {
            y: 'april 2018',
            a: 145,
            b: 65
        }, {
            y: 'january 2019',
            a: 150,
            b: 40
        }, {
            y: 'febuary 2019',
            a: 155,
            b: 65
        }, {
            y: 'march 2019',
            a: 168,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['depertment consumtion', 'time'],
        hideHover: 'auto',
        resize: true
    });
    //morris line chart
    Morris.Line({
        element: 'morris-line-chart',
        data: [{
            y: '2018',
            a: 100,
            b: 90
        }, {
            y: '2018',
            a: 75,
            b: 65
        }, {
            y: '2018',
            a: 80,
            b: 40
        }, {
            y: '2018',
            a: 75,
            b: 65
        }, {
            y: '2019',
            a: 50,
            b: 40
        }, {
            y: '2019',
            a: 75,
            b: 65
        }, {
            y: '2019',
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
