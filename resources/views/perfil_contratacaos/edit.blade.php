@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('perfilContratacaos.index') !!}">Perfil Contratacao</a>
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
                              <strong>Edit Perfil Contratacao</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($perfilContratacao, ['route' => ['perfilContratacaos.update', $perfilContratacao->id], 'method' => 'patch']) !!}

                              @include('perfil_contratacaos.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection