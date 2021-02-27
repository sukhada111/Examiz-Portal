<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php

include('header.php');
include('sidebar.php');

?>
 <style>
     .btn{
         background-color:#48d1cc;
         color:white;
     }
     .card:hover{
     transform: scale(1.02);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
 </style>

<div class="container" align="center">

<h2>Subscribed Exams:</h2>
<br>
<div class="row">
<div class="col-sm-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title">Exam name</h5>
        <p class="card-text">Subject: </p>
        <p class="card-text">Date: </p>
        
        <a href="#" class="btn">Know more</a>
      </div>
    </div>
  </div>
<div class="col-sm-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title">Exam name</h5>
        <p class="card-text">Subject: </p>
        <p class="card-text">Date: </p>
        
        <a href="#" class="btn">Know more</a>
      </div>
    </div>
  </div>
</div>
</div>