<?php 
require view_path('partials/header');
?>



<div class="container-fluid border col-lg-5 col-md-6 mt-5 p-2 shadow-sm">
        
        <form action="" method="POST">
        <center><h3><i class="fa fa-user "></i></h3>
            <h3>User login</h3>
            <div>
                <?= APP_NAME ?>
            </div>
            <div >
                <?php if (!empty($errors['wrong'])): ?>
                    <small class="text-danger"><?= $errors['wrong'] ?></small>
                <?php endif; ?>
            </div>
                
        </center>
        <br>
        
        <div class="mb-3">
            
            <input autocomplete="off" value="<?=set_value('tenant_id') ?> " type="number" name="tenant_id" class="form-control <?= !empty($errors['tenant_id']) ?'border-danger':''?>" placeholder="Tenant id" aria-label="tenant_id" autofocus  aria-describedby="basic-addon1">
            <?php if(!empty($errors['tenant_id'])) :?>
                <small class="text-danger "><?=$errors['tenant_id'] ?></small>
            <?php endif; ?>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" name="password"class="form-control <?= !empty($errors['password']) ?'border-danger':''?>" placeholder="Password"  aria-describedby="basic-addon1">
            <?php if(!empty($errors['password'])) :?>
                <small class="text-danger col-12 "><?= $errors['password'] ?></small>
            <?php endif; ?>
        </div>
        <br>
        <div class="container-fluid d-flex justify-content-center">
            <button class= "btn btn-primary">LOG IN</button>
        </div>
    </form>  
        

    


</div>



<?php 
require view_path('partials/footer');
?>