@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Assign Permission to Staff') }}</div>

                <a href="{{route('staff')}}" class="btn btn-info">Go Back</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{-- Table to show all permissions --}}
                    <div>
                        <form method="post" action="{{route('store_permissionuser')}}" >
                            @csrf

                            @foreach(App\Models\Permission::all() as $permission )
                                <label for="permission_{{$permission->id}}" >{{$permission->name}}</label>
                                <input class="form-check-input" type="checkbox" name="permission_id[]" value="{{$permission->id}}" id="permission_{{$permission->id}}"> <br>
                            @endforeach

                            <input type="text" name="user_id" value="{{$user->id}}" hidden>


                            <input type="submit" class="btn btn-success " value="Save">

                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
