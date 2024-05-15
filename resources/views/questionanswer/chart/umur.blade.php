<canvas id="umur"></canvas>
@push('js')
    <script>
        $.ajax({
            url: "{{ route('chart.umur') }}",
            type: "GET",
            success: function(res) {
                const ctx = document.getElementById('umur');
                const data = {
                    labels: ['Remaja (15-24 tahun)', 'Dewasa (25-44 tahun)'],
                    datasets: [{
                        label: 'Alumni',
                        data: [res.remaja, res.dewasa],
                        backgroundColor: [
                            '#FFAF61',
                            '#03AED2',
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
                                text: 'Grafik Responded Berdasarkan Umur'
                            }
                        }
                    },
                };
                new Chart(ctx, config);
            }
        })
    </script>
@endpush
