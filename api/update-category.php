<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Category</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['category_id'])){
                        $id = $_GET['category_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM categories WHERE unique_id = $id");
                        $category = mysqli_fetch_assoc($sql);
                    }

                    ?>
                     <form action="" method="POST" id="update-category-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="<?php echo $category['title']; ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Old Image</label>
                                <br>
                                <img src="../uploads/<?php echo $category['image_name']; ?>" alt="" width="150" height="150">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input  name="image"  type="file" />
                            </div>

                            <div class="form-group">
                                <label>Featured</label>
                                <input  name="featured" value="Yes" type="radio" <?php echo $category['featured']=='Yes' ? 'checked':''  ?>/> Yes
                                <input  name="featured" value="No" type="radio"  <?php echo $category['featured']=='No' ? 'checked':''  ?>/> No
                            </div>

                            <div class="form-group">
                                <label>Active</label>
                                <input  name="active" value="Yes" type="radio" <?php echo $category['active']=='Yes' ? 'checked':''  ?>/> Yes
                                <input  name="active" value="No" type="radio" <?php echo $category['active']=='No' ? 'checked':''  ?>/> No
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Category" id="update-category"/>
                            </div>

                            <input type="hidden" name="unique_id" value="<?php echo $category['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>