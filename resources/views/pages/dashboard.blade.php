@extends('layouts/account')

@section('content')
<div>
  <h1>Dashboard</h1>
  <h6>This is your latest information</h6>
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <canvas id="myChart" width="400" height="200"></canvas>
      </div>
    </div>
    <div class="col-md-3">
      <div class="box projects-total">
        <h1>Projects Total </h1><span class="large-number">{{$numberOfProjects}}</span>
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script>

fetch('/account/projects-api/all')
  .then(response => response.json())
  .then(data => createChart(data));

  
function createChart(data){

  titlesArray = data.map( project=>{
    return project.title;
  });

  numberOfImagesPerProject = data.map( project=>{
    return project.numberOfImages;
  });


  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
  type: 'line',
  data: {
  labels: titlesArray,
  datasets: [{
  label: '# of Images',
  data: numberOfImagesPerProject,
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
  yAxes: [{
  ticks: {
  beginAtZero:true
  }
  }]
  }
  }
  });
}
  

</script>

@endsection



 
