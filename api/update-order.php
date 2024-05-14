<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Order</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['order_id'])){
                        $id = $_GET['order_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM orders WHERE id = $id");
                        $order = mysqli_fetch_assoc($sql);
                    }

                    ?>
                     <form action="" method="POST" id="update-order-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Food</label>
                                <input class="form-control" name="food" value="<?php echo $order['food']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" value="<?php echo $order['price']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" name="qty" value="<?php echo $order['qty']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Total</label>
                                <input class="form-control" name="total" value="<?php echo $order['price'] * $order['qty']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="" class="form-control">
                                    <option <?php if($order['status']=='Ordered'){echo "selected";}  ?> value="Ordered" >Ordered</option>
                                    <option <?php if($order['status']=='On Delivery'){echo "selected";}  ?> value="On Delivery">On Delivery</option>
                                    <option <?php if($order['status']=='Delivered'){echo "selected";}  ?> value="Delivered">Delivered</option>
                                    <option  <?php if($order['status']=='Cancelled'){echo "selected";}  ?> value="Cancelled">Cancelled</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Customer Name</label>
                                <input class="form-control" name="customer_name" value="<?php echo $order['customer_name']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Customer Contact</label>
                                <input class="form-control" name="customer_contact" value="<?php echo $order['customer_contact']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Customer Email</label>
                                <input class="form-control" name="customer_email" value="<?php echo $order['customer_email']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Customer Address</label>
                                <input class="form-control" name="customer_address" value="<?php echo $order['customer_address']; ?>"/>
                            </div>


                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Order" id="update-order"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $order['id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>