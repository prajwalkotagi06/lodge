<?php
include 'sidebar.php';
?>
<style>
    .exe{
        width: 300px;
        /* position: relative; */
        margin-left: 40%;
        margin-top: 70px;
        /* justify-content: center; */
        /* align-items: center; */
    }
    .data{
        margin-left: 100px;
        /* width: 100%; */
        margin-right: 20px;
        margin-top: 50px;
        /* height: 600px; */
        
        
    }
</style>

<div class="exe">
    <input type="date" class="form-control">
</div>


<div class="data">
<table class="table" id="dtBasicExample">
  <thead>
    <tr class="table-primary">
      <th scope="col">Month</th>
      <th scope="col">Labor Sal</th>
      <th scope="col">Total rent</th>
      <th scope="col">Paid amt</th>
      <th scope="col">Total expenses</th>
      <th scope="col">Total Income</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
</div>
<script>
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>