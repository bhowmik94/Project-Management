@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    <ul class="list-group">
      @foreach($companies as $company)
      <li class="list-group-item">{{ $company->name }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endsection
