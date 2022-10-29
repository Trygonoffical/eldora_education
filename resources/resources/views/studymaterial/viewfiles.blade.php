@extends('layouts.app')

@section('content')
    <!-- Main Content -->

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
                                        <th>File Type</th>
                                        <th>File Name</th>
                                        <th>Updated on</th>
                                        <th>Edit/Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        @if ( count($std) > 0)
                                            @foreach ($std as $item)
                                            <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="media align-items-center">
                                                    {{-- <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('default_images/pdf.png')}}" alt="user" class="avatar-img">
                                                        </div>
                                                    </div> --}}
                                                    <div class="media-head me-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('default_images/pdf.png')}}" alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-high-em">{{$item->file}}</div> 
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                               <div>{{$item->catname}}</div>
                                            </td>
                                            <td>{{$item->created_at}}</td>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    
                                                    
                                                    <a type="submit" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="/stdDel/{{$item->id}}/edit/"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>


                                                    <form action="{{route('stdDel.destroy', $item->id)}}" method="post">
                                                       
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" type="submit" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                                            <span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span>
                                                        </button>
                                                    </form>
                                                   
                                                   
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
    





    <!-- /Main Content -->
@endsection

