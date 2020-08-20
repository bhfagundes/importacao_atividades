@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('dataAtividadeEvidencias.index') !!}">Data Atividade Evidencia</a>
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
                              <strong>Edit Data Atividade Evidencia</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($dataAtividadeEvidencia, ['route' => ['dataAtividadeEvidencias.update', $dataAtividadeEvidencia->id], 'method' => 'patch']) !!}

                              @include('data_atividade_evidencias.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection