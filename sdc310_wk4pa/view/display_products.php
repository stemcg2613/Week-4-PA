<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Week 4 PA - Steven McGraw</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Current Products:</h2>

<?php if (!empty($message)): ?>
  <p class="error"><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<table class="products">
  <thead>
    <tr>
      <th>Product #</th>
      <th>Name</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $p): ?>
      <tr>
        <td><?php echo htmlspecialchars($p['ProductNo']); ?></td>
        <td><?php echo htmlspecialchars($p['Name']); ?></td>
        <td><?php echo htmlspecialchars($p['Type']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>