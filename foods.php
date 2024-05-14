<?php include "partials/header.php" ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." autocomplete="off" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
                $sql = mysqli_query($conn, "SELECT * FROM food");
                if(mysqli_num_rows($sql) > 0){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <img src="uploads/<?php echo $row['image_name'] ?>"  class="img-responsive img-curve" style="width:110px;height:110px;object-fit:cover">
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $row['title'] ?></h4>
                            <p class="food-price">$<?php echo $row['price'] ?></p>
                            <p class="food-detail">
                                <?php echo $row['description'] ?>
                            </p>
                            <br>

                            <a href="order.php?food_id=<?php echo $row['unique_id'] ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    <?php
                    }
                }else{

                    echo "<h2> No food Found </h2>";
                }

            ?>
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

   
<?php  include_once "partials/footer.php" ?>