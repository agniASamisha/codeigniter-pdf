<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address List</title>
    <style>
 table{
  border-collapse: collapse;
  width: 1300px;
 }
 td,  th {
   border-collapse: collapse;
  border: 1px solid #ddd;
  padding: 8px;
}
 tr:nth-child(even){background-color: white;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: white;
  color: blue;
}
.btn{
	display: inline-block;
	margin: 10px 0;
	border-radius: 4px;
	padding: 4px 10px;
	transition: background 0.5s;
}
.btn:hover{
background: #ff523b;
}
</style>
</head>
<body>
    <h1>Address List</h1>
    <?php if (!empty($addresses)) : ?>
        <table>
            <tr>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Nationality</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
            <?php foreach ($addresses as $address) : ?>
                <tr>
                    <td><?= $address['phone'] ?></td>
                    <td><?= $address['address'] ?></td>
                    <td><?= $address['city'] ?></td>
                    <td><?= $address['nationality'] ?></td>
                    <td><?= $address['location'] ?></td>
                    <td>
                        <a href="<?= site_url('update_address/' . $address['id']) ?>">update</a>
                        <a class="btn" href="<?= site_url('order/' . $address['id']) ?>">payment</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
