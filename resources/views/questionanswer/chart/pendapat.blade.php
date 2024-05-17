<canvas id="pendapat"></canvas>
@push('js')
    <script>
        $.ajax({
            url: "{{ route('chart.pendapat') }}",
            type: "GET",
            success: function(res) {
                var data = res.map((val) => {
                    return val.count
                })
                var xValues = ['Setuju', 'Tidak Setuju', 'Sangat Setuju', 'Sangat Tidak Setuju'];
                var yValues = data;
                var barColors = ["#153448", "#3C5B6F", "#948979", "#DFD0B8"];
                const config = {
                    type: 'bar',
                    data: yValues,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Chart.js Bar Chart'
                            }
                        }
                    },
                };
                new Chart("pendapat", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            axis: 'y',
                            label: 'Grafik Responded Berdasarkan Jawaban Kategori Pendapat',
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                });
            }
        })
    </script>
@endpush
