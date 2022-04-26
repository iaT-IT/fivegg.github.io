<!-- Phần cuối trang -->
<div id="footer">
           <!-- Cột bên trái -->
            <div class="footer-l">
                <span>Copyright © 2019 <a class="footer-link" href=""> Trung Tâm Tin Học Đại học sư phạm TPHCM</a></span>
                
                <div class="line03"></div>
                <h4 style="font-weight: 200; margin-bottom: 10px; margin-left: 20px;">Liên hệ</h4>
                <ul class="list-info-l">
                    <li>Tầng trệt - Dãy A (A008,A009,A010) - Cơ sở 1</li>
                    <li>Số 280 - Đường An Dương Vương</li>
                    <li>Phường 4 - Quận 5 - Tp Hồ Chí Minh</li>
                    <li><i class="ti-mobile"></i> Phone: <a style="text-decoration: none; color: #1092c4;" href="tel:(+84 - 28) 38.300.609">(+84 - 28) 38.300.609</a></li>
                    <li><i class="ti-email"></i> Email: <a style="text-decoration: none; color: #1092c4;" href="mailto:thsp@hcmue.edu.vn">fivegg@hcmue.edu.vn</a></li>
                </ul>
            </div>

            <!-- Cột bên phải -->
            
            <div class="footer-r">
                <h4 style="font-weight: 200;">Thành viên</h4>
                <div class="footer-member">
                    <div class="list-img-member">

                        <img class="img-member" src="../assets/css/img/img-footer/member1.jpg" alt="">
                        <span class="member-name"><a style="text-decoration: none;" href="https://4501104200.github.io/mycv.github.io/" target="blank">Vũ Trường Sơn</a></span>

                        <img class="img-member" src="../assets/css/img/img-footer/member5.jpg" alt="">
                        <span class="member-name"><a style="text-decoration: none;" href="https://cvtai-fivegg.cf/"target="blank">Phạm Đức Tài</a></span>

                        <img class="img-member" src="../assets/css/img/img-footer/member3.jpg" alt="">
                        <span class="member-name"><a style="text-decoration: none;" href="https://nguyenminhduc.glitch.me"target="blank">Nguyễn Minh Đức</a></span><br>

                        <img class="img-member" src="../assets/css/img/img-footer/member2.jpg" alt="">
                        <span class="member-name"><a style="text-decoration: none;" href="https://cvlong-fivegg.web.app/"target="blank">Trần Minh Long</a></span>
                        
                        <img class="img-member" src="../assets/css/img/img-footer/member4.jpg" alt="">
                        <span class="member-name"><a style="text-decoration: none;" href="https://vchien-fivegg.web.app/"target="blank">Vũ Nguyễn Duy Hiền</a></span>

                        <img class="img-member" src="../assets/css/img/img-footer/member6.jpg" alt="">
                        <span class="member-name"><a style="text-decoration: none;" href="https://datpham02.github.io/cv/"target="blank">Phạm Trọng Đạt</a></span><br>

                        <img class="img-member" src="../assets/css/img/img-footer/member7.jpg" alt="">
                        <span class="member-name"><a style="text-decoration: none;" href="https://krozzr.github.io/"target="blank">Khoa Trịnh</a></span>

                    </div>
                </div>
            </div>
        </div>
       </div>
   </div>
   <script>
    //    Slidershow

    var slideIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // thay đổi hình ảnh sau 4 giây
    }

   

   </script>
</body>
</html>