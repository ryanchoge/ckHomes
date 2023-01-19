
<?php require view_path('partials/header'); ?>


<div class="container shadow-sm col-lg-5 col-md-6 mt-5 p-2">
    <form action="" method="post">
        <div>
           <center><h3>
            <i class="fa fa-user"></i> </h3>
            <h3>CareTaker Login</h3>
        
            <?= esc(APP_NAME) ?>
            
    
            </center> 
            <br>
        </div>
        <div class="input-group mb-3">
            
            <input type="text" name="caretaker_id" class="form-control" placeholder="Caretaker ID"  autofocus>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <button class="btn btn-primary">Login</button>
        </div>
        
    </form>



</div>


<?php require view_path('partials/footer'); ?>
