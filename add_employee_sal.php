<?php
include 'sidebar.php';
?>
<style>
    .sal{
        margin-left: 150px;

    }
    .sal h4{
        margin-top: 50px;
    }
    .data{
        width: 900px;
    }
</style>
<div class="sal">
    <h4>Add Sallary</h4>
    <div class="form1">
        <form action="">
            <div class="row">
                <div class="col-4">
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" placeholder="ID">
                    
                </div>
                <div class="mb-3">
                    <label  class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" placeholder="date">
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Sallary</label>
                    <input type="text" class="form-control" placeholder="Sallary">
                    
                </div>
                <div class="mb-3">
                    <label  class="form-label">Advance amount</label>
                    <input type="text" class="form-control" placeholder="Advance amount">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Payment status</label>
                    <input type="text" class="form-control" placeholder="Payment Status ">
                </div>
                <button class="btn btn-info">Submit</button>
                </div>
                <div class="col-8">
                <div class="data">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Month</th>
                        <th scope="col">Sallary</th>
                        <th scope="col">Advance</th>
                        <th scope="col">Payment status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Ram</td>
                        <td>02/06/2022</td>
                        <td>12000</td>
                        <td>6000</td>
                        <td>cash</td>
                        </tr>
                        
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
