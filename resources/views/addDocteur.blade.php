@extends('admin')
@section('content')

<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Docteurs</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Prenom</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Date de naissance</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Phone</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6" >
    <label for="inputPassword4" class="form-label">Genre</label>
    <div class="row">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Homme
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Femme
        </label>
      </div>
  </div>
  <div class="col-md-12" style="margin-top:30px">
    <label for="inputState" class="form-label">Spécialiste</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  
  
  
  
  <div class="col-12" style="margin-top:50px">
    <button type="submit" class="btn btn-success">Ajouter</button>
  </div>
</form>
</div>
</div>

@endsection