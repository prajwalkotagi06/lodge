<?php
    include 'sidebar.php';
?>

<style>
    .form1 span{
         margin-bottom: 50px; 
        padding-top: 20px;
    }
    .form1 input{
        width: 1050px;
        height: 35px;
        /* border-radius: 35px; */
        margin-bottom: 20px;
    }
    .form1 button{
        margin-bottom: 20px;
        margin-top: 20px;
        width: 200px;
        height: 35px;
    }
</style>
    <div class="form" style="margin-left: 150px;">
        <h1 style="font-size: 25px;  margin-top: 25px;">Booking</h1>
        <div class="form1" style="margin-top:20px; margin-left: 100px">
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Email ID</label>
                <input type="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone no</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Address</label>
                <input type="text" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Proof</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Proof no</label>
                <input type="text" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Proof attachment</label>
                <input type="file" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Deposite amount</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Room rent</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Check In date</label>
                <input type="date" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Check In Time</label>
                <input type="time" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Select Room</label>
                <input type="text" class="form-control" >
            </div>
            <button type="button" class="btn btn-info">Submit</button>
        </div>
    </div>
<?php
    include 'footer.php'
?>