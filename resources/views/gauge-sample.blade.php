<html>
    <head>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"> 
        <link rel="stylesheet" href="{{ URL::to('assets/js/jquery.dynameter.css') }}"> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <style>
            body div.dm-wrapperDiv,
            body div.dm-wrapperDiv div.dm-bgClrDiv, 
            body div.dm-wrapperDiv div.dm-maskDiv {
                width: 400px;
                height: 200px;
            }

            body div.dm-wrapperDiv div.dm-bgClrDiv, 
            body div.dm-wrapperDiv div.dm-maskDiv {
                border: none;
            }

            body div.dm-wrapperDiv div.dm-innerDiv {
                width: 325px;
                height: 325px;
                border-radius: 200px 200px 0 0;
                left: 37.5px;
                z-index: 20;
                background: #FFF;
                border: none;
                border-radius: 100%;
                top: 37px;
            }

            body div.dm-wrapperDiv div.dm-bgClrDiv, 
            body div.dm-wrapperDiv div.dm-maskDiv {
                border-radius: 200px 200px 0 0;
            }

            div.dm-wrapperDiv div.dm-bgClrDiv.very-poor {
                background: #E65656;
            }

            div.dm-wrapperDiv div.dm-bgClrDiv.poor {
                background: #FCA949;
            }

            div.dm-wrapperDiv div.dm-bgClrDiv.fair {
                background: #FCE04A;
            }

            div.dm-wrapperDiv div.dm-bgClrDiv.good {
                background: #CFF270;
            }

            div.dm-wrapperDiv div.dm-bgClrDiv.excellent {
                background: #81D16F;
            }
            
            div.dm-wrapperDiv div.dm-bgClrDiv.blank,
            body div.dm-wrapperDiv div.dm-maskDiv {
                background: #BCD5E6;
            }

            div.dm-wrapperDiv div.dm-maskDiv {
                z-index: 5 !important;
            }

            div.dm-wrapperDiv div.dm-bgClrDiv {
                border-bottom: 5px solid #FFF !important;
            }

            .dm-wrapperDiv .dm-bgClrDiv:last-of-type {
                border-bottom: none !important;
            }
        </style>
    </head>
    <body>
        <div id="fuel-gauge"></div>
        <script>
            $(document).ready (function () {
                function renderGaugeChart (value) {
                    $myFuelGauge = $("div#fuel-gauge").dynameter({
                        label: 'fuel',
                        value: value,
                        min: 0.0,
                        max: 1000,
                        unit: 'gal',
                        regions: { 
                            0: 'error',
                            200: 'poor',
                            400: 'fair',
                            600: 'good',
                            800: 'excellent'
                        }
                    });

                    var blanks = [];
                    var rotations = [ 144, 108, 72, 36, 0 ];
                    var contentIndex = 0;
                    var activeIndex = 4;

                    if (value <= 200) {
                        activeIndex = 0;
                    } else if (value <= 400) {
                        activeIndex = 1;
                    } else if (value <= 600) {
                        activeIndex = 2;
                    } else if (value <= 800) {
                        activeIndex = 3;
                    } else {
                        activeIndex = 4;
                    }

                    for (var i = 0; i < 4 - activeIndex; i++) {
                        $('<div class="dm-bgClrDiv blank" style="transform: rotate(' + rotations[i] + 'deg); z-index: 9;"></div>').insertAfter('.dm-maskDiv');
                    }
                }
                renderGaugeChart(450);
            });
        </script>
        <script src="{{ URL::to('assets/js/jquery.dynameter.js') }}"></script>
    </body>
</html>