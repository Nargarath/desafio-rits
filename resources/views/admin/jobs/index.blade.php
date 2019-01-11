@extends('adminlte::page')

@section('title', 'Rits Carreira - Admin - Vagas')

@section('content_header')
    <h1>Vagas de trabalho</h1>
@stop

@section('content')
@include('admin.components.messages')
    <div class="form-group text-right" role="group">
        <a id="button-create-company" href="{{ route('admin.jobs.create')}}">Cadastrar Vaga</a>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabela de Vagas</h3>
        </div>
        <div class="box-body">
            <table id="jobsTable" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome do Trabalho</th>
                        <th>Empresa</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->name }} </td>
                        <td>{{ $job->company->name }}</td>
                        <td>{{ $job->status }} </td>
                        <td>
                            <a href="{{route('admin.jobs.edit',['id'=>$job->id])}}">
                            <i class="fa fa-fw fa-pencil"></i>
                            </a>
                            <a href="{{route('admin.jobs.destroy',['id'=>$job->id])}}" onclick="return confirm('Tem certeza?');">
                                <i class="fa fa-fw fa-trash"></i>
                            </a>
                            <a role="button" data-toggle="modal" class="modal-show" data-target="#job-{{$job->id}}" title="Vaga - {{$job->id}} - {{$job->name}}">
                                <i class="fa fa-fw fa-search"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    @push('js')
    <script>
        $(document).ready(function(){
        
        $("#jobsTable").DataTable();
        
        });
        
    </script>
    @endpush
@stop
   
    


