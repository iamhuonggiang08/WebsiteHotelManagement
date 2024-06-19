<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
            vertical-align: top;
            text-align: center; /* Align labels to the right */
        }

        .div_deg {
            padding-top: 30px;
            text-align: center;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea,
        select {
            width: 300px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center; /* Align inputs to the left */
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="submit"] {
            width: auto;
            margin-left: 210px;
        }

        /* Adjust input alignment for RTL languages */
        body[dir="rtl"] input[type="text"],
        body[dir="rtl"] input[type="number"],
        body[dir="rtl"] input[type="file"],
        body[dir="rtl"] textarea,
        body[dir="rtl"] select {
            text-align: right;
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

                <h1 style="font-size: 30px; font-weight: bold; color:aliceblue">Thêm Phòng</h1>

                <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
                    @csrf

                    <div class="div_deg">
                        <label style="padding-top: 20px; color:aliceblue">Tên phòng</label>
                        <input type="text" name="title">
                    </div>

                    <div class="div_deg">
                        <label style="padding-top: 40px; color:aliceblue">Mô tả</label>
                        <textarea name="description"></textarea>
                    </div>

                    <div class="div_deg">
                        <label style="padding-top: 20px; color:aliceblue">Giá  </label>
                        <input type="number" name="price">
                    </div>

                    <div class="div_deg">
                        <label style="padding-top: 10px; color:aliceblue">Loại phòng</label>
                        <select name="type">
                            <option selected value="regular">Thường</option>
                            <option value="premium">Sang trọng</option>
                            <option value="deluxe">Tổng thống</option>
                        </select>
                    </div>

                    <div class="div_deg">
                        <label style="padding-top: 10px; color:aliceblue">Free Wifi  </label>
                        <select name="wifi">
                            <option selected value="yes">Có</option>
                            <option value="no">Không</option>
                        </select>
                    </div>

                    <div class="div_deg">
                        <label style="padding-top: 25px; color:aliceblue">Tải ảnh lên  </label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Thêm phòng">
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

@include('admin.footer')

</body>
</html>
