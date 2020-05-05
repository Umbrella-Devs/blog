@extends('layouts.master')
@section('content')
    <div class="w-90 mx-auto py-3">
        <div class="text-center py-3">
            <h1 class="text-3xl">Update {{ $user->name }}</h1>
        </div>
        <div class="w-60 mx-auto py-3">
            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                @csrf
                {{ method_field('PUTCH') }}
                <div>
                    <label>Name : </label>
                    <input class="form-input" type="text" name="name" value="{{ $user->name }}">
                </div>
                <div class="pt-2">
                    <label>Email : </label>
                    <input class="form-input" type="text" name="name" value="{{ $user->email }}">
                </div>
                <div class="pt-2">
                    <label>Roles : </label>
                    @foreach ($roles as $role)
                    <input class="" type="checkbox" value="{{ $role->id }}">{{ $role->name }}  
                    @endforeach
                    
                </div>

            </form>
        </div>
    </div>
@endsection