<div class="table-responsive">
    <div>
    <a href="index.php?pg=apartment-add"><button class="btn btn-primary float-end m-2">
                <i class="fa fa-add"></i> Add Apartment
            </button></a>
    </div>
    <table class = "table table-striped table-hover">
        <tr>
            <th>Apartment Name</th>
            <th>Location</th>
            <th>Date</th>
            <th>Operations</th>
            
            
            
            
        </tr>
        <?php if (!empty($apartments)): ?>
            <?php foreach ($apartments as $apartments): ?>
            <tr>
                
                <td>
                    <a href="index.php?pg=apartment-single&name=<?= $apartments['apartment_name'] ?>">
                        <?=esc($apartments['apartment_name'] )?>
                    </a>
                </td>
                <td><?=esc($apartments['location'] )?></td>
                <td><?=esc($apartments['date'] )?></td>
                <td>
                    <a href="index.php?pg=apartment-edit&id=<?= $apartments['apartment_name'] ?>">
                        <button class="btn btn-success btn-sm">View</button>
                    </a>
                    <a href="index.php?pg=apartment-delete&name=<?= $apartments['apartment_name'] ?>">
                        <button class="btn btn-danger btn-sm">Edit</button>
                    </a>
                </td>
                
                
                
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>




</div>