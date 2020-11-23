<!-- modal creation d'dutilisateur -->
<div id="modal-form-create-evaluation" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-content-center text-center justify-content-center">
                <h1 class="modal-title">Nouvel utilisateur</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="m-t" role="form" method="POST" action="{{ route('admin.users.store') }}">
                    @csrf
                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom de l'utilisateur" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="role" name="roles[]">
                            <option value="4">Etudiant</option>
                            <option value="5">Enseignant</option>
                            <option value="6">Parent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Saisir un mot de passe" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control form-control-user" placeholder="confirmer mot de passe" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn btn-primary block full-width m-b">Créer</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- fin modal creation d'dutilisateur -->