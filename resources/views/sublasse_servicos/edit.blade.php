@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('sublasseServicos.index') !!}">Sublasse Servico</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Sublasse Servico</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($sublasseServico, ['route' => ['sublasseServicos.update', $sublasseServico->id], 'method' => 'patch']) !!}

                              @include('sublasse_servicos.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection