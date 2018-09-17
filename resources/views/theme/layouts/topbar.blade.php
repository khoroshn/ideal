<div class="top-header py-0">
    <div class="container-fluid limited ">
        <div class="row ">
            <div class="col ">
                <div class="d-flex justify-content-between">
                    <nav class="nav d-none d-lg-flex">
                        <a class="nav-link" href="/shop"><i class="material-icons">notifications_none</i> Get Minimum 30-70% Off On Over 1,50,000 Styles!</a>
                    </nav>
                    <nav class="nav ml-auto">
                        <a class="nav-link d-none d-sm-block py-0" href="#"><i class="fab fa-facebook fa-2x pt-1"></i></a>
                        <a class="nav-link d-none d-sm-block py-0" href="#"><i class="fab fa-instagram fa-2x pt-1"></i></a>
                        <a class="nav-link d-none d-sm-block py-0" href="#"><i class="fab fa-telegram-plane fa-2x pt-1"></i>

                        {{--<a class="nav-link py-0" href="#" data-toggle="modal" data-target="#loginModal"><i class="far fa-user fa-2x pt-1"></i> Sign In</a>--}}

                            @guest
                            <a class="nav-link py-0" href="{{ route('login') }}"><i class="far fa-user fa-2x pt-1"></i> Sign In</a>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/account">
                                                Account
                                            </a>

                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                        @endguest

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
