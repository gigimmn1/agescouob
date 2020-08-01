@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modification de la note</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('notes.update', $note->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="libelle_note">Libelle:</label>
                <input type="text" class="form-control" name="libelle_note" value={{ $note->titre }} />
            </div>


            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection