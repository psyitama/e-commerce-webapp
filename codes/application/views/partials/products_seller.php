<?php foreach ($products as $product): ?>
<tr>
    <td>
        <img src="<?=base_url() . 'uploads/' . $product['main_image_url']?>" class="product-img"
            alt="<?=$product['name']?>">
    </td>
    <th scope="row" class="product_id"><?=$product['id']?></th>
    <td class="product_name"><?=$product['name']?></td>
    <td class="inventory_count"><?=$product['inventory_count']?></td>
    <td class="sold_count"><?=$product['sold_count']?></td>
    <td>
        <a href="" class="btn btn-info btn-small update-modal" data-id="<?=$product['id']?>" data-toggle="modal"
            data-target="#updateModal">
            <i class="fas fa-edit"></i>
        </a>
        |
        <a href="" class="btn btn-danger delete-modal" data-id="<?=$product['id']?>" data-toggle="modal"
            data-target="#deleteModal">
            <i class="fas fa-trash-alt"></i>
        </a>
    </td>
</tr>
<?php endforeach;?>
