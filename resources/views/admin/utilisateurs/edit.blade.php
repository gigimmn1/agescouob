@extends('layouts.default')

@section('content')
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
    </div>

       
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Modification de compte</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home')}}">Tableau de bord</a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index')}}">Utilisateurs</a>
                </li>
                <li class="active">
                    <strong>Modification de compte</strong>
                </li>
            </ol>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Editer le compte de <strong>{{ $user->name }}</strong></h5>
                    </div>
                    <div class="ibox-content">
                        

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
