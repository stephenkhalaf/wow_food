<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>orders</h2>   
                </div>
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Food</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Customer Name</th>
                                    <th>Customer Contact</th>
                                    <th>Customer Email</th>
                                    <th>Customer Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM orders ORDER BY id DESC");
                                    $id = 1;
                                    if(mysqli_num_rows($sql) > 0){
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "
                                            <tr>
                                            <td>$id</td>
                                            <td>".$row['food']."</td>
                                            <td>".$row['price']."</td>
                                            <td>".$row['qty']."</td>
                                            <td>".$row['qty'] * $row['price'] ."</td>
                                            <td>".$row['order_date']."</td>
                                            <td>".$row['status']."</td>
                                            <td>".$row['customer_name']."</td>
                                            <td>".$row['customer_contact']."</td>
                                            <td>".$row['customer_email']."</td>
                                            <td>".$row['customer_address']."</td>
                                            <td>
                                                <a href='update-order.php?order_id=".$row['id']."' class='btn btn-success' style='margin:10px 0 ' >Update</a>
                                                <a href='php/delete.php?order_id=".$row['id']."' class='btn btn-danger'>Delete</a>
                                            </td>
                                            </tr>
                                            
                                            ";
                                            $id++;
                                        };
                                    }else{
                                        echo "<div class='alert alert-danger text-center'>
                                                <strong>No Data Found</strong>
                                             </div>";
                                    }

                                ?>
                            </tbody>
                        </table>
                </div>
            </div>


            
        </div>
    </div>
<?php  include_once "./partials/footer.php"?>