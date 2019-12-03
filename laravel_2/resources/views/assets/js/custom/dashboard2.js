var GEAR_CHART = {
    init: function (node) {
        Highcharts.chart( node, {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: 0,
                backgroundColor: null,
                className: "sub-gauge",
                plotShadow: false,
                type: 'pie',
              },
              title: {
                text: '<div class="supplier-chart__caption">'+
                        '<h3 class="bold">527</h3>' +
                        '<p>POOR</p>' +
                      '</div>',
                align: 'center',
                verticalAlign: 'middle',
                useHTML: true,
                y: 68,
                x: 16
              },
              
              navigation: {
                buttonOptions: 
                {
                  enabled: false
                }
              },
              credits: {
                  enabled: false
              },
              tooltip: {
                enabled: false,
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
              },
              plotOptions: {
                pie: {
                  dataLabels: {
                    enabled: false,
                    distance: -0.5,
                    alignTo: 'toPlotEdges',
                    style: {
                      fontWeight: 'bold',
                      color: 'white'
                    }
                  },
                  startAngle: -120,
                  endAngle: 120,
                  center: ['52.7%', '64%'],
                  size: '100%'
                }
              },
              series: [{
                type: 'pie',
                name: 'Current Score',
                innerSize: '75%',
                colors: ['#e05653', '#eaad69', '#fae054', '#bed5e5', '#bed5e5'],
            
                data: [{
                  name: "",
                  y: 1.5
                }, {
                  name: "",
                  y: 1.5
                }, 
                {
                  name: "",
                  y: 1.5 
                }, {
                  name: "",
                  y: 1.5
                },{
                  name: "",
                  y: 1.6
                }]
              }],
        })
    },

    build: function (node) {
        GEAR_CHART.init(node);
    }
}

GEAR_CHART.build('banner-chart-container-2');
GEAR_CHART.build('banner-chart-container-3');
GEAR_CHART.build('banner-chart-container-4');
