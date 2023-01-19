
<?php require view_path('partials/header'); ?>


<div class="container-fluid border col-lg-5 col-md-6 mt-5 p-2 shadow-sm">
        
    <form action="" method="POST">
        <center><h3><i class="fa fa-user "></i></h3>
            <h3>Landlord login</h3>
            <div>
                <?= APP_NAME ?>
            </div>
        </center>
        <br>
        
        <div class="mb-3">
            
            <input  autocomplete="off" value="<?= set_value('landlord_id') ?>" type="text" name="landlord_id" class="form-control <?= !empty($errors['landlord_id']) ?'border-danger':''?>" placeholder="ID Number" aria-label="email" autofocus  aria-describedby="basic-addon1">
            <?php if(!empty($errors['landlord_id'])) :?>
                <small class="text-danger "><?=$errors['landlord_id'] ?></small>
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


<?php require view_path('partials/footer'); ?>
