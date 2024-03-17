<!-- edit_curd_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Include any CSS files here -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Edit User</h1>
    <form action="<?php echo base_url('curd/update/' . $record['id']); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo isset($record['id'])? $record['id']: ''; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($record['Name']) ? $record['Name'] : ''; ?>">

        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($record['Email'])? $record['Email']: '';  ?>">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo isset($record['Phone'])? $record['Phone']: ''; ?>">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" value="<?php echo isset($record['image'])? $record['image']: ''; ?>">
        </div>
        <button type="submit">Update User</button>
    </form>
    <!-- Include any JavaScript files here -->
    <script src="/js/script.js"></script>
</body>
</html>
