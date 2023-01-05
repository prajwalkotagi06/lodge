<?php
include 'sidebar.php';
?>
<style>
    .date{
        display: flex;
        margin-top: 50px;
        margin-left: 200px;
    }
    .date input{
        width: 500px;
        margin: 50px;
    }
    .data{
        margin-left: 150px;
        /* width: 100%; */
        margin-right: 20px;
        
    }
</style>
<div class="date">
    <input type="date" class="form-control" >
    <input type="date" class="form-control" >
</div>
<div class="data">
    <table class="table">
    <thead class=" table-primary">
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Phone no</th>
        <th scope="col">Room no</th>
        <th scope="col">Rent</th>
        <th scope="col">Proof</th>
        <th scope="col">Other</th>
        <th scope="col">Check In</th>
        <th scope="col">Check Out</th>
        <th scope="col">Total</th>
        <th scope="col">Payment type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Mark</td>
        <td>Belgaum</td>
        <td>Ram@gmail.com</td>
        <td>Angol</td>
        <td>6352859674</td>
        <td>5</td>
        <td>5000</td>
        <td>500</td>
        <td>2/02/2023</td>
        <td>5/02/2023</td>
        <td>5500</td>
        <td>Online</td>
        </tr>
        
        
    </tbody>
    </table>
</div>