<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="style2.css">
<div class="container">
<div class="screen">
<?php
include "connection.php";
$sql = "SELECT * FROM item";
$sq = $db->prepare($sql);
$sq ->execute();
echo "<table>
    <tr>
      <th>Name</th>
      <th>Price</th> 
      <th>Category</th>
      <th>Description</th>
      <th>Image</th>
      <th></th>
      <th></th>
    </tr>";
while($row=$sq->fetch(PDO::FETCH_ASSOC)){
    extract($row);?>
    <tr><td><?php echo $name;?></td>
            <td><?php echo $price;?></td>
            <td><?php echo $category;?></td>
            <td><?php echo $description;?></td>
            <td><img src="images/<?php echo $image;?>" alt="image" width="50" height="50"></td>
            <td><button class="button_style" onclick="window.location.href='update.php?iid=<?php echo $iid; ?>';">
                    Update
                </button></td>
            <td><button class="button_style" onclick="window.location.href='update.php?iid=<?php echo $iid; ?>';">
                    Delete
                </button></td>
    </tr>
<?php
}
?>
</table>
</div>
</div>