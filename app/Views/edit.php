<!-- edit_curd_view.php -->

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

<form class="row g-3" action="<?php echo base_url('admin/update/' . $record['id']); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo isset($record['id'])? $record['id']: ''; ?>">

    <div class="col-md-7">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($record['Name']) ? $record['Name'] : ''; ?>">
    </div>

    <div class="col-md-7">
    <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($record['Email'])? $record['Email']: '';  ?>">
        </div>
        <div class="col-md-7>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo isset($record['Phone'])? $record['Phone']: ''; ?>">
        </div>
        <div class="col-md-7>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" value="<?php echo isset($record['image'])? $record['image']: ''; ?>">
        </div>
    <div class="col-md-7">
      <input type="submit" class="btn btn-primary" name="Update" value="Update">
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>