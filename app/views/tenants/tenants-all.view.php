<div class="table-responsive">
    
    <table class = "table table-striped table-hover">
        <tr>
            <th>Tenant Name</th>
            <th>Tenant Id</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Apartment</th>
            <th>Apartment Number</th>
            <th>Rent</th>
            <th>Deposit</th>
            <th>Amount</th>
            <th>Date</th>
            
            <th>Operations</th>
        </tr>
        <?php if (!empty($tenants)): ?>
            <?php foreach ($tenants as $tenants): ?>
            <tr>
                <td><?=esc($tenants['tenant_name'] )?></td>
                <td>
                    <a href="index.php?pg=tenants-single&id=<?= $tenants['id'] ?>">
                        <?=esc($tenants['tenant_id'] )?>
                    </a>
                </td>
                <td><?=esc($tenants['password'] )?></td>
                <td><?=esc($tenants['phone_number'] )?></td>
                <td><?=esc($tenants['apartment'] )?></td>
                <td><?=esc($tenants['house_name'] )?></td>
                <td><?=esc($tenants['rent'] )?></td>
                <td><?=esc($tenants['deposit'] )?></td>
                <td><?=esc($tenants['amount'] )?></td>
                <td><?=date("jS M, Y", strtotime($tenants['date'] ))?></td>
                <td>
                    <a href="index.php?pg=tenants-edit&id=<?= $tenants['id'] ?>">
                        <button class="btn btn-success btn-sm">Edit</button>
                    </a>
                    <a href="index.php?pg=tenants-delete&id=<?= $tenants['id'] ?>">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>




</div>