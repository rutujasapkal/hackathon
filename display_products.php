<html>
  <title>Using BLOB and MySQL</title>
  <body>

  <?php

  require_once 'config.php';

  $sql = "SELECT * FROM products";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  ?>

  <table border = '1' align = 'center'> <caption>Products Database</caption>
    <tr>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Product Image</th>
    </tr>

  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['product_id'] . '</td>';
      echo '<td>' . $row['product_name'] . '</td>';
      echo '<td>' . $row['price'] . '</td>';
      echo '<td>' .
      '<img src = "data:image/png;base64,' . base64_encode($row['product_image']) . '" width = "50px" height = "50px"/>'
      . '</td>';
      echo '</tr>';
  }
  ?>

  </table>
  </body>
</html>