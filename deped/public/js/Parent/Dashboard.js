

      var ctxbar = $("#myChartbar");
      var ctxline = $("#myChartline");
      var ctxpie = $("#myChartpie");

      var myChartbar = new Chart(ctxbar, {
          type: 'bar',
          data: {
              labels: ["Administration", "Clinic", "Councelor", "Finance", "Human Resources", "Library"],
              datasets: [{
                  label: 'Department Users',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  xAxes: [{
                      ticks: {
                          stepSize: 1,
                          min: 0,
                          autoSkip: false,
                          fontSize: 14
                      }
                  }],
                  yAxes:[{
                      ticks: {
                          beginAtZero: true,
                          fontSize: 14
                      }
                  }]
              }
          }
      });

      var myChartline = new Chart(ctxline, {
          type: 'line',
          data: {
              labels: ["Fist Grading", "Second Grading", "Third Grading", "Fourth Grading"],
              datasets: [{
                  label: 'John Ivan',
                  data: [96, 95, 97, 94],
                  backgroundColor: 'rgba(54, 162, 235, 0.2)',
                  borderColor: 'rgba(54, 162, 235, 0.2)',
                  borderWidth: 1,
                  pointBackgroundColor: 'rgba(54, 162, 235, 0.2)'
              },{
                  label: 'John Mayson',
                  data: [98, 96, 96, 97],
                  backgroundColor: 'rgba(255, 99, 132, 0.2)',
                  borderColor: 'rgba(255, 99, 132, 0.2)',
                  borderWidth: 1,
                  pointBackgroundColor: 'rgba(255, 99, 132, 0.2)'
              },{
                  label: 'John Benson',
                  data: [99, 100, 98, 99],
                  backgroundColor: 'rgba(255, 206, 86, 0.2)',
                  borderColor: 'rgba(255, 206, 86, 0.2)',
                  borderWidth: 1,
                  pointBackgroundColor: 'rgba(255, 206, 86, 0.2)'
              },{
                  label: 'John Xavier',
                  data: [95, 94, 93, 95],
                  backgroundColor: 'rgba(75, 192, 192, 0.2)',
                  borderColor: 'rgba(75, 192, 192, 0.2)',
                  borderWidth: 1,
                  pointBackgroundColor: 'rgba(75, 192, 192, 0.2)'
              }]
          },
           options: {
              scales: {
                  xAxes: [{
                      ticks: {
                          stepSize: 1,
                          min: 0,
                          autoSkip: false,
                          fontSize: 14
                      }
                  }],
                  yAxes:[{
                      ticks: {
                          beginAtZero: false,
                          fontSize: 14
                      }
                  }]
              },
                title: {
                          display: false,
                          text: 'Average Grade Quarterly'
                      },
          }
      });


      var myPieChart = new Chart(ctxpie,{
          type: 'pie',
          data: {
                labels: ['Science','English','Math','Physics','Chemistry','Biology',
                          'Araling Panlipunan','Physical Education','Lunch Break','TLE'],
                datasets: [{
                    data: [1, 2, 5, 2, 3, 1, 3, 4, 20, 4],
                    backgroundColor: [
                      '#FF0000', '#FF8000', '#FFFF00', '#80FF00', '#00FF00', '#00FF80', 
                      '#00FFFF', '#0080FF', '#0000FF', '#8000FF', '#FF00FF', '#FF0080'
                    ],
                    borderColor: [
                       '#FF0000', '#FF8000', '#FFFF00', '#80FF00', '#00FF00', '#00FF80', 
                      '#00FFFF', '#0080FF', '#0000FF', '#8000FF', '#FF00FF', '#FF0080'
                    ],
                    hoverBackgroundColor: [
                       '#FF0000', '#FF8000', '#FFFF00', '#80FF00', '#00FF00', '#00FF80', 
                      '#00FFFF', '#0080FF', '#0000FF', '#8000FF', '#FF00FF', '#FF0080'
                    ],
                    hoverBorderWidth: 5,
                    borderWidth: 1
                }], 
                // These labels appear in the legend and in the tooltips when hovering different arcs
               
            }, options: {
                  title: {
                            display: true,
                            text: 'John Ivan'
                        }, 
                  legend: { 
                    display: true 
                  }
            }
      });

