@include('layouts.head')
<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <img width="200" class="col-lg-6 d-none d-lg-block" src="{{ asset('img/UOB2.png') }}" alt="">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">S'identifier</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control @error('email') is-invalid @enderror form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="saisir votre mail..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control @error('password') is-invalid @enderror form-control-user" id="exampleInputPassword" placeholder="Password"  name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">Souviens toi de moi</label>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">Se connecter</button>

                  </form>
                  <hr>
                  <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="small" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                    @endif
                  </div>
                    
                  <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Faire une demande de compte !</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  
  @include('layouts.scripts')

</body>


