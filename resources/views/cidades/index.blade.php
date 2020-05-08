@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Cidades</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Cidades
                             <a class="pull-right" href="{{ route('cidades.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                      
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

