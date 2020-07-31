@include('layouts.head')


<body class="bg-gradient-success">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <img width="10" class="col-lg-5 d-none d-lg-block" src="{{ asset('img/UOB2.png') }}" alt="">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">S'inscrire!</h1>
              </div>
              <form class="user" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-control-user" placeholder="votre nom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  
                </div>
                <div class="form-group">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-user" placeholder="votre adresse email" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-user" placeholder="Saisir un mot de passe" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <input id="password-confirm" type="password" class="form-control form-control-user" placeholder="confirmer mot de passe" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">S'inscrire</button>
                
              </form>
              <hr>
              <div class="text-center">
                @if (Route::has('password.request'))
                   <a class="small" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                @endif
              </div>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Vous avez déjà un compte? S'identifier!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 

</body>
@include('layouts.scripts')

