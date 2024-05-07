@extends('layouts.admin', ['heading' => 'Data Jawaban'])

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row mb-2">
                        <div class="col">
                        </div>
                        <div class="col text-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addJawaban">
                                <i class="fas fa-plus"></i> Jawaban
                            </button>
                        </div>
                        <x-modal-basic id="addJawaban" size="modal-xl">
                            <form action="{{ route('answer.store') }}" method="post">
                                @csrf
                                @include('answer.include.form')
                            </form>
                        </x-modal-basic>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-resposive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pertanyaan</th>
                                    <th>Pilihan Jawaban</th>
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
                data: 'name',
                name: 'name',
            },
            {
                data: 'answer',
                render: function(data) {
                    if (data != null) {
                        return data.jawaban_pertama + ', ' + data.jawaban_kedua + ', ' + data.jawaban_ketiga +
                            ', ' +
                            data.jawaban_keempat
                    } else {
                        return '-'
                    }
                },
                name: 'answer',
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
            ajax: "{{ route('answer.index') }}",
            columns: columns,
            layout: {
                topStart: {
                    buttons: ['colvis']
                }
            },
        })
    </script>
@endpush
