@extends('layout.layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
    <div class="mt-5">
    @if($errors->any())
      <div class="col-12">
          @foreach($errors->all() as $error)
            <div class="alert alert-danger ">{{$error}}</div>
          @endforeach
      </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    </div>
    <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1">Fullname</label>
    <input type="text" class="form-control" placeholder="Enter Fullname" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Password" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Role:</label>
    <select class="form-select mb-3" name="role">
    <option value="1">Admin</option>
    <option value="2">Student</option>
    <option value="3">Teacher</option>
    </select>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection