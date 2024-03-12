@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('All Staff') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{-- Table to show all permissions --}}
                    <div>
                        {{-- <span class="btn btn-info float-end" data-url="#" data-target="myModal" data-toggle="modal" >Add Permission</span> --}}
                        <table class="table table-stripped datatable">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </thead>

                            <tbody>
                                @foreach(App\Models\User::staff()->get() as $user)
                                    <tr>
                                        <td>{{$user->fullname()}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('create_permissionuser',['user'=>$user])}}" class="fa fa-pencil">Assign Permission</a>
                                        </td>
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
