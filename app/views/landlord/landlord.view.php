<table class="table table-striped">
    <a href="index.php?pg=landlord-add">
        <button class="btn btn-primary float-end m-2"><i class="fa fa-add"></i> Add LandLord</button>
    </a>
    
    <thead>
        <th>Landlord Name</th>
        <th>Landlord ID</th>
        <th>Phone Number</th>
        <th>Operation</th>
    </thead>
    <tbody>
        
            <?php if (!empty($landlords)) : ?>
                <?php foreach ($landlords as $landlord):?>
            <tr>
                    <td><?= esc($landlord['landlord_name']) ?></td>
                    <td><?= esc($landlord['landlord_id']) ?></td>
                    <td><?= esc($landlord['phone_number']) ?></td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                    
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        
        
    </tbody>
</table>