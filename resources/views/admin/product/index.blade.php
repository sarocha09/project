@include('layouts.admin.head')

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
@include('layouts.admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
@include('layouts.admin.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">หน้า Product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า Product</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Product</h6> <a href="form_add_product.php" class="btn btn-success">เพิ่มข้อมูล</a>
                </div>
                
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>รูปภาพ</th>
                        <th>ชื่อ</th>
                        <th>ราคา</th>
                        <th>ประเภทสินค้า</th>
                        <th>ผู้สร้างเนื้อหา</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">cf01</a></td>
                        <td>Udin </td>
                        <td>กาแฟร้อน</td>
                        <td>30</td>                       
                        <td>ประเภทร้อน</td>                       
                        <td>Nasi Padang</td>                       
                        <td>Nasi Padang</td>                       
                        <td><a href="form_edit_product.php" class="btn  btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn  btn-danger">ลบ</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">cf02</a></td>
                        <td>Jaenab</td>
                        <td>นมเย็น </td>                        
                        <td>20 </td>                        
                        <td>ประเภทเย็น </td>                        
                        <td>Gundam 90' </td>                        
                        <td>Gundam 90' </td>                        
                        <td><a href="form_edit_product.php" class="btn  btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn  btn-danger">ลบ</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">cf03</a></td>
                        <td>Rivat</td>
                        <td>ชานมเย็น</td>                       
                        <td>20</td>                       
                        <td>ประเภทเย็น</td>                       
                        <td>Oblong T-Shirt</td>                       
                        <td>Oblong T-Shirt</td>                       
                        <td><a href="form_edit_product.php" class="btn  btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn  btn-danger">ลบ</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">cf04</a></td>
                        <td>Indri </td>
                        <td>ชามะนาว</td>                        
                        <td>20</td>                        
                        <td>ประเภทเย็น</td>                        
                        <td>Hat Rounded</td>                        
                        <td>Hat Rounded</td>                        
                        <td><a href="form_edit_product.php" class="btn  btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn  btn-danger">ลบ</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">cf05</a></td>
                        <td>Udin </td>
                        <td>ลาเต้เย็น</td>
                        <td>30</td>
                        <td>ประเภทเย็น</td>
                        <td>Baby Powder</td>
                        <td>Baby Powder</td>
                        <td><a href="form_edit_product.php" class="btn  btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn  btn-danger">ลบ</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
@include('layouts.admin.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
</body>

</html>