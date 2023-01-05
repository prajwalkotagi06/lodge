<?php
include 'sidebar.php';
?>
<style>
    .expenses{
        margin-left: 150px;

    }
    .cont{
        width: 252px;
        height: 183px;
        border-radius: 30px;
        background-color:#800080;
        cursor: pointer;
    }
    .cont p{
        text-align: center;
        padding-top: 80px;
        color: white;
        
        
    }
    .light a{
        text-decoration: none;
    }
    
</style>
<div class="expenses">
    <h2>Expenses</h2>
    <div class="container">
        <div class="row m-5">
            <div class="col-4 light">
                <a href="light.php">
                    <div class="cont">
                        <p>Light Bill</p>
                    </div>
                </a>
            </div>
            <div class="col-4 light">
                <a href="Tv.php">
                    <div class="cont">
                        <p>TV Bill</p>
                    </div>
                </a>
            </div>
            <div class="col-4 light">
                <a href="Food.php">
                    <div class="cont">
                        <p>FOOD Bill</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-4 light">
                <a href="Water.php">
                    <div class="cont">
                        <p>Water Bill</p>
                    </div>
                </a>
            </div>
            <div class="col-4 light">
                <a href="Cleaning.php">
                    <div class="cont">
                        <p>CLEANING Bill</p>
                    </div>
                </a>
            </div>
            <div class="col-4 light">
                <a href="phone.php">
                    <div class="cont">
                        <p>PHONE Bill</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-4 light">
                <a href="Plumber.php">
                    <div class="cont">
                        <p>PLUMBER Bill</p>
                    </div>
                </a>
            </div>
            <div class="col-4 light">
                <a href="Carpenter.php">
                    <div class="cont">
                        <p>CARPENTER Bill</p>
                    </div>
                </a>
            </div>
            <div class="col-4 light">
                <a href="Painting.php">
                    <div class="cont">
                        <p>PAINTING Bill</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>