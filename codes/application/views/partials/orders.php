<?php foreach ($orders as $order): ?>
<tr>
    <th scope="row"><a href="<?=base_url() . 'orders/show/' . $order['id']?>"><?=$order['id']?></a>
    </th>
    <td><?=$order['first_name'] . ' ' . $order['last_name']?></td>
    <td><?=$order['created_at']?></td>
    <td><?=$order['b_address'] . ' ' . $order['b_city'] . ' ' . $order['b_state'] . ' ' . $order['b_zipcode']?>
    </td>
    <td>$<?=$order['total_price']?></td>
    <td>
        <form action="">
            <select class="custom-select" name="status">
                <?php foreach ($order_statuses as $order_status): ?>
                <option <?=($order['status_id'] == $order_status['id']) ? "selected" : ""?>
                    value="<?=$order_status['id']?>"><?=$order_status['status']?></option>
                <?php endforeach;?>
            </select>
        </form>
    </td>
</tr>
<?php endforeach;?>
