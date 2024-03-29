<nav class="navbar navbar-default navbar-fixed-top navbar-color-on-scroll navbar-transparent" color-on-scroll="100"
     id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="presentation.html"></a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">view_carousel</i> Options
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        @if(isset($user))
                            <li>
                                <a href="applicant/profile/{{$user->id}}">
                                    <i class="material-icons">account_circle</i> Profile Page
                                </a>
                            </li>
                        @endif
                        <li>
                            <a href="{{route('applicant.index')}}">
                                <i class="material-icons">art_track</i> Jobs
                            </a>
                        </li>

                        <li>
                            <a href="{{route('logout')}}">
                                <i class="material-icons">fingerprint</i> Log out
                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
