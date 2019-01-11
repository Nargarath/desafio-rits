@extends('adminlte::page')

@section('title', 'Rits Carreira - Admin - Candidatos')

@section('content_header')
    <h1>Candidatos</h1>
@stop

@section('content')
@include('admin.components.messages')
    <div class="form-group text-right" role="group">
        <a id="button-create-company" href="{{ route('admin.candidates.create')}}">Cadastrar Candidato</a>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabela de Candidatos</h3>
        </div>
        <div class="box-body">
            <table id="candidatesTable" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Linkedin</th>
                        <th>Curriculum</th>
                        <th>Pretenção Salarial</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($candidates as $candidate)
                    <tr>
                        <td>{{ $candidate->name }} </td>
                        <td><a target="_blank" href="mailto:{{ $candidate->email }}">{{ $candidate->email }}</a> </td>
                        <td>{{ $candidate->phone }} </td>
                        <td><a target="_blank" href="{{ $candidate->linkedin }}">{{ $candidate->linkedin }} </a> </td>
                        <td><a target="_blank" href="{{ url('/').'/storage/curriculums/'.$candidate->curriculum->name}}" >{{ $candidate->curriculum->name}}</a> </td>
                        <td>{{ $candidate->salary_pretension }} </td>
                        <td>
                            <a href="{{route('admin.jobs.edit',['id'=>$candidate->id])}}">
                            <i class="fa fa-fw fa-pencil"></i>
                            </a>
                            <a href="{{route('admin.jobs.destroy',['id'=>$candidate->id])}}" onclick="return confirm('Tem certeza?');">
                                <i class="fa fa-fw fa-trash"></i>
                            </a>
                            <a role="button" data-toggle="modal" class="modal-show" data-target="#job-{{$candidate->id}}" title="Vaga - {{$candidate->id}} - {{$candidate->name}}">
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
        
        $("#candidatesTable").DataTable();
        
        });
        
    </script>
    @endpush
@stop
   
    


