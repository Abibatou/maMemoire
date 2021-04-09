@extends('admin')
@section('content')
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Départements</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div style='text-align:right'>
    <a href="/addDepartement"><button class="btn btn-success" type="button" style="margin-right:15px"><i class="fa fa-plus" style="margin-right:10px"></i>Ajouter un département</button></a>
</div>

<table class="table table-striped" style="margin-top:40px">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Département</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Cancer departement</td>
      <td>This is the test cancer departement for the hospital</td>
      <td><button type="button" class="btn btn-outline-info" style="background-color:#35ebf2">Active</button></td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Eyes departement</td>
      <td>This is the eye departement for the hospital</td>
      <td><button type="button" class="btn btn-outline-info" style="background-color:#35ebf2">Active</button></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
@endsection