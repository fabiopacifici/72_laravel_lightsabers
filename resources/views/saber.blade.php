@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center py-2 mt-4 text-uppercase">Spade Laser</h1>


  <section class="sabers row row-cols-1 row-cols-md-3 g-4">
    @forelse($sabers as $saber)
    <div class="col">
      <div class="card">
        <img src="{{$saber['img']}}" alt="" class="card-img-top">
        <div class="card-body">
          <h4>{{$saber['name']}}</h4>
          <div class="price">{{$saber['price']}}</div>
        </div>
      </div>
    </div>
    @empty
    <div class="col">
      <p>No sabers in this shop yet.</p>
    </div>
    @endforelse
  </section>

</div>
@endsection
