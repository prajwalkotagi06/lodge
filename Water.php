<?php
include 'sidebar.php';
?>


<style>
    .light{
        margin-left: 150px;
    }
    .datatable{
        margin-top: 80px;
        margin-left: 150px;
        width: 1300px;

    }
</style>
<div class="light">
    <h3 style="margin-top: 20px;">Water Bill</h3>
    <div class="row">
    <div class="col-4" style="margin-left: 70px; margin-top: 60px; display: block;">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control"  placeholder="Bill no">
                            <label>Bill no</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control"  placeholder="Item">
                            <label>Item</label>
                        </div>
                        <button type="button" class="btn btn-primary">submit</button> 
                        
                        
            </div>
        <div class="col-4" style="margin-left: 70px; margin-top: 80px; display: block;">
        <div class="form-floating mb-3">
                            <input type="text" class="form-control"  placeholder="Price">
                            <label>Price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control"  placeholder="Date">
                            <label>Date</label>
                        </div>
                         
            </div>
            
        </div>
</div>
<div class="datatable">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Bill no</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td>Washing water</td>
      <td>500</td>
      <td>20/10/2022</td>
      <td>paid</td>
    </tr>
  </tbody>
</table>
</div>