<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>

    <div class="bg-gray-200 h-12 rounded-md my-4 pt-2 pl-4 text-lg">
        <h1 class="text-gray-500 font-bold"> Biểu Đồ Thống Kê</h1>
        <div id="myChart" class="w-full h-[500px] mt-[60px] pl-28"></div>


        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                    $tongdm = count($listthongke);
                    $i = 1;
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        if ($i == $tongdm) $dauphay = "";
                        else $dauphay = ",";
                        echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
                        $i += 1;
                    }

                    ?>
                ]);

                var options = {
                    'title': 'Biểu đồ thống kê sản phẩm danh mục',
                    'width': 1200,
                    'hight': 900,

                };

                var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>
    </div>
    <!-- ------------------------------------------------ -->
</body>

</html>