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
    <input type="submit" name="save" value="Save">
  </div>
</form>
