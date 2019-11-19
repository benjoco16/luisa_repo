FusionCharts.ready(function() {
    var wenk = new FusionCharts({
        type: 'pyramid',
        renderAt: 'pyramid-container',
        id: 'wealth-pyramid-chart-7',
        width: '100%',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "theme": "fusion",
                //"caption": "The Global Wealth Pyramid",
                "captionOnTop": "0",
                "captionPadding": "0",
                "alignCaptionWithCanvas": "1",
                // "subcaption": "Credit Suisse 2013",
                "subCaptionFontSize": "12",
                //"borderAlpha": "20",
                "is2D": "1",
                "bgColor": "#ffffff",
                "showValues": "1",
                "showBorder": "0",
                "showPlotBorder": "0",
                "numberPrefix": "$",
                "numberSuffix": "M",
                "showLabelsAtCenter": "0",
                "plotTooltext": "$label of world population is worth USD $value tn ",
                "showPercentValues": "0",
                "usePlotGradientColor": "0",
                "palettecolors": "ffffff",
                "chartLeftMargin": "40"
            },
            "data": [{
                "label": "Fatalities (0%)",
                "value": "98.7",
                "color": "#30a4f0"
            }, {
                "label": "RIDDOR (7.7%)",
                "value": "50.8",
                "color": "#30a4f0"
            }, {
                "label": "Next 1.1 bn (22.9%)",
                "value": "33",
                "color": "#30a4f0"
            }, {
                "label": "Last 3.2 bn (68.7%)",
                "value": "7.3",
                "color": "#30a4f0"
            }]
        }
    });
    wenk.render();
});