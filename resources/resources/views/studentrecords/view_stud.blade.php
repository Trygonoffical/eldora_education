@extends('layouts.app')

@section('content')


  <div class="hk-pg-body">
        <div class="row">
            <div class="col-md-12 mb-md-4 mb-3">
                <div class="card card-border mb-0 h-100">
                    
                    <div class="card-body">
                        <div class="contact-list-view">
                            <table id="datable_1" class="table nowrap w-100 mb-5">
                                <thead>
                                    <tr>
                                        <th><span class="form-check fs-6 mb-0">
                                            <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </span></th>
                                        <th>Student Name</th>
                                        <th>Student Emailid</th>
                                        <th>Updated on</th>
                                        <th>Edit/Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        @if ( count($data) > 0)
                                            @foreach ($data as $ur)
                                            <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>{{$ur->name}}</div>
                                            </td>
                                            <td>
                                               <div>{{$ur->email}}</div>
                                            </td>
                                            <td>{{$ur->created_at}}</td>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    
                                                    
                                                    <a type="submit" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="{{route('userDel.edit', $ur->id )}}"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>


                                                    <form action="{{route('userDel.destroy', $ur->id)}}" method="post">
                                                       
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" type="submit" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                                            <span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span>
                                                        </button>
                                                    </form>
                                                   
                                                    {{-- <a class="" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"></a> --}}
                                                </div>
                                            </td>
                                        </tr>
                                            @endforeach
                                        @else
                                            
                                        @endif
                                        
                                    
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        









    </div>
@endsection