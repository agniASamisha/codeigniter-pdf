<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>dashboard</title>
    <link rel="stylesheet" href="/codeigniter/public/CSS/dashboard.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

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
          <li><a href="read_products">
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
            <img src="">
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
            <a href="gallery"><button>Add</button></a>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone </th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($records as $record) : ?>
                  <tr>
                    <td><?php echo $record['id']; ?></td>
                    <td><?php echo $record['Name']; ?></td>
                    <td><?php echo $record['Email']; ?></td>
                    <td><?php echo $record['Phone']; ?></td>
                    <td><img src="<?php echo "http://localhost/codeigniter/public/" . $record['image']; ?>" height="100px" width="100px"></td>

                    <td>
                      <div class="dropdown">
                        <button class="dropbtn">Actions</button>
                        <div class="dropdown-content">
                          <a href="<?= 'read_gallery/' . $record['id'] ?>">view</a>
                          <!-- <a href="'admin/edit/'.$record['id']?>">Edit</a>
                    
                    <a href="'read_gallery/'.$record['id']?>">view</a>
                    <a href="< 'admin/delete/'.$record['id']?>">Delete</a> -->
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
            <div class="page">
              <?= $pager->links() ?>
             
              </div>
        </section>
      </section>
    </div>
    <script src="/codeigniter/public/js/dashboard.js"></script>

  </body>

  </html>
</span>