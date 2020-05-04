@extends('layouts.master')
@section('content')
    <div class="w-90 mx-auto py-5 mt-3">
        <div class="text-center">
            <h1 class="text-3xl">List Of All Users</h1>
        </div>
        <div class="bg-white mt-5 ">
            <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Names</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ implode(',',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                    <td>
                    <a href="{{ route('admin.users.edit', $user->id) }}">
                            <button class="btn btn-sm btn-warning float-left mx-1">Edit</button>
                        </a>
                    <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
                        @csrf
                        {{ method_field('DELETE' )}}
                          <button type="submit" class="btn btn-sm btn-danger float-left mx-1">Delete</button>
                    </form>
                    </td>
                    </tr>  
                  @endforeach  
                </tbody>
              </table>
        </div>
    </div>
@endsection