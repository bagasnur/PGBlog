@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    Create Article
    </h1>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-12">
        <div class="box box-primary">

                <form method="POST" action="{{ route('createarticle') }}" class="form-horizontal">
                    @csrf
                    <div class="box-body">    
                        <input name="id" id="id" hidden>
                        <div class="but">
                            <label class="col-sm-2 control-label">Judul Artikel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                        </div>
                        <div  class="but">
                            <label class="col-sm-2 control-label">Konten</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="content" required></textarea>
                            </div>
                        </div>
                        <div  class="but">
                            <label class="col-sm-2 control-label">Kategori</label>
                            <div class="col-sm-10">
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $datkategori)
                                        <option value="{{ $datkategori->id }}">{{ $datkategori->name }}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <button type="submit" name="save" class="col-sm-5 btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
          
        </div>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
@endsection
