@extends('layouts.app')

@section('content')
    <!-- Main Content -->

    <div class="container-xxl">
        <h1>upload</h1>

        <form action="{{route('fileupload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="catname">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file">
            </div>

            <input type="submit" value="submit">
        </form>


    </div>
    <!-- /Main Content -->
@endsection
