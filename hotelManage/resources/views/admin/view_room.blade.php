<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">

        .table_deg{
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }

        .th-deg{
            background-color: skyblue;
            padding: 15px;
        }

        tr{
            border: 3px solid white;
        }

        td{
            padding: 10px;
        }

    </style>

  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <table class="table_deg">

                    <tr>
                        <th class="th-deg">Loại phòng</th>
                        <th class="th-deg">Mô tả</th>
                        <th class="th-deg">Giá</th>
                        <th class="th-deg">Wifi</th>
                        <th class="th-deg">Loại phòng</th>
                        <th class="th-deg">Hỉnh ảnh</th>
                        <th class="th-deg">Xóa</th>
                        <th class="th-deg">Cập nhật</th>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->room_title}}</td>
                        <td>{!! Str::limit($data->description,150) !!}</td>
                        <td>{{$data->price}}₫</td>
                        <td>{{$data->wifi}}</td>
                        <td>{{$data->room_type}}</td>

                        <td>
                            <img width="100" src="room/{{$data->image}}" alt="">
                        </td>

                        <td>
                            <a onclick="return confirm('Are you sure to delete this ');" class="btn btn-danger" href="{{url('room_delete',$data->id)}}">Xóa</a>
                        </td>

                        <td>
                            <a class="btn btn-warning" href="{{url('room_update',$data->id)}}">Cập nhật</a>
                        </td>

                    </tr>

                    @endforeach

                </table>

            </div>
        </div>
    </div>
    @include('admin.footer')
  </body>
</html>
