<?php
include 'sidebar.php';
?>
<style>
    .freshup{
        margin-left: 180px;
        margin-top: 30px;
    }
    .form1{
        margin-left: 100px;
        margin-top: 20px;
    }
    .form1 input{
        width: 1000px;
        margin-bottom: 20px;
        height: 30px;
    }
    .form1 button{
        margin-bottom: 20px;
        margin-top: 20px;
        width: 200px;
        height: 35px;
    }
</style>
<div class="freshup">
    <h1>Freshup</h1>
    <div class="form1">
        <form action="">
        <div class="mb-3">
                <label  class="form-label">Bill no</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Other</label>
                <input type="date" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Total</label>
                <input type="time" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Payment type</label>
                <input type="text" class="form-control" >
            </div>
            <button type="button" class="btn btn-info">Submit</button>
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>