<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" src="{{ asset('img/profile_small.jpg') }}" />
                        </span>
                    </div>
                    <div class="logo-element">
                        AGESCO
                    </div>
                </li>
                <li>
                    <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index')}}"><i class="fa fa-file"></i> <span class="nav-label">Utilisateurs</span></a>
                </li>
                <li>
                    <a href="{{ route('etudiants.index')}}"><i class="fa fa-tasks"></i> <span class="nav-label">Etudiants</span></a>
                </li>
                <li>
                    <a href="{{ route('notes.index')}}"><i class="fa fa-file"></i> <span class="nav-label">Notes</span></a>
                </li>
                
            </ul>
        </div>
    </nav>