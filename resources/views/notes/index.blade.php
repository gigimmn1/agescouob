@extends('layouts.default')

@section('content')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

  <div class="container-fluid">
    <div class='row'>
        <a style="margin: 10px;" href="{{ route('notes.create')}}" class="btn btn-primary">Ajouter une note</a>
        <a style="margin: 10px;" href="" class="btn btn-primary">Generer un rapport</a>
    </div>
    

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
             
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Gestion des notes</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Libelle</th>
                      <td colspan = 3>Actions</td>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Libelle</th>
                      <td colspan = 3>Actions</td>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($notes as $note)
                    <tr>
                        <td>{{$note->id}}</td>
                        <td>{{$note->libelle_note}}</td>
                        <td>
                            <a href="{{ route('notes.show',$note->id)}}" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('notes.edit',$note->id)}}" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-exclamation-triangle"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('notes.destroy', $note->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-circle btn-sm" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
               
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection




