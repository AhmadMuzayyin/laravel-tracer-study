<canvas id="chart"></canvas>
@push('js')
    <script>
        $.ajax({
            url: "{{ route('chart.alumni') }}",
            type: "GET",
            success: function(res) {
                const ctx = document.getElementById('chart');
                const data = {
                    labels: ['Suda Mengisi', 'Belum Mengisi'],
                    datasets: [{
                        label: 'Alumni',
                        data: res.datasets,
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                        ],
                        hoverOffset: 4
                    }]
                }
                const config = {
                    type: 'doughnut',
                    data: data,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Grafik Responded Berdasarkan Alumni'
                            }
                        }
                    },
                };
                new Chart(ctx, config);
            }
        })
    </script>
@endpush
