var $ = jQuery.noConflict();
$(document).ready(function(){
  $.ajax({
    url: "/src/leads-vs-sold.php",
    type: "GET",
    success: function(data){
      // console.log(data);

      var leads = [];
      var sold = [];
      var month = [];
      data = JSON.parse(data);
      for(var i in data) {
        month.push(data[i].month);
        leads.push(data[i].leads);
        sold.push(data[i].sold);
      }

      var chartdata = {
        labels: leads,
        datasets: [
          {
            label: "sold",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(21, 115, 115, 0.55)",
            borderColor: "darkgrey",
            pointHoverBackgroundColor: "#fefefe",
            pointHoverBorderColor: "#f9f9f9",
            data: sold
          },{
            label: "leads",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(255, 106, 0, 0.55)",
            borderColor: "darkgrey",
            pointHoverBackgroundColor: "#fefefe",
            pointHoverBorderColor: "#f9f9f9",
            data: leads
          }
          
        ]
      }

      var ctx = $("#mycanvas");
      var LineGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        options: {
          scales: {
            xAxes: [
              { stacked: true,barThickness: 150, labels: month,
              ticks: {beginAtZero: true }
            }],
            yAxes: [{ stacked: true }]
          },
          showTooltips: false,
          onAnimationComplete: function () {
            var ctx = this.chart.ctx;
            ctx.font = this.scale.font;
            ctx.fillStyle = this.scale.textColor
            ctx.textAlign = "center";
            ctx.textBaseline = "bottom";

            this.datasets.forEach(function (dataset) {
                dataset.bars.forEach(function (bar) {
                    ctx.fillText(bar.value, bar.x, bar.y - 5);
                });
            })
          }
        }
      })
    },
    error: function(data){
      console.log("Error" + data);
    }
  })
});