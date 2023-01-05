<?php
include 'sidebar.php';
?>
<style>
    .form1{
        width: 1350px;
        margin-left: 150px;
        margin-top: 50px;
    }
</style>

<div class="form1">
    <h4>Employee Details</h4>
    <table class="table" id="myTable">
    <thead class=" table-primary">
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Phone no</th>
        <th scope="col">Proof</th>
        <th scope="col">Proof no</th>
        <th scope="col">Joining Date</th>
        <th scope="col">Sallary</th>
        <th scope="col">Payment type</th>
        <th scope="col">Total</th>
        <!-- <th scope="col">balance</th> -->
        <th scope="col">Status</th>
        <!-- <th scope="col"></th> -->
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Mark</td>
        <td>Belgaum</td>
        <td>Ram@gmail.com</td>
        <td>6352859674</td>
        <td>Adhar</td>
        <td>1220102010</td>
        <td>12/02/2023</td>
        <td>12000</td>
        <td>Cash</td>
        <td>12000</td>
        <!-- <td>6000</td> -->
        <td>paid</td>
        </tr>
    </tbody>
    </table>
</div>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php
include 'footer.php';
?>