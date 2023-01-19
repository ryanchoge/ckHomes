<?php require view_path('partials/header'); ?>
       <div class="container-fluid border rounded p-2 m-2   col-lg-4 mx-auto">
            <form method="post" enctype="multipart/form-data" >
                <center>
            <h5 class="text-primary "> <i class="fa fa-hamburger"></i> Add Tenant</h5>
                 <?php if(!empty($errors['tenant_exist']) ): ?>
                <div class="text-danger"><?=($errors['tenant_exist'])?></div>
                <?php endif;?>
            </center>
                <div class="mb-3 ">
                    
                    <label for="TenantFormControlInput1" class="form-label">Tenant Name</label>
                    <input name="tenant_name" type="text" class="form-control <?= !empty($errors['description']) ?'border-danger':''?>" id="TenantFormControlInput1" placeholder="Tenants Full Names" autofocus >
                    <?php if (!empty($errors['description'])) :?>
                    <small class="text-danger"><?=$errors['description']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="FormControlInput1" class="form-label">Tenant ID<small class="text-muted"></small></label>
                    <input name="tenant_id" type="text" class="form-control <?= !empty($errors['']) ?'border-danger':''?>" id="FormControlInput1" placeholder="Tenants Id number " autofocus >
                    <?php if (!empty($errors[''])) :?>
                    <small class="text-danger"><?=$errors['']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="FormControlInput1" class="form-label">Phone Number<small class="text-muted"></small></label>
                    <input name="phone_number" type="text" class="form-control <?= !empty($errors['']) ?'border-danger':''?>" id="FormControlInput1" placeholder="Tenant Phone number " autofocus >
                    <?php if (!empty($errors[''])) :?>
                    <small class="text-danger"><?=$errors['']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="FormControlInput1" class="form-label">Apartment<small class="text-muted"></small></label>
                    <input name="apartment" type="text" class="form-control <?= !empty($errors['']) ?'border-danger':''?>" id="FormControlInput1" placeholder="Apartment" autofocus >
                    <?php if (!empty($errors[''])) :?>
                    <small class="text-danger"><?=$errors['']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="FormControlInput1" class="form-label">House Name<small class="text-muted"></small></label>
                    <input name="house_name" type="text" class="form-control <?= !empty($errors['']) ?'border-danger':''?>" id="FormControlInput1" placeholder="Apartment" autofocus >
                    <?php if (!empty($errors[''])) :?>
                    <small class="text-danger"><?=$errors['']?></small>
                    <?php endif;?>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Rent</span>
                    <input  name="rent" type="number" class="form-control <?= !empty($errors['qty']) ?'border-danger':''?>" value="0" step="500" splaceholder="Quantity" aria-label="Quantity">
                    <span class="input-group-text">Deposit<small class="text-muted">(All Inclusive)</small></span>
                    <input  name="deposit" type="number" class="form-control <?= !empty($errors['amount']) ?'border-danger':''?>" value="0" step="500" placeholder="Amount" aria-label="price">
                </div>
                <?php if (!empty($errors['rent'])) :?>
                    <small class="text-danger"><?=$errors['rent']?></small>
                    <?php endif;?>
                    <?php if (!empty($errors['deposit'])) :?>
                    <small class="text-danger"><?=$errors['deposit']?></small>
                    <?php endif;?>
                    <br>
                
                <br>
                
                    <button class="btn btn-primary float-end" >Save</button>
                    <a href="index.php?pg=caretaker-profile&tab=tenant">
                    <button type="button"class="btn btn-danger">Cancel</button>
                    </a>
        </form>
    </div>
<?php require view_path('partials/footer'); ?>