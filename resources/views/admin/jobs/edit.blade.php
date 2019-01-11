@extends('adminlte::page')

@section('title', 'Rits Carreira - Admin - Vagas')

@section('content_header')
    <h1>Vagas de trabalho</h1>
@stop

@section('content')
    <div class="box">
        @include('admin.components.messages')
        <div class="box-header">
            <h3 class="box-title">Editar Vaga - {{$job->name}}</h3>
        </div>
        <div class="box-body">
            <form method="post" action="{{route('admin.jobs.update',['id'=>$job->id])}}">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="name" value="{{$job->name??old('name')}}" placeholder="Digite o nome da vaga">
                </div>
                <div class="form-group">
                    <label>Empresa</label>
                    <select class="form-control" name="company_id">
                        @foreach ($companies as $company )
                        <option {{$job->company->id == $company->id||old('company_name')==$company->id?'selected':''}} value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option {{old('status') == 'A'||$job->status=='A' ?'selected':''}} value="A">Ativa</option>
                        <option {{old('status') == 'F'||$job->status=='F' ?'selected':''}} value="F">Fechada</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>
    
    @push('js')
    
    @endpush
@stop
   
    


