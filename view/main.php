
   <div id="main">
       <!-- Phần đầu trang -->
        <div id="header">
            <!-- Logo home -->
            <a href="http://localhost/web_5gg1/view" class="Logo" title="Trang chủ">
                <img class="set-logo" src="../assets/css/img/Logo.png">
            </a>
            <div class="login-header">
                <form class="login" action="./db/sign-in.php" method="POST">
                    
                        <i class="ti-user"></i>
                        <input type="text" class="Sign-in" placeholder="Tên đăng nhập" name="username" id="username" required>
                    
                    
                        <i class="ti-unlock"></i>
                        <input type="password" class="Password" placeholder="Mật khẩu" name="password" id="password" required>
                    
                    <button class="submit" type="submit"></button>
                </form>
                
                <div class="Forgot">
                    <a href="">Bạn quên tài khoản hoặc mật khẩu?</a>
                    <a onclick="document.getElementById('id01').style.display='block'" style="width:auto; cursor : pointer; color : blue; opacity : 0.8">Đăng ký</a>
                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <form class="modal-content" action="./db/sign-up.php" method="post">
                            <div class="modal-container">
                                <h1 style="text-align:center">Đăng ký tài khoản</h1>
                                <p style="text-align:center">Vui lòng điền đầy đủ thông tin để tạo tài khoản!</p>
                                <hr>
                                <label for="fullname"><b style="float:left">Họ và tên</b></label>
                                <input type="text" placeholder="Nhập họ và tên..." name="fullname" id="fullname">
                                <label for="username"><b style="float:left">Tên đăng nhập</b></label>
                                <input type="text" placeholder="Nhập tên tài khoản ..." name="username" id="username">
                                <label for="phone"><b style="float:left">Số điện thoại</b></label>
                                <input type="text" placeholder="Nhập số điện thoại..." name="phone" id="phone">
                                <label for="email"><b style="float:left">Email</b></label>
                                <input type="mail" placeholder="Nhập email..." name="email" id="email">
                                <label for="password"><b style="float:left">Password</b></label>
                                <input type="password" class="password-sg" placeholder="Nhập mật khẩu..." name="password" id="password">
                                <label for="gender"><b>Giới tính</b></label>
                                <div>
                                    <div class="from-check">
                                        <input class="from-check-input" type="radio" name="gender" checked id="male" value="male">
                                        <label for="male" class="from-check-label">Nam</label>
                                    </div>
                                    <div class="from-check">
                                        <input class="from-check-input" type="radio" name="gender"  id="female" value="female">
                                        <label for="female" class="from-check-label">Nữ</label>
                                    </div>
                                </div>
                                <label >
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px ;"> Remember me
                                </label>
                                <!-- <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy bỏ</button>
                                    <button type="submit" class="signupbtn">Đăng ký</button>
                                </div> -->
                                <input type="submit" class="btn-dky" name="btn-reg" value="Đăng ký">
                            </div>
                        </form>
                    </div>

                </div>
            </div> 
            <!-- Phần navigation -->
            <ul class="nav">
                <div class="nav-bar">
                    <li><a href="http://localhost/web_5gg1/view">ITC-FIVEGG  </a></li>
                    <li><a href="#">Nhà của tôi</a></li>
                    <li>
                        <a href="#">Khóa học<i class="icon-down ti-angle-down"></i></a> 
                        <ul class="sub-nav">
                            <li><a href="http://localhost/web_5gg1/view/student_training.html">Đào tạo sinh viên</a></li>
                            <li><a href="http://localhost/web_5gg1/view/teacher_training.html">Đào tạo giáo viên</a></li>
                            <li><a href="http://localhost/web_5gg1/view/staff_training.html">Đào tạo nội bộ</a></li>
                            <li><a href="http://localhost/web_5gg1/view/public_training.html">Đào tạo cộng đồng</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Ngôn ngữ<i class="icon-down ti-angle-down"></i></a>
                        <ul class="sub-nav">
                            <li><a href="">Vietnamese(vi)</a></li>
                            <li><a href="">English(en)</a></li>
                        </ul>
                    </li>
                </div>
                <div class="search-btn">
                    <i class="ti-search"></i>
                    <div class="search-text">
                        <input class="input-search-text" type="text" placeholder="Tìm kiếm khóa học" required>
                    </div>
                </div>
            </ul>
            <!-- Slide-Show -->
            <div class="slidershow">
                <div class="slides">
                    <img class="slide" src="../assets/css/img/Slider/slide1.jpg" alt="">
                    <img class="slide" src="../assets/css/img/Slider/slide2.jpg" alt="">
                    <img class="slide" src="../assets/css/img/Slider/slide3.jpg" alt="">
                    <img class="slide" src="../assets/css/img/Slider/slide4.jpg" alt="">
                </div>
            </div>
        </div>
        
       <!-- Phần thân trang -->
       <div id="content">
            <div class="logo2">
                <img class="logo-item" src="../assets/css/img/Logo.png">
            </div>
            <div class="videos">
                <video class="video" src="../assets/css/video/Gioi thieu elearning TTTH DHSPHCM.mp4" controls></video>
            </div>
       </div>
       <div class="line01"></div>
       <!-- Phần nội dung chính -->
       <div id="container">
           <div class="container-text1">
               <h4>Sự lựa chọn hoàn hảo dành cho bạn</h4>
               <p>
                "Hệ thống đào tạo trực tuyến FiveGG được thành lập nhằm mục đích phục vụ cho vấn đề học tập trong thời gian phòng chống dịch COVID-19 hiện nay. Và để khắc phục khó khăn của thầy cô, nhà trường, phụ huynh, giúp cho hành trình học tập của sinh viên không bị gián đoạn, đạt hiệu quả như mong muốn. Hệ thống hỗ trợ cho bốn (4) loại chương trình đào tạo, bao gồm:"
               </p>
           </div>
           <!-- Ảnh các sự lựa chọn -->
           <ul class="container-select">
                <li class="container-box">
                    <p style="text-align: center;">
                        <img src="../assets/css/img/img-container/imgcontainer1.png" alt="" class="container-img">
                    </p>
                    <div class="container-text" style="text-align: center;">
                        <h4>Đào tạo sinh viên</h4>
                        (Student Training)
                    </div>
                    <p style="text-align: center;">
                        <a href="http://localhost/web_5gg1/view/student_training.html" class="container-btn">
                            THAM GIA
                        </a>
                    </p>
                </li>

                <li class="container-box">
                    <p style="text-align: center;">
                        <img src="../assets/css/img/img-container/imgcontainer2.png" alt="" class="container-img">
                    </p>
                    <div class="container-text" style="text-align: center;">
                        <h4>Đào tạo giáo viên</h4>
                        (Teacher Training)
                    </div>
                    <p style="text-align: center;">
                        <a href="http://localhost/web_5gg1/view/teacher_training.html" class="container-btn">
                            THAM GIA
                        </a>
                    </p>
                </li>

                <li class="container-box">
                    <p style="text-align: center;">
                        <img src="../assets/css/img/img-container/imgcontainer3.png" alt="" class="container-img">
                    </p>
                    <div class="container-text" style="text-align: center;">
                        <h4>Đào tạo nội bộ</h4>
                        (Staff Training)
                    </div>
                    <p style="text-align: center;">
                        <a href="http://localhost/web_5gg1/view/staff_training.html" class="container-btn">
                            THAM GIA
                        </a>
                    </p>
                </li>

                <li class="container-box">
                    <p style="text-align: center;">
                        <img src="../assets/css/img/img-container/imgcontainer4.png" alt="" class="container-img">
                    </p>
                    <div class="container-text" style="text-align: center;">
                        <h4>Đào tạo cộng đồng</h4>
                        (Public Training)
                    </div>
                    <p style="text-align: center;">
                        <a href="http://localhost/web_5gg1/view/public_training.html" class="container-btn">
                            THAM GIA
                        </a>
                    </p>
                </li>
           </ul>
           <div class="container-text2">
               <p>Trong đó các khóa học trực tuyến được thiết kế và phát triển dựa trên mô hình kịch bản sư phạm trực 
                tuyến (ACeLF) được đề xuất bởi nhóm chuyên gia cao cấp của trường. Các khóa học bao gồm các hoạt động
                 tự học cá nhân (self-study), hoạt động học nhóm (group learning) và hoạt động học chia sẻ với cộng đồng
                  (collaborative learning) với một nguồn tài nguyên và học liệu học tập phong phú, đa dạng nhằm tạo sự hấp
                   dẫn và kích thích động cơ học tập của người học trực tuyến.</p>
           </div>

           <!-- Phát triển bản thân -->
           <div class="container-skill">
            <div class="line03"></div>
           <h4>Rèn luyện khả năng của bản thân</h4>
           <ul class="container-mysefl">
               <li class="container-myskill" style="text-align: center;">
                   <p>
                    <i class="container-icon ti-desktop"></i>
                    </p>
                   <h3>Tự học</h3>
                   <p>Rèn luyện và nâng cao khả năng tự học, tự nghiên cứu của bản thân để phục vụ cho mục tiêu học tập suốt đời. </p>
               </li>

               <li class="container-myskill" style="text-align: center;">
                <p>
                 <i class="container-icon ti-direction-alt"></i>
                 </p>
                <h3>Giao tiếp</h3>
                <p>Một trong những kĩ năng quan trọng của giáo dục ở TK.21, đáp ứng chuẩn mực đạo đức và văn hóa của thời đại số. </p>
            </li>

            <li class="container-myskill" style="text-align: center;">
                <p>
                 <i class="container-icon ti-settings"></i>
                 </p>
                <h3>Cộng tác</h3>
                <p>Rèn luyện kĩ năng làm việc nhóm, hợp tác và chia sẻ thông tin với cộng đồng qua nhiều kênh thông tin khác nhau. </p>
            </li>

            <li class="container-myskill" style="text-align: center;">
                <p>
                 <i class="container-icon ti-agenda"></i>
                 </p>
                <h3>Vận dụng</h3>
                <p> Tăng cường khả năng tiếp cận công nghệ thông qua những trải nghiệm học trực tuyến để phát triển nghề nghiệp.  </p>
            </li>
           </ul>
       </div>
           <!-- Đội ngũ giảng viên -->
           <div class="container-staff">
               <div class="img-container-staff">
                   <img class="img-staff" src="../assets/css/img/img-container/img-container-staff.jpg" alt="">
               </div>
               <div class="container-staff-text">
                   <h2>Đội ngũ giảng viên</h2>
                   <div class="line02"></div>
                    <h5>
                        Với nhiều năm kinh nghiệm giảng dạy, nhiệt tình, thân thiện với học viên luôn đem lại cho các lớp học một môi trường học tập tốt nhất.
                    </h5>
                    <p>
                        Đội ngũ giảng viên và cộng tác viên của Trung tâm hơn 40 Cán bộ, công nhân viên, giảng viên có trình độ chuyên môn đạt chuẩn và chuyên nghiệp. 
                        Trong đó có 01 tiến sĩ, 06 thạc sĩ, 15 cử nhân Công nghệ thông tin và 03 giảng viên đạt chuẩn MOS Master đã góp phần làm nên uy tín, chất lượng 
                        giảng dạy trong suốt thời gian qua.
                    </p>
               </div>
           </div>
           
           <!-- Khóa học miễn phí -->
           <div class="container-free">
               <p style="text-align: center;">
                    Các bạn học viên đã chuẩn bị và sẵn sàng để tham gia các khóa học của chúng tôi?
               </p>
               <p style="text-align: center;">
                    <a href="http://localhost/web_5gg1/view/lesson.html" class="btn-container-free">Khóa học miễn phí</a>
                </p>
                <p style="text-align: center;">
                    Hi vọng các bạn sẽ đồng hành với chúng tôi trong suốt khoá học.
                </p>
                <p style="text-align: center;">Chúc các bạn hoàn thành tốt khóa học.</p>
           </div>

           
            <!-- Form đăng ký tài khoản -->
            <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                // window.onclick = function(event) {
                //     if (event.target == modal) {
                //         modal.style.display = "none";
                //     }
                // }
            </script>
         </div>

     
       