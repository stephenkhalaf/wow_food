<?php include "partials/header.php" ?>
<?php
if(isset($_GET['food_id'])){
    $food_id = $_GET['food_id'];
    $sql = mysqli_query($conn, "SELECT * FROM food WHERE unique_id = $food_id");
    $food = mysqli_fetch_assoc($sql);
}else{
    header('Location: index.php');
}

?>
    <!-- fOOD sEARCH Section Starts Here -->
    <div  id="order-error">
        </div>
    <section class="food-search">
        <div class="container">
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form  class="order" method="POST" id="order-form">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img" >
                        <img src="uploads/<?php echo $food['image_name'] ?>" alt="" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $food['title'] ?></h3>
                        <input type="hidden" value="<?php echo $food['title'] ?>" name="food">

                        <p class="food-price">$<?php echo $food['price'] ?></p>
                        <input type="hidden" name="price" value="<?php echo $food['price'] ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Vijay Thapa" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary" id="order">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
    <script src="Javascript/order.js"></script>
    <?php  include_once "partials/footer.php" ?>