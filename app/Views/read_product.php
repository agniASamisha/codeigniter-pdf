<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>dashboard</title>
  <link rel="stylesheet" href="/codeigniter/public/CSS/dashboard.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
 
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
        <img src="">
          <span class="nav-item">welcome</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
            <i class="fa fa-unlock-alt"></i>
          <!--<i class="fas fa-comment"></i>-->
          <span class="nav-item">Change_password</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">update</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">product</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="logout" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card"> 
          <img src="http://localhost/codeigniter/public/images/shopping.jpg">
          <h4>Sam David</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="">
          <h4>Balbina kherr</h4>
          <p>Progammer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="">
          <h4>Salina micheal</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
      </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Product List</h1>
          <a href="product"><button>Add</button></a>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price </th>
                <th>Quantity </th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['product_id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><img src="<?php echo "http://localhost/codeigniter/public/" . $product['image']; ?>" height="100px" width="100px"></td>

                <td>
                <div class="dropdown">
        <button class="dropbtn">Actions</button>
        <div class="dropdown-content">
                    <a href="<?= '#'.$product['product_id']?>">Edit</a>
                    <!-- <a href="read_gallery">view</a> -->
                    
                    <a href="<?= 'view_gallery/'.$product['product_id']?>">view</a>
                    <a href="<?= '#'.$product['product_id']?>">Delete</a>
                    </div>
    </div>
                </td>
            </tr>
            <?php endforeach; ?>
           
             </tbody>
          </table>
          <div class="page">
         
          <div>
        </div>
      </section>
    </section>
  </div>
  <script src="/codeigniter/public/js/dashboard.js"></script>

</body>
</html>
</span>