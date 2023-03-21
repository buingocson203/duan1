<div class="w-full flex">
    <div class="w-3/4 grid gap-y-3">

        <div class="border rounded-md">

            <div class="bg-gray-200 text-xl p-2 rounded-tl-md rounded-tr-md"><strong> <?= $tendm ?></strong>
            </div>
            <div class="py-4 px-4 grid gap-y-2">
                <?php
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $anh = $img_path . $img;
                    echo '<div class="w-1/3 flex gap-y-4 flex-wrap">
                                    <div class="border rounded-md p-3">
                                        <div class="w-full">
                                        <a href="' . $linksp . '"><img class="ml-auto mr-auto" src="' . $anh . '" alt=""></a> 
                                        </div>
                                        <p class="text-2xl">$' . $price . '</p>
                                        <a href="' . $linksp . '" class="text-green-400">$' . $name . '</a>
                                    </div>
                                </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="w-1/4 ml-4 grid gap-y-4">
        <?php include "boxright.php"; ?>
    </div>
</div>