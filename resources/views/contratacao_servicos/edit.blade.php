@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('contratacaoServicos.index') !!}">Contratacao Servico</a>
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
                              <strong>Edit Contratacao Servico</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($contratacaoServico, ['route' => ['contratacaoServicos.update', $contratacaoServico->id], 'method' => 'patch']) !!}

                              @include('contratacao_servicos.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection