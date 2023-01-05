<?php
include 'sidebar.php';
?>

<style>
    .employee{
        width: 200px;
        height: 200px;
        background-color: #4DEFEF;
        border-radius: 20px;
        cursor: pointer;

    }
    .employee p{
        text-align: center;
        margin-top: 85px;
        text-decoration: none;
    }
    .employee p a{
        text-decoration: none;
        color: black;
    }
    .details{
        width: 200px;
        height: 200px;
        background-color: #4DEFEF;
        border-radius: 20px;
        margin-left: 100px;
        cursor: pointer;
    }
    .details p{
        text-align: center;
        margin-top: 85px;
        /* list-style-type: none; */
    }
    .details p a{
        text-decoration: none;
        color: black;

    }
</style>

<div class="container" style="margin-left: 200px; margin-top: 100px;">
    <div class="row">
        <div class="col-3 employee">
            <p><a href="Employee_add.php">Employee</a></p>
        </div>
        <div class="col-3 details">
            <p><a href="Employee_Details.php">Details</a></p>
        </div>
        <div class="col-3">
            
        </div>
        <div class="col-3">
            
        </div>
    </div>
</div>