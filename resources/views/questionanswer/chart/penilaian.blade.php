<canvas id="penilaian"></canvas>
@push('js')
    <script>
        $.ajax({
            url: "{{ route('chart.penilaian') }}",
            type: "GET",
            success: function(res) {
                const ctx = document.getElementById('penilaian');
                const data = {
                    labels: ['Laki-Laki', 'Perempuan'],
                    datasets: [{
                        label: 'Alumni',
                        data: [res.lk, res.pr],
                        backgroundColor: [
                            '#FF0080',
                            '#7469B6',
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
                                text: 'Grafik Responded Berdasarkan Jawaban Kategori Penilaian'
                            }
                        }
                    },
                };
                new Chart(ctx, config);
            }
        })
    </script>
@endpush