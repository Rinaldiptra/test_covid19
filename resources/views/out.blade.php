@extends('layouts.app')

@section('content')
<style>
    a {
      text-align: "center";
    }
  </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="{{ url('/score/'.Auth::user()->id)}}" class="btn btn-primary" >Lihat Hasil</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection