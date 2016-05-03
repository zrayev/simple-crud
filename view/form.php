<form method="post">
  <div>
    <label for="name">Name:</label>
    <input name="name" type="text" value="<?php print htmlspecialchars($product['name']); ?>" id="name">
  </div>

  <div>
    <label for="storehouse">Storehouse</label>
    <select id="storehouse" name="id_storehouse">
      <?php foreach ($storehouses as $storehouse):?>
          <option value="<?php print htmlspecialchars($storehouse['id'])?>"> <?php print htmlspecialchars($storehouse['id'])?></option>
      <?php endforeach;?>

    </select>
  </div>

  <div>
    <label for="price">Price</label>
    <input name="price" type="text" value="<?php print htmlspecialchars($product['price']); ?>" price="price">
  </div>

  <div>
    <label for="quantity">Quantity</label>
    <input name="quantity" type="text" value="<?php print htmlspecialchars($product['quantity']); ?>" id="quantity">
  </div>
  <div>
    <input type="submit" name="save" value="Save">
  </div>
</form>
