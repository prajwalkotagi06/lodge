<?php
include 'sidebar.php';
?>
<style>
    .heading{
        margin-top: 40px;
        margin-left: 150px;
        display: flex;
    }
    .heading h1{
        margin-top: 20px;

    }
    .heading .btn1{
        margin-top: 20px;
        float: right;
        margin-left: 900px;
    }
    .heading .btn1 a{
        color: white;
        text-decoration: none;
    }
    .data{
      width: 1300px;
      margin-left: 150px;
    }
</style>
<div class="heading">
    <h3>Employee</h3>
    <div class="btn1">
        <button type="button" class="btn btn-success"><a href="add_employee.php">Add</a></button>
        <button type="button" class="btn btn-success"><a href="add_employee_sal.php">Add Sal</a></button>
    </div>
</div>
<div class="data">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>