<?php
include 'sidebar.php';
?>

<style>
    .details{
        width: 200px;
        height: 200px;
        background-color: #4DEFEF;
        border-radius: 20px;
        cursor: pointer;

    }
    .details p{
        text-align: center;
        margin-top: 85px;
        text-decoration: none;
    }
    .details p a{
        text-decoration: none;
        color: black;
    }
    .expenditure{
        width: 200px;
        height: 200px;
        background-color: #4DEFEF;
        border-radius: 20px;
        margin-left: 100px;
        cursor: pointer;
    }
    .expenditure p{
        text-align: center;
        margin-top: 85px;
        /* list-style-type: none; */
    }
    .expenditure p a{
        text-decoration: none;
        color: black;

    }
</style>

<div class="container" style="margin-left: 200px; margin-top: 100px;">
    <div class="row">
        <div class="col-3 details">
            <p><a href="view_Details.php">Details</a></p>
        </div>
        <div class="col-3 expenditure">
            <p><a href="expenditure.php">expenditure</a></p>
        </div>
        <div class="col-3">
            
        </div>
        <div class="col-3">
            
        </div>
    </div>
</div>