<canvas id="penilaian"></canvas>
@push('js')
    <script>
        $.ajax({
            url: "{{ route('chart.penilaian') }}",
            type: "GET",
            success: function(res) {
                var data = res.map((val) => {
                    return val.count
                })
                var xValues = ['Setuju', 'Tidak Setuju', 'Sangat Setuju', 'Sangat Tidak Setuju'];
                var yValues = data;
                var barColors = ["#DFD0B8", "#948979", "#3C5B6F", "#153448"];
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
                new Chart("penilaian", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            axis: 'y',
                            label: 'Grafik Responded Berdasarkan Jawaban Kategori Penilaian',
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                }).getContext('2d');
            }
        })
    </script>
@endpush
