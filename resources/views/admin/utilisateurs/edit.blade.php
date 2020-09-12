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
                        <form action="{{ route('admin.users.update', $user)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom de l'utilisateur" name="name" value="{{ $user->name }}" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse email" name="email" value="{{ $user->email }}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            @foreach ($roles as $role)
                                <div class="checkbox-inline">
                                
                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="{{ $role->id }}"
                                    @foreach ($user->roles as $userRole)
                                        @if ($userRole->id === $role->id) checked @endif
                                    @endforeach>
                                    <label for="{{ $role->id }}"> {{ $role->nom }} </label>
                                </div>
                            @endforeach
                            <br><br>
                            <div class="form-group ">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ $user->password }}" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control form-control-user" value="{{ $user->password }}" name="password_confirmation" required>
                            </div>
                            
                            <button class="btn btn-primary mt-4" type="submit">Mettre à jour</button>                           
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
