<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Food</h2>   
                </div>
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                <div  id="add-food-error">
                </div>
                <form action="" method="POST" id="add-food-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" min='1' type="number"/>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id=""></textarea>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input name="image" type="file" />
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
                                <label>Featured </label>
                                <input  name="featured" type="radio" value="Yes"/> Yes
                                <input  name="featured" type="radio" value="No"/> No
                            </div>

                            <div class="form-group">
                                <label>Active </label>
                                <input  name="active" type="radio" value="Yes"/> Yes
                                <input  name="active" type="radio" value="No"/> No
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add Food" id="add-food"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>
<?php  include_once "./partials/footer.php"?>