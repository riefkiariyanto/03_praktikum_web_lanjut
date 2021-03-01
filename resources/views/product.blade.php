@extends('layouts.main')

@section('title', $data['title'])

@section('content')
<section style="height: 85vh">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">{{$data['message']}}</h1>
      <p class="lead">Pemrogaman Web Lanjut - Pertemuan 3 (Views)</p>
    </div>
  </div>
</section>
@endsection