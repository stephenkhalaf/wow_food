<?php include "partials/header.php" ?>
    <!-- fOOD sEARCH Section Starts Here -->
    <?php
    if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($conn,$_POST['search']);
    }

    ?>
    <section class="food-search text-center">
        <div class="container">
        <h2>Foods on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2> 

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <?php
                if(isset($_POST['search'])){
                    $search = mysqli_real_escape_string($conn,$_POST['search']);
                    $sql = mysqli_query($conn, "SELECT * FROM food WHERE title LIKE '%$search%' OR description LIKE '%$search%'");
                    if(mysqli_num_rows($sql) > 0){
                        while($row=mysqli_fetch_assoc($sql)){
                            ?>
                            <div class="food-menu-box">
                                <div class="food-menu-img">
                                    <img src="uploads/<?php echo $row['image_name'] ?>" alt="" class="img-responsive img-curve">
                                </div>

                                <div class="food-menu-desc">
                                    <h4><?php echo $row['title'] ?></h4>
                                    <p class="food-price">$<?php echo $row['price'] ?></p>
                                    <p class="food-detail">
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <br>

                                    <a href="#" class="btn btn-primary">Order Now</a>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                        echo "<h2>Nothing is found on  <a href='# class='text-white'>$search</a></h2>";
                    }
                    
                }
             ?>

            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->


<?php  include_once "partials/footer.php" ?>