@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    Create Category
    </h1>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-12">
        <div class="box box-primary">

                <form method="POST" action="{{ route('cc') }}" class="form-horizontal">
                    @csrf
                    <div class="box-body">    
                        <input name="id" id="id" hidden>
                        <div>
                            <label class="col-sm-2 control-label">Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <button type="submit" name="save" class="col-sm-2 btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
                <br><br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width:50px">ID</th>
                            <th>Category</th>
                            <th style="width:150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $datkategori)
                        <tr>
                            <td style="width:50px">{{ $datkategori->id }}</td>
                            <td>{{ $datkategori->name }}</td>
                            <td style="width:150px">
                                <a href="/cdelete/{{ $datkategori->id }}" class="btn btn-danger btn-flat">
                                    <span class="text">Delete</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
          
        </div>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
@endsection
