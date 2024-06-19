<!DOCTYPE html>
<html>
  <head>

  <base href="/public">

    @include('admin.css')

    <style type="text/css">

        label{

            display: inline-block;
            width: 200px;

        }

        .div_deg{
            padding-top: 30px;
        }

        .div_center{
            text-align: center;
            padding-top: 40px;
        }
    </style>

  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="div_center">

                    <h1 style="font-size: 30px; font-weight: bold;">Cập nhật phòng</h1>

                    <form action="{{url('edit_room', $data->id)}}" method="Post" enctype="multipart/form-data">

                        @csrf

                        <div class="div_deg">
                            <label>Loại phòng</label>
                            <input type="text" name="title" value="{{$data->room_title}}">
                        </div>

                        <div class="div_deg">
                            <label>Mô tả</label>

                            <textarea name="description" >{{$data->description}}
                            </textarea>

                        </div>

                        <div class="div_deg">
                            <label>Giá</label>
                            <input type="number" name="price" value="{{$data->price}}">
                        </div>

                        <div class="div_deg">
                            <label>Loại phòng</label>

                            <select name="type">

                                <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>

                                <option value="regular">Thường</option>
                                <option value="premium">Sang trọng</option>
                                <option value="deluxe">Tổng thống</option>

                            </select>
                        </div>

                        <div class="div_deg">
                            <label>Free Wifi</label>

                            <select name="wifi">

                            <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>

                                <option selected value="yes">Có</option>
                                <option value="no">Không</option>

                            </select>
                        </div>

                        <div class="div_deg" >
                            <label>Hình ảnh</label>
                            <img style="margin: auto;" width="100" src="/room/{{$data->image}}" alt="">
                        </div>

                        <div class="div_deg">
                            <label>Tải ảnh lên</label>
                            <input type="file" name="image">
                        </div>

                        <div>
                            <input class="btn btn-primary" type="submit" value="Update Room">
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

@include('admin.footer')

  </body>
</html>
