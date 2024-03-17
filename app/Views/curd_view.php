<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <!-- Include any CSS files here -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>User Records</h1>
    <h3><a href = "<?= base_url('create')?>">Add</a> </h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
            <tr>
                <td><?php echo $record['id']; ?></td>
                <td><?php echo $record['Name']; ?></td>
                <td><?php echo $record['Email']; ?></td>
                <td><?php echo $record['Phone']; ?></td>
                <td><?php echo $record['image']; ?></td>
                <td><img src="<?php echo "http://localhost/codeigniter/public/" . $record['image']; ?>" height="100px;"></td>

                <td>
                    <a href="<?= 'curd/edit/'.$record['id']?>">Edit</a>
                    <a href="<?= 'curd/delete/'.$record['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Include any JavaScript files here -->
    <script src="/js/script.js"></script>
</body>
</html>
