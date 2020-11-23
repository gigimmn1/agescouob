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
            <h2>Gestion des notes</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home')}}">Tableau de bord</a>
                </li>
                <li class="active">
                    <strong>Gestion des notes</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Notes des etudiants</h5>
                    </div>
                    <div class="ibox-content">
                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form-create-evaluation">Ajouter une évaluation</a>
                        <!-- Appel du Formulaire modal -->
                        @include('notes.evaluations.create')
                        <!-- Fin Appel du Formulaire modal -->
                    </div>
                    <div class="ibox-content">
                        
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Classe</th>
                                    <th>Evaluations</th>
                                    <th>Moyenne</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($etudiants as $etudiant)
                                <tr>
                                    <td>{{$etudiant->num_Etudiant}}</td>
                                    <td>{{$etudiant->nom_Etudiant}}</td>
                                    <td>{{$etudiant->prenom_Etudiant}}</td>
                                    <td>
                                        ---   
                                    </td>
                                    <td>
                                        ---   
                                    </td>
                                    <td>
                                        ---   
                                    </td>
                                    <td>
                                        <div >
                                            <a data-toggle="modal" class="btn btn-info btn-circle btn-sm" href="#modal-form-show{{$etudiant->num_Etudiant}}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <!-- Appel du Formulaire modal -->
                                            @include('notes.show')
                                            <!-- Fin Appel du Formulaire modal -->
                                        </div>
                                    </td>
                                 

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Num</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Classe</th>
                                    <th>Evaluations</th>
                                    <th>Moyenne</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


        

