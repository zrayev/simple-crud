<form method="post">
  <div>
    <label for="name">Name:</label>
    <input name="name" type="text" placeholder="apples" autofocus required value="<?php print htmlspecialchars($product['name']); ?>" id="name">
  </div>

  <div>
    <label for="storehouse">Storehouse</label>
    <select id="storehouse" name="id_storehouse">
      <?php foreach ($storehouses as $storehouse):?>
        <option value="<?php print htmlspecialchars($storehouse['id'])?>"> <?php print htmlspecialchars($storehouse['name'])?></option>
      <?php endforeach;?>
    </select>
  </div>

  <div>
    <label for="price">Price</label>
    <input name="price" type="text" placeholder="20" required pattern="[0-9]" value="<?php print htmlspecialchars($product['price']); ?>" price="price">
  </div>

  <div>
    <label for="quantity">Quantity</label>
    <input name="quantity" type="text" placeholder="6" required pattern="[0-9]" value="<?php print htmlspecialchars($product['quantity']); ?>" id="quantity">
  </div>
  <div class="btn_center">
    <input type="submit" name="save" value="Save">
  </div>
</form>
