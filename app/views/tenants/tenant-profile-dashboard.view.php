    <div class="col-lg-3 col-md-4 ">
        <img src="assets/images/coke.jpg" alt="">

    </div>
    <div class="container-fluid  col">
        <table class="table">
                    
            <tbody>
                <tr>
                    <td></td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                Tenant Name
                            </div>
                            <div class="col">
                                <?= auth('tenant_name') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                Tenant Id
                            </div>
                            <div class="col">
                                <?= auth('tenant_id') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                 House Name
                            </div>
                            <div class="col">
                                <?= auth('house_name') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                Rent
                            </div>
                            <div class="col">
                                <?= auth('rent') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                Total Billed
                            </div>
                            <div class="col">
                                <?= auth('amount') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                Total Paid
                            </div>
                            <div class="col">
                                <?= auth('amount') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                Deposit
                            </div>
                            <div class="col">
                                <?= auth('deposit') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                <tr>
                    <td>
                       <div class="row">
                            <div class="col-6">
                                Balance
                            </div>
                            <div class="col">
                                <?= auth('balance') ?>
                            </div>
                       </div>  
                    </td>
                            
                </tr>
                
               
                
            </tbody>
        </table>
    </div>