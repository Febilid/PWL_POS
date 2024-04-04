@extends('layouts.template') 

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Level Pengguna</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="level_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Level</th>
                                        <th>Nama Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($level as $item)
                                        <tr>
                                            <td>{{ $item->level_id }}</td>
                                            <td>{{ $item->level_kode }}</td>
                                            <td>{{ $item->level_nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('#level_table').DataTable();
        });
    </script>
@endpush
