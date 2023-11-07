// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Oct 1", "Oct 3", "Oct 5", "Oct 7", "Oct 9", "Oct 11", "Oct 13", "Oct 15", "Oct 17", "Oct 21", "Oct 24", "Oct 27", "Oct 30"],
    datasets: [{
      label: "Baht",
      lineTension: 0.3,
      backgroundColor: "rgba(255,117,216,0.3)",
      borderColor: "rgba(255,117,216,0.3)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(255,117,216,1)",
      pointBorderColor: "rgba(255,117,216,1)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(255,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [1000, 3016, 2626, 1839, 1828, 2868, 3127, 3325, 2584, 2415, 3265, 3198, 5845],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 7000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
