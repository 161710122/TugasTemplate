@extends('layouts.master')
@section('content') 
 <div class="content-wrapper">
   <ol class="breadcrumb" >
        <li class="breadcrumb-item" position = "relative">
          <a href="aldhit21">21WEB</a>
        </li>
        <li class="breadcrumb-item active" >Galeri</li>
      </ol>
 <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="naruto" class="thumbnail">
      <img src="PotoAldhit\logonaruto.jpg" alt="...">
    </a>
  </div>
  Klik Gambar untuk lihat Naruto
  </div>

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="OP" class="thumbnail">
      <img src="PotoAldhit\logoOP.jpg" >
    </a>
  </div>
    Klik Gambar untuk lihat One Piece
</div> 

@endsection