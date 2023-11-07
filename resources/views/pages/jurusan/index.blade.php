@extends('layouts.app') @section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach($majors as $major)
                <div class="col-md-3">
                    <div class="card">
                        <div
                            class="card-body d-flex flex-column align-items-center"
                        >
                            <h4>{{ $major->major_name }}</h4>
                            <div class="row">
                                <button class="btn btn-warning mx-3">
                                    Edit
                                </button>
                                <button class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection @section('scripts')
<!-- <script>
    alert("ini dashboard");
</script> -->
@endsection
