<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Toko Sepeda</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            margin: 0
            padding: 20px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.06);
            text-align: center;
        }

        .card h2 {
            margin: 0;
            font-size: 30px;
            color: #333;
        }

        .card p {
            margin-top: 5px;
            color: #777;
        }

        .charts {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .chart-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.06);
        }
    </style>
</head>
<body>

    <h1>Dashboard Penjualan Toko Sepeda</h1>

    <!-- CARD SUMMARY -->
    <div class="cards">
        <div class="card">
            <h2>120</h2>
            <p>Total Barang</p>
        </div>
        <div class="card">
            <h2>45</h2>
            <p>Total Transaksi</p>
        </div>
        <div class="card">
            <h2>Rp 12.540.000</h2>
            <p>Pendapatan</p>
        </div>
    </div>

    <!-- CHARTS -->
    <div class="charts">
        <div class="chart-box">
            <h3>Penjualan Per Jenis (Bar Chart)</h3>
            <canvas id="barChart"></canvas>
        </div>

        <div class="chart-box">
            <h3>Penjualan Harian (Line Chart)</h3>
            <canvas id="lineChart"></canvas>
        </div>

        <div class="chart-box" style="grid-column: span 2;">
            <h3>Persentase Per Merk (Pie Chart)</h3>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <script>
        // ---------- BAR CHART ----------
        new Chart(document.getElementById("barChart"), {
            type: "bar",
            data: {
                labels: ["Gunung", "BMX", "Fixie", "Lipat"],
                datasets: [{
                    label: "Jumlah Terjual",
                    data: [12, 5, 8, 3]
                }]
            }
        });

        // ---------- LINE CHART ----------
        new Chart(document.getElementById("lineChart"), {
            type: "line",
            data: {
                labels: ["1 Jan", "2 Jan", "3 Jan", "4 Jan", "5 Jan"],
                datasets: [{
                    label: "Transaksi Harian",
                    data: [3, 5, 2, 6, 4]
                }]
            }
        });

        // ---------- PIE CHART ----------
        new Chart(document.getElementById("pieChart"), {
            type: "pie",
            data: {
                labels: ["Polygon", "BMX", "United", "Wimcycle"],
                datasets: [{
                    data: [40, 20, 25, 15]
                }]
            }
        });
    </script>

</body>
</html>
