<?php require view_path('partials/header');?>
<center><h4><i class="fa fa-user-shield"></i> landlord</h4></center>

<div class="container-fluid row">

        
        <div class = "col-12 col-lg-2 col-md-3 col-sm-4">
                    <ul class="list-group">
                        <a href="index.php?pg=landlord-profile&tab=dashboard">
                            <li class="list-group-item <?= !$tab || $tab=='dashboard' ? 'active' : '' ?>"><i class="fa fa-th-large"></i> Dashboard</li>
                        </a>
                        <a href="index.php?pg=landlord-profile&tab=landlord-list"> 
                            <li class="list-group-item <?= $tab =='landlord-list' ? 'active' : '' ?>"><i class="fa fa-user"></i> Landlord List</li>
                        </a>
                        <a href="index.php?pg=landlord-profile&tab=apartment"> 
                            <li class="list-group-item <?= $tab =='apartment' ? 'active' : '' ?>"><i class="fa fa-hamburger"></i> Apartment List</li>
                            
                        </a>
                        
                        <a href="index.php?pg=landlord-profile&tab=caretaker">
                            <li class="list-group-item <?= $tab =='caretaker' ? 'active' : '' ?>"><i class="fa fa-users"></i> Caretaker List</li>
                        </a>
                        <a href="index.php?pg=landlord-profile&tab=tenant">
                            <li class="list-group-item <?= $tab =='tenant' ? 'active' : '' ?>"><i class="fa fa-users"></i> Tenant List</li>
                        </a>
                        
                        <a href="index.php?pg=logout"> 
                            <li class="list-group-item "><i class="fa fa-sign-out-alt"></i> Logout</li>
                        </a>
                        
                        
                        </ul>
        </div>
        <div class = "border col"><h4><?= strtoupper($tab) ?></h4>
                <?php
                    switch ($tab) {
                        case 'apartment':
                            require view_path('apartment/apartment');
                            break;
                        
                        case 'tenant':
                                require view_path('tenants/tenants-all');
                                break;
                        case 'caretaker':
                            require view_path('caretaker/caretaker');
                            break;
                            case 'landlord-list':
                                require view_path('landlord/landlord');
                                break;    
                        default:
                            # code...
                            break;
                    }


                ?>
            
            
        </div>
</div>



<?php require view_path('partials/footer');?>