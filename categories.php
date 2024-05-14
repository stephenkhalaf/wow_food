<?php include "partials/header.php" ?>
    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>


            <?php
                $sql = mysqli_query($conn, "SELECT * FROM categories WHERE  active= 'Yes'");
                if(mysqli_num_rows($sql) > 0){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>
                    <a href="category-foods.php?category_id=<?php echo $row['unique_id'] ?>">
                    <div class="box-3 float-container">
                        <img src="uploads/<?php echo $row['image_name'] ?>" alt="Pizza" class="img-responsive img-curve size">

                        <h3 class="float-text text-white"><?php echo $row['title'] ?></h3>
                    </div>
                    </a>
                    <?php
                    }
                }else{

                    echo "<h2> No categories Found </h2>";
                }

            ?>

           

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

<?php  include_once "partials/footer.php" ?>