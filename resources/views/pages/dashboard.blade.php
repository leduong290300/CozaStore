@extends('layouts.administration')
@section('page','Dashboard')
@section('card')
<div class="row">
    <x-card-product/>
    <x-card-order/>
</div>
@endsection
@section('content')
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-chart-area me-1"></i>
        Area Chart
      </div>
      <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-chart-bar me-1"></i>
        Bar Chart
      </div>
      <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
    </div>
  </div>
@endsection
