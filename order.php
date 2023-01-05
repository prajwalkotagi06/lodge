<?php
include 'sidebar.php';
?>
<style>
    .food input{
        width: 250px;
    }
</style>
<!-- <div class="container"> -->
    <div class="row food">
        <div class="col-6" style="display: flex; margin-left: 200px;">
            <div class="col-3" style="margin-top: 80px; display: block;">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Table no">
                    <label>Table no</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Table no">
                    <label>Bill no</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Table no">
                    <label>Search Item</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Table no">
                    <label>Quantity</label>
                </div>
            </div>
            
            <div class="col-3" style="margin-left: 70px; margin-top: 80px; display: block;">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Room no">
                    <label>Room no</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Room no">
                    <label>Item</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Room no">
                    <label>Price</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Room no">
                    <label>Total</label>
                </div>
                <button type="button" class="btn btn-primary">submit</button>
                
        </div>
        <div class="col-6" style="margin-left: 100px; margin-top: 80px; width: 100%; ">
        <table class="table" >
            <thead style="background-color: #EF4BC1;">
                <tr>
                <th scope="col">Table.no</th>
                <th scope="col">Bill no</th>
                <th scope="col">Room no</th>
                <th scope="col">Item</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Order view</th>
                <th scope="col">Payment type</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    
                    <td>01</td>
                    <td></td>
                    <td>panner</td>
                    <td>2</td>
                    <td>100</td>
                    <td><!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        view
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 200px;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Order Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Bill no</p>
                                <span></span>
                                <p>Item</p>
                                <span></span>
                                <p>Quantity</p>
                                <span></span>
                                <p>price</p>
                                <span></span>
                                <p>GST</p>
                                <span></span>
                                <p>Total</p>
                                <span></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary" onclick="window.print()">E</button> -->
                            </div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td>online</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    
                    <td>01</td>
                    <td></td>
                    <td>panner</td>
                    <td>2</td>
                    <td>100</td>
                    <td><!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        view
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Order Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Bill no</p>
                                <span></span>
                                <p>Item</p>
                                <span></span>
                                <p>Quantity</p>
                                <span></span>
                                <p>price</p>
                                <span></span>
                                <p>GST</p>
                                <span></span>
                                <p>Total</p>
                                <span></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary" onclick="window.print()">E</button> -->
                            </div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td>online</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    
                    <td>01</td>
                    <td></td>
                    <td>panner</td>
                    <td>2</td>
                    <td>100</td>
                    <td><!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        view
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Order Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Bill no</p>
                                <span></span>
                                <p>Item</p>
                                <span></span>
                                <p>Quantity</p>
                                <span></span>
                                <p>price</p>
                                <span></span>
                                <p>GST</p>
                                <span></span>
                                <p>Total</p>
                                <span></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary" onclick="window.print()">E</button> -->
                            </div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td>online</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!-- </div> -->
    
</div>

