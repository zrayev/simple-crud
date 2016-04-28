<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Active</th>
    <th>Storage</th>
  </tr>
  <?php foreach ($repos as $repo) : ?>
  <tr>
    <td><?php print htmlspecialchars($repo['id']); ?></td>
    <td><?php print htmlspecialchars($repo['name']); ?></td>
    <td><?php print htmlspecialchars($repo['active']); ?></td>
    <td><?php print htmlspecialchars($repo['id_storage']); ?></td>
  </tr>
  <?php endforeach; ?>
</table>
