@include('posts.header', ['user' => Auth::user()])

<div class="container mt-5">
    <div class="row justify-content-center">
        @guest
        <div class="col-md-12">
            <div class="text-left mb-4">
                <h3 class="text-primary font-weight-bold">@yield('header-title')</h3>
            </div>
        </div>
        @endguest

        @auth
        <div class="col-md-10">
            <div class="text-left mb-4">
                <h3 class="text-primary font-weight-bold">@yield('header-title')</h3>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <button type="button" class="btn btn-danger btn-lg shadow-sm rounded-pill" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </button>
        </div>
        @endauth
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card border-primary shadow-lg">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

@include('posts.footer')
