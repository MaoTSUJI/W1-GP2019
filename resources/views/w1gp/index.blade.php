@extends('layout')

@section('tittle')
Home Page!!
@endsection

@section('content')
    {{-- カルーセル --}}
    <div class="acontainer">
        {{-- カルーセル --}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
            </div>
            <div class="carousel-item">
            </div>
            <div class="carousel-item">
            </div>
  
          </div>
        </div>
    </div>
    {{-- カルーセル終わり --}}

    {{-- サイト説明 --}}
    <div class="container">
        <h2>Save the Mya-kufutsu</h2>
        <h3>みゃーくふつを救え</h3>　

    </div>


@endsection