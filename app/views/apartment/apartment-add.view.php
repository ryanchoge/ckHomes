<?php require view_path('partials/header') ?>
<div class="row">
    <form action="" method="post">
        
        <div class="container-fluid col-5 p-2 mt-5 shadow-sm">
            <center><div><h5><i class="fa fa-house"></i> Add Apartment</h2> </div>
                <div> <?= esc(APP_NAME) ?></div>
            </center> 
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Apartment Name</label>
                <input type="text" name="apartment_name"class="form-control" id="exampleFormControlInput1" placeholder="Apartment Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="Location">
            </div>
            <div>
                
                <button class="btn btn-primary float-end">Add</button>
                <a href="index.php?pg=landlord-profile&tab=apartment">
                    <button type="button" class="btn btn-danger">Cancel</button>
                </a>
                
            </div>
        
        
        </div>
    </form>
    



</div>