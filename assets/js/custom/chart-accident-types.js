//Accident Rates Chart
const dataSource = {
    chart: {
        // caption: "Lead sources by industry",
        //yaxisname: "Number of Leads",
        aligncaptionwithcanvas: "0",
        "showBorder": "0",
        "bgColor": "transparent",
        "palettecolors": "30a4f0",
        "canvasBorderThickness": "0",
        "showCanvasBorder": "0",
        "usePlotGradientColor": "0",
        "showPlotBorder": "0",
        "BarHeight": "50",
        "placeValuesInside": "1",
        "valueFontColor": "#fff",
        //plottooltext: "<b>$dataValue</b> leads received",
        theme: "fusion"
    },
    data: [{
            label: "Trapped by Collapse",
            value: "4"
        },
        {
            label: "Struck by object",
            value: "2.5"
        },
        {
            label: "Burnt by chemical",
            value: "9"
        },
        {
            label: "Accidental fall",
            value: "2"
        },
        {
            label: "Accidental fall",
            value: "1"
        },
        {
            label: "More Data 1",
            value: "6"
        },
        {
            label: "More Data 2",
            value: "10"
        }
    ]
};
FusionCharts.ready(function() {
    var myChart = new FusionCharts({
        type: "bar2d",
        renderAt: "accident-rate-container",
        width: '100%',
        height: '320',
        dataFormat: "json",
        dataSource
    }).render();
});