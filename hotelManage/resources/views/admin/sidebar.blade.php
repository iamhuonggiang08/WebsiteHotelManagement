<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Giang Huong</h1>
            <p>Admin</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
         <span class="heading" style="color: white;">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Trang chủ </a></li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Phòng </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Thêm phòng</a></li>
                    <li><a href="{{url('view_room')}}">Xem phòng</a></li>
                  </ul>
                </li>

                <li>
                    <a href="{{url('bookings')}}"> <i class="icon-home"></i>Đặt phòng </a>
                </li>

                <li>
                    <a href="{{url('view_gallary')}}"> <i class="icon-home"></i>Hình ảnh </a>
                </li>

                <li>
                    <a href="{{url('all_messages')}}"> <i class="icon-home"></i>Liên hệ </a>
                </li>
        </ul>
      </nav>
