@extends('layouts.app')

@section('title', 'comic')
    
@section('main_content')
<?php 


// $key = $_GET["key"];


?> 
<div class="container clearfix white">
    <div class="card_info">
       <h2 class="" >{{ $comic->title }}</h2>
        <div class="shadow">
            <img class="thumb my-20" src="{{ $comic->thumb }}" alt="">
        </div>
        
        <p>{{$comic->description}}</p>
        <div class="prezzo my-20">{{$comic->price}}</div>
        
    </div>
    
</div>
    
    

@endsection