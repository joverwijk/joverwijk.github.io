<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<canvas id="ECGraph" height="250" width="800"></canvas>
<p style="font-size: 0.7em; text-align:right">
    Grafiek gemaakt met behulp van <a href="http://www.chartjs.org/" title="Chart.js">Chart.js</a>.</br>
    Punten zijn gegeven per maand.
</p>
<script>
    var ctx = document.getElementById("ECGraph");
    var ECGraph = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                "aug 2018", "sep 2018", "okt 2018", "nov 2018", "dec 2018",
                "jan 2019", "feb 2019", "maa 2019", "apr 2019", "mei 2019", "jun 2019", "jul 2019", "aug 2019", "sep 2019", "okt 2019", "nov 2019", "dec 2019",
                "jan 2020", "feb 2020", "maa 2020", "apr 2020", "mei 2020", "jun 2020", "jul 2020", "aug 2020", "sep 2020", "okt 2020", "nov 2020", "dec 2020",
                "jan 2021", "feb 2021", "maa 2021", "apr 2021", "mei 2021", "jun 2021", "jul 2021", "aug 2021", "sep 2021", "okt 2021", "nov 2021", "dec 2021",
                "jan 2022", "feb 2022", "maa 2022", "apr 2022", "mei 2022", "jun 2022", "jul 2022"
            ],
            datasets: [{
                label: "EC",
                /* Nieuwe data:
                    {
                        x: datum,
                        y: punten
                    },
                */
                data: [0],
                fill: false,
                lineTension: 0,
                spanGaps: true,
                borderColor: "#164225",
                backgroundColor: "#A1B3A7"
            }, {
                label: "NBSA-grens propedeuse",
                data: [45,,,,,,,,,,,45],
                fill: false,
                spanGaps: true,
                borderColor: "red",
                backgroundColor: "#FF9999"
            }]
        },
        options: {
            title: {
                display: true,
                text: 'EC verkregen over tijd',
                padding: 10
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 240
                    },
                    scaleLabel: {
                        display: true,
                        labelString: "EC"
                    }
                }]
            }
        }
    });
</script>