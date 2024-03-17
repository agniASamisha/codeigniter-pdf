<!-- app/Views/login.php
//http://localhost/codeigniter/public/index.php/template -->
 
<form action="/codeigniter/public/index.php/insert" method="post" enctype="multipart/form-data">

Name: <input type="text" name="name" placeholder="name"><br>
Email:  <input type="text" name="email" placeholder="email"><br>
UserName:  <input type="text" name="username" placeholder="username"><br>
Phone:  <input type="text" name="phone" placeholder="phone"><br>
Password:  <input type="password" name="password" placeholder="password"><br>
Image:  <input type="file" name="image" placeholder="image"><br>

    <button type="submit">Register</button>
</form>
