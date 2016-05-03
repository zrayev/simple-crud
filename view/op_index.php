<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Storehouse</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Operations</th>
  </tr>
  <?php foreach ($products as $product) : ?>
  <tr>
    <td><?php print htmlspecialchars($product['id']); ?></td>
    <td><?php print htmlspecialchars($product['name']); ?></td>
    <td><?php print htmlspecialchars($product['id_storehouse']); ?></td>
    <td><?php print htmlspecialchars($product['price']); ?></td>
    <td><?php print htmlspecialchars($product['quantity']); ?></td>
    <td>
      <a href="index.php?op=update&id=<?php print htmlspecialchars($product['id']); ?>">Edit</a>
      <a href="index.php?op=delete&id=<?php print htmlspecialchars($product['id']); ?>">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<div>
  <a href="index.php?op=create">Create</a>
</div>
