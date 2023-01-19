<?php require view_path('partials/header') ?>
<div class="col-5 col-lg-5 mx-auto p-2 shadow-sm">
    <form action="" method="post">
        <center><div> <h3><i class="fa fa-user"></i> Add Landlord</h3> </div></center>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Landlord Name</label>
            <input type="text" name="landlord_name"class="form-control" id="exampleInputEmail1"  autofocus>
            <small class="text-danger"><?= $errors['landlord_name'] ?></small>
        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Landlord ID</label>
            <input type="text" name="landlord_id" class="form-control" id="exampleInputEmail1" >
        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" ">
        
        </div>
        
        
        <button  class="btn btn-primary float-end">Add</button>
        <a href="index.php?pg=landlord-profile&tab=landlord-list">
            <button type="button" class="btn btn-danger">Cancel</button>
        </a>
        
    </form>

</div>