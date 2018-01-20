@extends('layouts.master')
@section('content') 
 <div class="content-wrapper">
   
   <ol class="breadcrumb" >
        <li class="breadcrumb-item" position = "relative">
          <a href="aldhit21">21WEB</a>
        </li>
        <li>
          <a href="galeri">Galeri</a>
        </li>
        <li class="breadcrumb-item active" >OnePiece</li>
      </ol>
<h1>One Piece</h1>
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="PotoAldhit\sabo.jpg"   style= "max-height:125px;max-width:125px;margin-top:7px;">
      <div class="caption">
        <h3>Sabo</h3>
        <p>Sabo adalah kaka tertua dari Ace dan Luffy di animasi One Piece</p>
        <p><a href="PotoAldhit\sabo.jpg" class="btn btn-primary" role="button">Lihat</a> 
      </div>
    </div>
  </div>

   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="PotoAldhit\ace.jpg"   style= "max-height:125px;max-width:125px;margin-top:7px;">
      <div class="caption">
        <h3>Portgas D Ace</h3>
        <p>Ace adalah adik dari Sabo dan kaka dari Luffy dalam animasi One Piece</p>
        <p><a href="PotoAldhit\ace.jpg" class="btn btn-primary" role="button">Lihat</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="PotoAldhit\luffy.jpg"   style= "max-height:125px;max-width:125px;margin-top:7px;">
      <div class="caption">
        <h3>Monkey D Luffy</h3>
        <p>Luffy adalah adik dari Ace dan Sabo sekaligus Pemeran Utama dalam animasi One Piece</p>
        <p><a href="PotoAldhit\luffy.jpg" class="btn btn-primary" role="button">Lihat</a> </p>
      </div>
    </div>
  </div>
  
</center>
@endsection