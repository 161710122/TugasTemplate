@extends('layouts.master')
@section('content')
 <div class="content-wrapper">
   
   <ol class="breadcrumb" >
        <li class="breadcrumb-item" position = "relative">
          <a href="aldhit21">21WEB</a>
        </li>
        <li class="breadcrumb-item active" >Data Table</li>
      </ol>
<div class="container">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1>Data Orang Keren</h1> </div>
  <div class="panel-body">
    <h1 class="my-4">
        <small>Padahal mah Kumaha saya Weh</small>
      </h1>
  </div>
<div class="text-center">
  <!-- Table -->
  <table class="table">
<th>ID</th>
<th>NIS</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Cita-Cita</th>
<th>Hobi</th>
<th>Foto</th>
@foreach($ald as $dhit)
<tr>
<td>{{$dhit -> id}}</td>
<td>{{$dhit -> nis}}</td> 
<td>{{$dhit -> nama}}</td> 
<td>{{$dhit -> tempat_lahir}}</td> 
<td>{{$dhit -> tanggal_lahir}}</td> 
<td>{{$dhit -> alamat}}</td> 
<td>{{$dhit -> cita_cita}}</td> 
<td>{{$dhit -> hobi}}</td>
<td><img src="{{ asset('PotoAldhit/'.$dhit->foto)  }}" style="max-height:125px;max-width:125px;margin-top:7px;"></td>
</tr>
@endforeach
</table></div></div>
</div>
@endsection