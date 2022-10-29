@extends('layouts.app')

@section('content')
    <!-- Main Content -->

    <div class="container-xxl">
        <h1>Update</h1>

        <form action="{{route('stdDel.update', $edit->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" name="ucatname" value={{$edit->catname}}>
               
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file" placeholder={{$edit->file}}>
            </div>

            <input type="submit" value="Update">
        </form>


    </div>
    <!-- /Main Content -->
@endsection
