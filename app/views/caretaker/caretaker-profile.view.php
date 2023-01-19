<?php require view_path('partials/header');?>
<center><h4><i class="fa fa-user-shield"></i> Caretaker</h4></center>

<div class="container-fluid row">

        
        <div class = "col-lg-2 col-md-3 col-sm-4">
                    <ul class="list-group">
                        <a href="index.php?pg=caretaker-profile&tab=profile">
                            <li class="list-group-item <?= !$tab || $tab=='profile' ? 'active' : '' ?>"><i class="fa fa-user"></i> Profile</li>
                        </a>
                        <a href="index.php?pg=caretaker-profile&tab=dashboard">
                            <li class="list-group-item <?= !$tab || $tab=='dashboard' ? 'active' : '' ?>"><i class="fa fa-th-large"></i> Dashboard</li>
                        </a>
                        <a href="index.php?pg=caretaker-profile&tab=house"> 
                            <li class="list-group-item <?= $tab =='house' ? 'active' : '' ?>"><i class="fa fa-hamburger"></i> House List</li>
                        </a>
                       
                        <a href="index.php?pg=caretaker-profile&tab=tenant">
                            <li class="list-group-item <?= $tab =='tenant' ? 'active' : '' ?>"><i class="fa fa-users"></i> Tenant list</li>
                        </a>
                        <a href="index.php?pg=caretaker-profile&tab=complain">
                            <li class="list-group-item <?= $tab =='complain' ? 'active' : '' ?>"><i class="fa fa-users"></i> Complain</li>
                        </a>
                        
                        <a href="index.php?pg=logout"> 
                            <li class="list-group-item "><i class="fa fa-sign-out-alt"></i> Logout</li>
                        </a>
                        
                        
                        </ul>
        </div>
        <div class = "border col"><h4><?= strtoupper($tab) ?></h4>
            <div class="row">
                <?php
                    switch ($tab) {
                        case 'profile':
                            require view_path('caretaker/caretaker-profile-dashboard');
                            break;
                        
                        case 'house':
                            require view_path('house/house');
                            break;
                        
                        case 'tenant':
                                require view_path('tenants/tenant');
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