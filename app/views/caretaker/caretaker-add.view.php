<?php require view_path('partials/header') ?>
<div class="col-5 col-lg-5 mx-auto p-2 shadow-sm">
    <form action="" method="post">
        <center><div> <h3><i class="fa fa-user"></i> Add Caretaker</h3> </div>
        <div class="text-danger"><?php if (!empty($errors['existance']) ):?>
            
            <small><?= ($errors['existance'])  ?> </small>
            <?php endif;?>
        </div></center>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label <?php !empty($errors['caretaker_name']) ? 'border-danger' : '' ?>">Caretaker Name</label>
            <input type="text" name="caretaker_name" class="form-control" id="exampleInputEmail1"  autofocus>
            <small class="text-danger"><?php !empty($errors['caretaker_name'])?> </small>
        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label <?php !empty($errors['caretaker_name']) ? 'border-danger' : '' ?>">Caretaker ID</label>
            <input type="text" name="caretaker_id"class="form-control" id="exampleInputEmail1" >
            <small class="text-danger"><?php !empty($errors['caretaker_id'])?> </small>
        
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label <?php !empty($errors['phone_number']) ? 'border-danger' : '' ?>">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" >
            <small class="text-danger"><?php !empty($errors['phone_number'])?> </small>
        
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label <?php !empty($errors['apartment']) ? 'border-danger' : '' ?>">Apartment</label>
            
            <select name="apartment" class="form-control">
                <option value="">Select Apartment</option>
                
                
                
                 <?php 
                 $apartment = new Apartment;
                 $row =$apartment->query("SELECT * FROM apartment");
                 foreach ($row as $rows):?>
                    <option value="<?= $rows['apartment_name'] ?>" name="apartment"><?= $rows['apartment_name'] ?>
                </option>
                
                <?php endforeach; ?>
                
                 

                 
                
                
            </select>
        
        </div>
        <button  class="btn btn-primary float-end">Add</button>
        <a href="index.php?pg=landlord-profile&tab=caretaker">
            <button type="button" class="btn btn-danger">Cancel</button>
        </a>
        
    </form>

</div>