<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Category</h2>   
                </div>
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                <div  id="add-category-error">
                </div>
                <form action="" method="POST" id="add-category-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input name="image" type="file" />
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
                                <input class="btn btn-success" name="submit" type="submit" value="Add Category" id="add-category"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>
<?php  include_once "./partials/footer.php"?>