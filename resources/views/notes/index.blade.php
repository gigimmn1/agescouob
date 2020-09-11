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
                    <h2>Data Tables</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


            <div class="wrapper wrapper-content animated fadeInRight">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Editable Table in- combination with jEditable</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="">
                                    <a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary ">Add a new row</a>
                                </div>
                                <table class="table table-striped table-bordered table-hover " id="editable" >
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Libelle</th>
                                            <th colspan = 3>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $etudiant)
                                        <tr >
                                            <td>{{$etudiant->name}}</td>
                                            <td>{{$etudiant->email}}</td>
                                            <td>
                                                <a href="{{ route('notes.show',$etudiant->id)}}" class="btn btn-info btn-circle btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('notes.edit',$etudiant->id)}}" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('notes.destroy', $etudiant->id)}}" method="post">
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
                                            <th>Libelle</th>
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


        

