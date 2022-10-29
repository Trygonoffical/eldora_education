@extends('layouts.app')

@section('content')
    <!-- Main Content -->

    <div class="container-xxl">
        <h1>Update</h1>

        <form action="{{route('userDel.update', $edit_records->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" name="upname" value={{$edit_records->name}}>
               
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value={{$edit_records->email}}>
               
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Update Password" >
               
            </div>
            

            <input type="submit" value="Update">
        </form>


    </div>
    <!-- /Main Content -->
@endsection
