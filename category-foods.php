<?php include "partials/header.php" ?>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php
                if(isset($_GET['category_id'])){
                    $category_id = $_GET['category_id'];
                    $sql = mysqli_query($conn, "SELECT * FROM categories WHERE unique_id = $category_id");
                    $category = mysqli_fetch_assoc($sql);
                }

            ?>  
            
            <h2>Foods on <a href="#" class="text-white">"<?php echo $category['title'] ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
                if(isset($_GET['category_id'])){
                    $category_id = $_GET['category_id'];

                $sql = mysqli_query($conn, "SELECT * FROM food WHERE category_id = $category_id");
                if(mysqli_num_rows($sql) > 0){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $row['title'] ?></h4>
                            <p class="food-price">$<?php echo $row['price'] ?></p>
                            <p class="food-detail">
                            <?php echo $row['description'] ?>
                            </p>
                            <br>

                            <a href="order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    <?php
                    }
                }else{

                    echo "<h2> No Food Found </h2>";
                }
            }else{
                header('Location: index.php');
            }

            ?>
            
            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

<?php  include_once "partials/footer.php" ?>