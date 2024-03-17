<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update here</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 150px 300px 200px 300px;
        }
    </style>
</head>

<body>
    <form action="/codeigniter/public/index.php/image_gallery" method="post" method="post" enctype="multipart/form-data">
        <div class="col-md-7">
            <label for="id">Admin_id:</label>
            <input type="number" id="name" name="admin_id">
        </div>
        <div class="col-md-7">
            <label for="id">product_id:</label>
            <input type="number" id="email" name="product_id">
        </div>
        <div class="col-md-7>
            <label for=" image">Image:</label>
            <input type="file" id="image" name="image">
        </div>
        <div class="col-md-7">
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>