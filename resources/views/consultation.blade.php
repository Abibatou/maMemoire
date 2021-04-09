@extends('admin')
@section('content')
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Consultations</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<table class="table table-striped" style="margin-top:40px">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient</th>
      <th scope="col">Date de consultation</th>
      <th scope="col">Docteur</th>
      <th scope="col">Département</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>20.11.2020</td>
      <td>DR. Fulgence</td>
      <td>Eye</td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
@endsection