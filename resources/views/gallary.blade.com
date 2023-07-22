@extends('layout')
 @section('title')

<p> Contacts</p>

@endsection
@section('content')

<p>This is my Galary</p>




@endsection