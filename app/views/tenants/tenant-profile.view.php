<?php 
require view_path('partials/header')
?>

<div class="container-fluid row ">
    <div class="col-lg-2 col-md-3 ">
        <table class="table">
        
            <tbody>
                <tr>
                <ul class="list-group">
                    <a href="index.php?pg=tenant-profile&tab=profile">
                        <li class="list-group-item <?= !$tab || $tab == 'profile' ? 'active' :'' ?>" > Dashboard</li>
                    </a>
                    
                    <a href="index.php?pg=tenant-profile&tab=rent-payment">
                        <li class="list-group-item <?= $tab == 'rent-payment' ? 'active' : '' ?>">Pay Rent</li>
                    </a>
                    <a href="index.php?pg=tenant-profile&tab=receipts">
                        <li class="list-group-item <?= $tab =='receipts' ? 'active' : '' ?>">Receipts</li>
                    </a>
                    
                    <a href="index.php?pg=tenant-profile&tab=complain">
                        <li class="list-group-item <?= $tab == 'complain' ? 'active' : '' ?> ">Complain</li>
                    </a>
                    <a href="index.php?pg=logout">
                        <li class="list-group-item">Logout</li>
                    </a>
                </ul>
                
                </tr>
                
            </tbody>
        </table>
    </div>
    <div class="border col shadow-lg" >
        <div class="" >
            <h3><?= strtoupper($tab) ?></h3>
        </div>
        <div class="row">
                <?php
                switch ($tab) {
                    case 'profile':
                        require view_path('tenants/tenant-profile-dashboard');
                        break;
                    
                    default:
                        # code...
                        break;
                }
                ?>
        </div>
        



    </div>
</div>
<?php require view_path('partials/footer');?>