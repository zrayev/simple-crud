<form method="post">
  <div>
    <label for="name">Name:</label>
    <input name="name" type="text" value="<?php print htmlspecialchars($repo['name']); ?>" id="name">
  </div>

  <div>
    <label for="active">Active</label>
    <input type="checkbox" name="active" id="active"<?php print ($repo['active'] ? ' checked' : ''); ?>>
  </div>

  <div>
    <label for="storage">Storage</label>
    <select id="storage" name="id_storage">
      <?php foreach ($storages as $storage) : ?>
      <option value="<?php print htmlspecialchars($storage['id']); ?>"><?php print htmlspecialchars($storage['name']); ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div>
    <input type="submit" name="save" value="Save">
  </div>
</form>
