<!DOCTYPE html>
<html>
  <head>

  <base href="/public">

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

    <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <center>

                <h1 style="font-size: 30px;font-weight:boild;">Gửi mail cho {{$data->name}}</h1>

                <form action="{{url('mail', $data->id)}}" method="Post">

                        @csrf

                        <div class="div_deg">
                            <label style="padding-top: 20px; color:aliceblue">Lời chào</label>
                            <input type="text" name="greeting">
                        </div>

                        <div class="div_deg">
                            <label style="padding-top: 20px; color:aliceblue">Nội dung chính</label>

                            <textarea name="body" ></textarea>

                        </div>

                        <div class="div_deg">
                            <label style="padding-top: 20px; color:aliceblue">Tiêu đề</label>
                            <input type="text" name="action_text">
                        </div>

                        <div class="div_deg">
                            <label style="padding-top: 20px; color:aliceblue">Link</label>
                            <input type="text" name="action_url">
                        </div>

                        <div class="div_deg">
                            <label style="padding-top: 20px; color:aliceblue">Chữ kí</label>
                            <input type="text" name="endline">
                        </div>


                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Gửi Mail">
                        </div>
                    </form>
                </center>

            </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>
