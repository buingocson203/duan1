<div class="2">
    <div class="3">

        <div class="w-full flex">
            <div class="w-3/4">

                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img class="border rounded-md" src="view/img/banner-sl1.jfif" style="width:100% ; height:400px">
                        <div class="text">Trang 1</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img class="border rounded-md" src="view/img/bannersl2.jfif" style="width:100% ; height:400px">
                        <div class="text">Trang 2</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img class="border rounded-md" src="view/img/bannersl3.jfif" style="width:100% ; height:400px">
                        <div class="text">Trang 3</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                <img src="img/a2.png" alt="">
                <div class="w-full flex justify-between  gap-x-3 mt-4">
                    <div class="w-full flex gap-y-4 flex-wrap">
                        <?php
                        global $img_path;
                        foreach ($newsp as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            $anh = $img_path . $img;

                            echo '<div class="w-1/3 flex gap-y-4 flex-wrap">
                                    <div class="border rounded-md p-3">
                                        <div class="w-full"><a href="' . $linksp . '"><img src="' . $anh . '" alt="Không có ảnh"></a> </div>
                                        <p class="text-2xl">$' . $price . '</p>
                                        <a href="' . $linksp . '" class="text-blue-500">$' . $name . '</a>
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="' . $id . '">
                                            <input type="hidden" name="name" value="' . $name . '">
                                            <input type="hidden" name="img" value="' . $img . '">
                                            <input type="hidden" name="price" value="' . $price . '">
                                            <input class="border px-3 bg-gray-200 rounded-md hover:bg-slate-300" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>
                                   
                                    
                                 </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="w-1/4 ml-4 grid gap-y-4">
                <?php
                include "boxright.php";
                ?>
            </div>
        </div>
    </div>

</div>