<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Categories</h2>   
                </div>
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Category Image</th>
                                    <th>Featured</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM categories");
                                    $id = 1;
                                    if(mysqli_num_rows($sql) > 0){
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "
                                            <tr>
                                            <td>$id</td>
                                            <td>".$row['title']."</td>
                                            <td><img src='../uploads/".$row['image_name']."' /></td>
                                            <td>".$row['featured']."</td>
                                            <td>".$row['active']."</td>
                                            <td>
                                                <a href='update-category.php?category_id=".$row['unique_id']."' class='btn btn-success' >Update</a>
                                                <a href='php/delete.php?category_id=".$row['unique_id']."' class='btn btn-danger'>Delete</a>
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