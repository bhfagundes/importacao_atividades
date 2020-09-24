@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('apiReceitaFederalCnpjs.index') !!}">Api Receita Federal Cnpj</a>
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
                              <strong>Edit Api Receita Federal Cnpj</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($apiReceitaFederalCnpj, ['route' => ['apiReceitaFederalCnpjs.update', $apiReceitaFederalCnpj->id], 'method' => 'patch']) !!}

                              @include('api_receita_federal_cnpjs.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection