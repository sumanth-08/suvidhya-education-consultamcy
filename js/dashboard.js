/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace()

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'NEW COURSES EVERY YEAR',
        'PROFESSIONAL INSTRUCTORS',
        'LIVE SESSIONS EVERY MONTH',
        'REGISTERD STUDENT'        
      ],
      datasets: [{
        data: [
          '18',
          '60',
          '34',
          '96',
          '50',
          '60',
          '70',
          '80',
          '90',
          '100'
          
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
}())
