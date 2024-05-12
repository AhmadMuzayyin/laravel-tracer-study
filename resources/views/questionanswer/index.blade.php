@extends('layouts.admin', ['heading' => 'Data Jawaban Alumni'])

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="table-resposive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Jawaban / Pertanyaan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        let columns = [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'user.name',
                name: 'user',
            },
            {
                data: 'user',
                render: function(data) {
                    if (data.alumni != null) {
                        return data.alumni.alamat
                    } else {
                        return '-'
                    }
                },
                name: 'user'
            },
            {
                data: 'user.email',
                name: 'user',
            },
            {
                data: 'count',
                name: 'count',
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('questionanswer.index') }}",
            columns: columns,
            layout: {
                topStart: {
                    buttons: ['colvis']
                }
            },
        })
    </script>
@endpush
