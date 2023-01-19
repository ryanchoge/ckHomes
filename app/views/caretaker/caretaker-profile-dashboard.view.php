<div class="col-lg-3 col-md-2">
        <img src="assets/images/coke.jpg" alt="">

    </div>
    <div class="col">
        <table class="table">
                    
            <tbody>
                <tr>
                    <td></td>
                            
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Caretaker Name
                            </div>
                            <div class="col-6" style="color: green;">
                                <?= auth('caretaker_name') ?>
                            </div>
                        </div> 
                    </td>
                            
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Caretaker ID
                            </div>
                            <div class="col" style="color: green;">
                                <?= auth('caretaker_id') ?>
                            </div>
                        </div> 
                    </td>
                            
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Apartment Name
                            </div>
                            <div class="col" style="color: dark-green;">
                                <?= auth('apartment') ?>
                            </div>
                        </div>
                    </td>
                            
                </tr>
                
                
            </tbody>
        </table>
    </div>