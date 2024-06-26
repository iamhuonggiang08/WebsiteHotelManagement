<div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Blog</h2>
                     <p>Một số đánh giá của khách hàng đã trải nghiệm dịch vụ của chúng tôi </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog1.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Phòng thường</h3>
                        <span>Đạt tiêu chuẩn </span>
                        <p>Phòng thường tại khách sạn Keto mang lại cảm giác ấm cúng và thoải mái với đầy đủ tiện nghi cần thiết. Dịch vụ tuyệt vời và không gian sạch sẽ, lý tưởng cho kỳ nghỉ ngắn ngày. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog2.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Phòng sang trọng</h3>
                        <span>Đạt tiêu chuẩn </span>
                        <p>Phòng sang trọng của khách sạn Keto được thiết kế tinh tế với nội thất hiện đại và tầm nhìn đẹp. Dịch vụ chu đáo, mang lại trải nghiệm nghỉ dưỡng đẳng cấp. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/blog3.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Phòng tổng thống</h3>
                        <span>Đạt tiêu chuẩn </span>
                        <p>Phòng tổng thống tại khách sạn Keto là đỉnh cao của sự sang trọng và xa hoa. Không gian rộng rãi, tiện nghi cao cấp và dịch vụ hoàn hảo, đem lại cảm giác hoàng gia cho khách lưu trú.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>

                  @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-bs-dismiss='alert'>X</button>

                    {{session()->get('message')}}

                </div>


                  @endif

               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="{{url('contact')}}" method="Post">

                  @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="name" required>
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email"  required>
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="number" name="phone" required>
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name="message" required>Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" type="submit">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d953791.6257220685!2d105.188383665625!3d20.962611199999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452efff394ce3%3A0x391a39d4325be464!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaGVuaWthYQ!5e0!3m2!1svi!2s!4v1718809098555!5m2!1svi!2s" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
