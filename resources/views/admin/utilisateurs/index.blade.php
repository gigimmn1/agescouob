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
            <h2>Gestion des utilisateurs</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home')}}">Tableau de bord</a>
                </li>
                <li class="active">
                    <strong>Gestion des utilisateurs</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Liste des utilisateurs</h5>
                    </div>
                    <div class="ibox-content">
                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form-create">Créer un nouvel utilisateur</a>
                        <!-- Appel du Formulaire modal -->
                        @include('admin.utilisateurs.create')
                        <!-- Fin Appel du Formulaire modal -->
                    </div>
                    <div class="ibox-content">
                        
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom_utilisateur</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th colspan = 3>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        {{ implode(', ', $user->roles()->pluck('nom')->toArray()) }}   
                                    </td>
                                    <td>
                                        <div >
                                            <a data-toggle="modal" class="btn btn-info btn-circle btn-sm" href="#modal-form-show{{$user->id}}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <!-- Appel du Formulaire modal -->
                                            @include('admin.utilisateurs.show')
                                            <!-- Fin Appel du Formulaire modal -->
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user)}}" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.users.destroy', $user)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-circle btn-sm" type="submit">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom_utilisateur</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th colspan = 3>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


        

