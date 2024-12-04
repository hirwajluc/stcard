/*
 Template Name: HH EDU
 Author: Hirwa
 Website: www.hhlinks.rw
 File: Dashboard js
 */

!function ($) {
    "use strict";

    var Dashboard = function () {
    };


    //creates area chart
    Dashboard.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 0,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            gridLineColor: '#eee',
            hideHover: 'auto',
            lineColors: lineColors,
            fillOpacity: 0.7,
            behaveLikeLine: true
        });
    },

    //creates area chart
    Dashboard.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            gridLineColor: '#eef0f2',
            barSizeRatio: 0.4,
            resize: true,
            hideHover: 'auto',
            barColors: lineColors
        });
    },

    //creates Donut chart
    Dashboard.prototype.createDonutChart = function (element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true,
            colors: colors,
        });
    },

    //donut
    $('.peity-donut').each(function () {
        $(this).peity("donut", $(this).data());
    });

    //pie
    $('.peity-pie').each(function () {
        $(this).peity("pie", $(this).data());
    });

    /* BEGIN SVG WEATHER ICON */
    if (typeof Skycons !== 'undefined'){
        var icons = new Skycons(
            {"color": "#fff"},
            {"resizeClear": true}
            ),
                list  = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

            for(i = list.length; i--; )
            icons.set(list[i], list[i]);
            icons.play();
        };

    Dashboard.prototype.init = function () {

        //creating area chart
        var $areaData = [
			{y: '2020', a: 0, b: 0, c:0, d:0},
        	{y: '2021', a: 236, b: 228, c:230, d:0},
            {y: '2022', a: 228, b: 234, c:192, d:80}
        ];
        this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b', 'c', 'd'], ['IT', 'ETT', 'RE', 'MET'], ['#508aeb', '#fcc24c', '#004b0a', '#10147f']);

        //creating bar chart
        var $barData = [
            {y: '2021', a: 236, b: 368},
            {y: '2022', a: 228, b: 421}
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['ICT', 'EEE'], ['#54cc96', '#fcc24c']);

        //creating donut chart
        var $donutData = [
            {label: "Bitcoin", value: 12},
            {label: "Ethereum", value: 42},
            {label: "Cardano", value: 20},
            {label: "Ripple", value: 26}
        ];
        this.createDonutChart('morris-donut-example', $donutData, ['#508aeb', "#54cc96", '#ff5560', '#fcc24c']);

    },
        //init
        $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.Dashboard.init();
    }(window.jQuery);
