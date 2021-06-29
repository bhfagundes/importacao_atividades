@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('envioNotaServicos.index') !!}">Envio Nota Pre Nota</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong> Envio Nota Pre Nota</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'envioNotaPreNota.store','files' => true]) !!}

                                   @include('envio_nota_pre_nota.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection