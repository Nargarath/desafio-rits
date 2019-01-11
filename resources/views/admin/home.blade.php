@extends('adminlte::page')

@section('title', 'Rits Carreira - Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-blue"><i class="fa fa-building-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Empresas</span>
                    <span class="info-box-number">{{$companies}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-sm-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-briefcase"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Vagas</span>
                    <span class="info-box-number">{{$jobs}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-sm-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-green"><i class="fa fa-address-card-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Candidatos</span>
                    <span class="info-box-number">{{$candidates}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-sm-3">
                <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-orange"><i class="fa fa-handshake-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Contratados</span>
                    <span class="info-box-number">{{$hireds}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>
    
      
@stop
