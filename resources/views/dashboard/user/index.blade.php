@extends('dashboard.user.partials.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Selamat datang, {{ auth()->user()->name }}!</h1>
</div>
<div class="">
    ini user ya.
</div>
@endsection