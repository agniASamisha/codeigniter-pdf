<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Address</title>
</head>
<body>
    <h1>Add Address</h1>
    <form method="post" action="<?= site_url('add_address') ?>">
        Phone: <input type="text" name="phone"><br>
        Address: <input type="text" name="address"><br>
        City: <input type="text" name="city"><br>
        Nationality: 
        <select name="nationality" required>
            <option selected disabled value="">Choose...</option>
            <option>Indian</option>
            <option>American</option>
            <option>Chinese</option>
        </select><br>
        State: 
        <select name="state" required>
            <option selected disabled value="">Choose...</option>
            <option>Goa</option>
            <option>Thane</option>
            <option>Delhi</option>
            <option>Chennai</option>
            <option>Varanasi</option>
        </select><br>
        LocalArea: <input type="text" name="locality"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
