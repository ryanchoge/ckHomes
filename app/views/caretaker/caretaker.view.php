<div class="table-responsive">
    <div>
    <a href="index.php?pg=caretaker-add"><button class="btn btn-primary float-end p-1 m-2">
                <i class="fa fa-add"></i> Add Caretaker
            </button></a>
    </div>
    <table class = "table table-striped table-hover">
        <tr>
            <th>Caretaker Name</th>
            <th>Caretaker Id</th>
            <th>Phone Number</th>
            <th>Apartment Name</th>
            
            
            
            
        </tr>
        <?php if (!empty($caretakers)): ?>
            <?php foreach ($caretakers as $caretakers): ?>
            <tr>
                
                <td>
                    <a href="index.php?pg=caretaker-single&id=<?= $caretakers['caretaker_name'] ?>">
                        <?=esc($caretakers['caretaker_name'] )?>
                    </a>
                </td>
                <td><?=esc($caretakers['caretaker_id'] )?></td>
                <td><?=esc($caretakers['phone_number'] )?></td>
                <td><?=esc($caretakers['apartment'] )?></td>
                
                
                
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>




</div>