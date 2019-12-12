@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    Page Post
    </h1>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-12">
        <div class="box box-primary">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width:50px">ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th style="width:150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $datartikel)
                        <tr>
                            <td style="width:50px">{{ $datartikel->id }}</td>
                            <td>{{ $datartikel->name }}</td>
                            <td>{{ $datartikel->category_id }}</td>
                            <td>{{ $datartikel->created_at }}</td>
                            <td>{{ $datartikel->updated_at }}</td>
                            <td style="width:150px">
                                <a href="/adelete/{{ $datartikel->id }}" class="btn btn-danger btn-flat">
                                    <span class="text">Delete</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>

</section>
<!-- /.content -->
@endsection
