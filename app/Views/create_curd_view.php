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
    <h1>Create User</h1>
    <form action="curd/create" method="post" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="username" id="username" name="username">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div>
            <label for="phone">Password:</label>
            <input type="password" id="phone" name="password">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit">Enter User</button>
    </form>
    <!-- Include any JavaScript files here -->
    <script src="/js/script.js"></script>
</body>
</html>
