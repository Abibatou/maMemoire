@extends('admin')
@section('content')

<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ajouter un département</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container" style="margin-top:30px">
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Département</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-6">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
  <div class="col-12"  style="margin-left:650px">
    <button type="submit" class="btn btn-success">Ajouter</button>
  </div>
    </div>
</div>

@endsection