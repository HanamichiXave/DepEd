@extends('layouts.app')
@section('page')
<!-- navigation bar  -->
<nav class="navbar navbar-findcond navbar-fixed-top" style="margin-bottom: 0;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="col-lg-4 navbar-brand custom-brand" href="#" style="color: white;">
                <img class="schuler" src="{!! asset('assets/images/logonatin.png')!!}" height="25" width="30" />
            </a>
            <a class="navbar-brand schulercolor" href="{{URL::Route('superadmin')}}">SchulerTrack</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i> Notifications <span class="badge">3</span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Note</span> Teacher is not on class!</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Warning</span> 10 students are late in Grade v - Magalang.</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Note</span> Mrs. Tanchoco teacher of Grade 3 - Matapat is not on...</a>
                        </li>
                        <li class="divider">|</li>
                        <li>
                            <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> &nbsp&nbsp&nbspSee all notifications...</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> My Account</a></li>
                        <li><a href="#"> <i class="fa fa-cog" aria-hidden="true"></i> Setting</a></li>
                        <li><a href="#exit"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- end of navigation bar -->
<div class="container" >
    <br>
    <br>
        @yield('content')

    <!-- footer here -->
    <hr />
    <footer class="navbar-fixed-bottom">
        <div class="container-fluid footer">
            <p class="pull-right powerby">&copy; 2016 - Powered by <a href="http://www.simplevia.com" class="quicktrackcolor">QuickTrack</a></p>
        </div>
    </footer>
    <!-- end foooter -->
</div>
@endsection