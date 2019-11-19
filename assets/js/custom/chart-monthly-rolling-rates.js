//Monthly Rolling Rates
FusionCharts.ready(function() {
    var salesChart = new FusionCharts({
            type: 'msline',
            renderAt: 'rlc-container',
            width: "100%",
            height: "350",
            dataFormat: "json",
            dataSource: {
                chart: {
                    //caption: "Support Tickets : Received vs Resolved",
                    //yaxisname: "# of Tickets",
                    //subcaption: "Last week",
                    "showLegend": "1",
                    bgColor: "transparent",
                    showBorder: "0",
                    "canvasBorderThickness": "0",
                    "divLineColor": "#c9c9c9",
                    "baseFontColor": "#c9c9c9",
                    showPlotBorder: "1",
                    numdivlines: "6",
                    drawcrossline: "1",
                    showvalues: "0",
                    legendBorderColor: "transparent",
                    "alternateHGridColor": "transparent",
                    legenditemfontsize: "14",
                    legenditemfontbold: "0",
                    legendShadow: "0",
                    "labelDisplay": "rotate",
                    plottooltext: "<b>$dataValue</b> Tickets $seriesName on $label",
                    theme: "fusion"
                },
                categories: [{
                    category: [{
                            label: "Jan"
                        },
                        {
                            label: "Feb"
                        },
                        {
                            label: "mar"
                        },
                        {
                            label: "Apr"
                        },
                        {
                            label: "May"
                        },
                        {
                            label: "Jun"
                        },
                        {
                            label: "Jul"
                        },

                        {
                            label: "Aug"
                        },

                        {
                            label: "Sep"
                        },

                        {
                            label: "Oct"
                        },

                        {
                            label: "Nov"
                        },

                        {
                            label: "Dec"
                        }
                    ]
                }],
                dataset: [{
                        seriesname: "Target",
                        "initiallyHidden": "1",
                        data: [{
                                value: "0"
                            },
                            {
                                value: "800000"
                            },
                            {
                                value: "320000"
                            },
                            {
                                value: "240000"
                            },
                            {
                                value: "160000"
                            },
                            {
                                value: "80000"
                            },
                            {
                                value: "0"
                            }
                        ]
                    },
                    {
                        seriesname: "2018",
                        "initiallyHidden": "1",
                        data: [{
                                value: "5505"
                            },
                            {
                                value: "4500"
                            },
                            {
                                value: "520"
                            },
                            {
                                value: "29000"
                            },
                            {
                                value: "4853"
                            },
                            {
                                value: "28232"
                            },
                            {
                                value: "3222"
                            }
                        ]
                    },
                    {
                        seriesname: "2019",
                        "initiallyHidden": "1",
                        data: [{
                                value: "400002"
                            },
                            {
                                value: "323600"
                            },
                            {
                                value: "42562"
                            },
                            {
                                value: "22232"
                            },
                            {
                                value: "430000"
                            },
                            {
                                value: "143333"
                            },
                            {
                                value: "310000"
                            }
                        ]
                    }
                ]
            }
        })
        .render();
});