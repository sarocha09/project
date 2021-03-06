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

        <script>
          function confirmDelete() {

            if (confirm("ต้องการลบรายการนี้?")) {
              return true;
            }
            return false;
          }
        </script>

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
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Product</h6>
                  <a href="{{ url('admin/product/add') }}" class="btn btn-success">เพิ่มข้อมูล</a>
                </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush" style="margin:0px auto;width:100%;">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>รูปภาพ</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <th>ประเภทสินค้า</th>
                        <th>รายละเอียด</th>

                        <th>คำสั่ง</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($dbProduct as $product)
                      <tr>
                        <td>{{$product->id_pro}}</td>
                        <td><img src="{{$product->image}}" width="200px" ></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->pice}}</td>
                        <td>{{$product->type->name}}</td>
                        <td>{{$product->detail}}</td>
                        <td>
                          <a href="{{ url('admin/product/edit/'.$product->id_pro) }}" class="btn  btn-warning">แก้ไข</a>
                          <a href="{{ url('admin/product/delete/'.$product->id_pro) }}" class="btn  btn-danger" >ลบ</a>
                        </td>
                      </tr>
                      @endforeach
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