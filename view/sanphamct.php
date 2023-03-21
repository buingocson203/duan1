<div class="2">
    <div class="3">

        <div class="w-full flex">
            <div class="w-3/4 grid gap-y-3">

                <div class="border rounded-md">
                    <?php
                    extract($onesp);
                    ?>
                    <div class="bg-gray-200 text-xl p-2 rounded-tl-md rounded-tr-md"><?= $name ?></div>
                    <div class="py-4 px-4 grid gap-y-2">
                        <?php

                        $img = $img_path . $img;
                        echo '<img class="w-2/4" src="' . $img . '"><br>';
                        echo $moTa;
                        ?>
                    </div>
                </div>
                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#binhluan").load("view/binhluan/binhluanform.php", {
                            idpro: <?= $id ?>
                        });
                    });
                </script>
                <div class="border rounded-md" id="binhluan">

                </div> -->
                <div class="">
                    <iframe src="view/binhluan/binhluanform.php?idpro=<?= $id ?>" frameborder="0" width="100%" height="300px"></iframe>
                </div>
                <div class="border rounded-md">
                    <div class="bg-gray-200 text-xl p-2 rounded-tl-md rounded-tr-md">SẢN PHẨM CÙNG LOẠI</div>
                    <div class="py-4 px-4 grid gap-y-2">
                        <?php
                        foreach ($sp_cung as $sp_cung) {
                            extract($sp_cung);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="w-1/4 ml-4 grid gap-y-4">
                <?php include "boxright.php"; ?>
            </div>
        </div>
    </div>
</div>