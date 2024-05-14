<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Food</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['food_id'])){
                        $id = $_GET['food_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM food WHERE unique_id = $id");
                        $food = mysqli_fetch_assoc($sql);
                    }

                    ?>
                     <form action="" method="POST" id="update-food-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="<?php echo $food['title']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" value="<?php echo $food['price']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" value="<?php echo $food['description']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Old Image</label>
                                <br>
                                <img src="../uploads/<?php echo $food['image_name'];  ?>" width="150" height="150" alt="">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input  name="image"  type="file" />
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" id="" class="form-control">
                                    <?php 
                                        $sql = mysqli_query($conn, "SELECT * FROM categories");
                                        if(mysqli_num_rows($sql) > 0){
                                            while($row = mysqli_fetch_assoc($sql)){

                                                ?>
                                                    <option value="<?php echo $row['unique_id'] ?>"><?php echo $row['title'] ?></option>
                                                <?php
                                            }
                                        }
                                        
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Featured</label>
                                <input  name="featured" value="Yes" type="radio" <?php echo $food['featured']=='Yes' ? 'checked':''  ?>/> Yes
                                <input  name="featured" value="No" type="radio"  <?php echo $food['featured']=='No' ? 'checked':''  ?>/> No
                            </div>

                            <div class="form-group">
                                <label>Active</label>
                                <input  name="active" value="Yes" type="radio" <?php echo $food['active']=='Yes' ? 'checked':''  ?>/> Yes
                                <input  name="active" value="No" type="radio" <?php echo $food['active']=='No' ? 'checked':''  ?>/> No
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Food" id="update-food"/>
                            </div>

                            <input type="hidden" name="unique_id" value="<?php echo $food['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>