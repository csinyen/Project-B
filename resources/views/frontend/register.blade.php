@extends('frontend.layout')
@section('content')

    

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>Register New User</h1>

@include ('common.alert')
@include ('common.form_error')

       <form method="POST" action="{{ route('user.register.post')  }}">
        @csrf
  <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="name" type="name" class="form-control" id="registername" placeholder="Name"value="{{old('name')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name ="email" type="email" class="form-control" id="email" placeholder="Email"value="{{old('email')}}">
    </div>
  </div>
    <div class="form-group row">
    <label for="IC" class="col-sm-2 col-form-label">IC</label>
    <div class="col-sm-10">
      <input name ="ic" type="icno" class="form-control" id="ic" placeholder="IC No without dash (-)"value="{{old('ic')}}">
    </div>
  </div>
    <div class="form-group row">
    <label for="Password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name ="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>
</form>
      </div>
    </section>

 