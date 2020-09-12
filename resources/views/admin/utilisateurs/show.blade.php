<!-- modal voir utilisateur -->
<div id="modal-form-show{{$user->id}}" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-content-center text-center justify-content-center">
                <h1 class="modal-title">Utilisateur <strong>#{{$user->id}}</strong></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="contact-box">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="{{ asset('img/user.png') }}">
                                <div class="m-t-xs font-bold"></div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong>{{$user->name}}</strong></h3>
                            <p><i class="fa fa-envelope"></i> {{$user->email}}</p>
                            @if ($user->email_verified_at)
                                <p class="badge-primary"><i class="fa fa-check"></i> Email verifié</p>
                            @else
                                <p class="badge-warning"><i class="fa fa-times"></i> Email en attente de verification</p>
                            @endif
                            
                            
                            <address>
                                <strong>Roles :</strong>{{ implode(', ', $user->roles()->pluck('nom')->toArray()) }}<br><br>
                                <strong>Ajouté : </strong> {{$user->created_at->format('d/m/y à H:m')}} <br>
                                <strong>Dernière modification : </strong> {{$user->updated_at->format('d/m/y à H:m')}}
                            </address>
                        </div>
                        <div class="clearfix d-flex">
                            <a href="{{ route('admin.users.edit', $user)}}" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i> Editer
                            </a><br><br>
                            <form action="{{ route('admin.users.destroy', $user)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fa fa-trash-o"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
<!-- fin modal voir utilisateur -->