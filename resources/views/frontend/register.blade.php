@extends('frontend.layout')
@section('content')

    

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
       <form>
  <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="registername" type="name" class="form-control" id="registername" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name ="email" type="email" class="form-control" id="inputemail" placeholder="Email">
    </div>
  </div>
    <div class="form-group row">
    <label for="ICNo" class="col-sm-2 col-form-label">ICNo</label>
    <div class="col-sm-10">
      <input name ="ICNo" type="ICNo" class="form-control" id="inputICNo" placeholder="IC No without dash (-)">
    </div>
  </div>
    <div class="form-group row">
    <label for="Password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name ="Pasword" type="Password" class="form-control" id="inputpassword" placeholder="Password">
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

 