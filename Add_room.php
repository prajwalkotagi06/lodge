<?php
include 'sidebar.php';
?>

<div class="row" style="margin-left: 150px;">
    <h3 style="margin-top: 40px;">Add Room</h3>
    <div class="col-8" style="margin-left: 70px; margin-top: 60px; display: block;">
        <div class="form-floating mb-3">
            <input type="text" class="form-control"  placeholder="Room no">
            <label>Room no</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Beds</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label>Bed</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control"  placeholder="Rent">
            <label>Rent</label>
        </div>
        <button type="button" class="btn btn-primary">submit</button> 
    </div>     
</div>