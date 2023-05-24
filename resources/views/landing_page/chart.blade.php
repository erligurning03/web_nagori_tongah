<!DOCTYPE html>
<html>
<head>
    <title>Chart</title>
    <style>
        .chart-container {
            width: 400px; /* Ubah lebar wadah chart */
            height: 400px; /* Ubah tinggi wadah chart */
            margin-bottom: 20px; /* Jarak antara chart */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    
    <div class="chart-container">
        <canvas id="pendapatanChart"></canvas>
    </div>
    
    <div class="chart-container">
        <canvas id="pengeluaranChart"></canvas>
    </div>

    <script>
        // Mengambil data pendapatan dari URL /chart/data
        fetch('/chart/data')
            .then(response => response.json())
            .then(data => {
                const pendapatanLabels = data.pendapatan.map(item => item.sumber);
                const pendapatanValues = data.pendapatan.map(item => item.total);

                const ctxPendapatan = document.getElementById('pendapatanChart').getContext('2d');
                const pendapatanChart = new Chart(ctxPendapatan, {
                    type: 'pie', // Mengubah tipe chart menjadi 'pie'
                    data: {
                        labels: pendapatanLabels,
                        datasets: [{
                            label: 'Pendapatan',
                            data: pendapatanValues,
                            backgroundColor: ['rgba(0, 123, 255, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 205, 86, 0.5)', 'rgba(75, 192, 192, 0.5)'], // Warna latar belakang untuk setiap bagian lingkaran
                            borderColor: ['rgba(0, 123, 255, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 205, 86, 1)', 'rgba(75, 192, 192, 1)'], // Warna batas untuk setiap bagian lingkaran
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
    </script>

    <script>
        // Mengambil data pengeluaran dari URL /chart/data
        fetch('/chart/data')
            .then(response => response.json())
            .then(data => {
                const pengeluaranLabels = data.pengeluaran.map(item => item.bidang);
                const pengeluaranValues = data.pengeluaran.map(item => item.total);

                const ctxPengeluaran = document.getElementById('pengeluaranChart').getContext('2d');
                const pengeluaranChart = new Chart(ctxPengeluaran, {
                    type: 'pie', // Mengubah tipe chart menjadi 'pie'
                    data: {
                        labels: pengeluaranLabels,
                        datasets: [{
                            label: 'Pengeluaran',
                            data: pengeluaranValues,
                            backgroundColor: ['rgba(0, 123, 255, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 205, 86, 0.5)', 'rgba(75, 192, 192, 0.5)'], // Warna latar belakang untuk setiap bagian lingkaran
                            borderColor: ['rgba(0, 123, 255, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 205, 86, 1)', 'rgba(75, 192, 192, 1)'], // Warna batas untuk setiap bagian lingkaran
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
    </script>
</body>
</html>
