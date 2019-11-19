// Semi Circle Donut Chart
Highcharts.chart('hdc-container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: '',
        align: 'left',
        verticalAlign: 'top',
        y: 60
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    navigation: {
        buttonOptions: {
            enabled: false
        }
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false,
                distance: -50,
                style: {
                    fontWeight: '600',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '110%'
        }
    },
    series: [{
        type: 'pie',
        height: '100px',
        name: 'Performance Summary',
        innerSize: '50%',
        colors: ['#86d173', '#f9e053', '#e05555'],
        data: [
            ['Advisory', 13.29],
            ['Required', 58.9],
            ['Target', 13],

        ]
    }]
});