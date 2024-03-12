@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Permissions') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{-- Table to show all permissions --}}
                    <div>
                        <span class="btn btn-info float-end" data-url="{{route('create_permission')}}" data-target="myModal" data-toggle="modal" >Add Permission</span>
                        <table class="table table-stripped datatable">
                            <thead>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </thead>

                            <tbody>
                                @foreach(App\Models\Permission::all() as $permission)
                                    <tr>
                                        <td>{{$permission->name}}</td>
                                        <td>{{$permission->slug}}</td>
                                        <td>Hey</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
