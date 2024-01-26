@extends('admin/layout/index')
@section('title', 'Create Blog')

@push('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css" />
@endpush

@section('content-header')
    <h1>
        Create a Blog
    </h1>
@endsection
@section('breadcrumb')
    <li>
        <a href="#"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li><a href="#">Blog</a></li>
    <li class="active">Create blog</li>
@endsection

@section('main-content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>
        </div>
        <div class="box-body">
            <textarea id="lelele"></textarea>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">Footer</div>
        <!-- /.box-footer-->
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush

@section('code')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("lelele"),
        });
    </script>
@endsection
