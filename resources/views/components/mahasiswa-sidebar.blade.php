<div class="menu">
    <div class="item"><a href="/home"><i class="fa-solid fa-house"></i>Home</a></div>
    <div class="item"><a class="sub-btn"><i class="fa-brands fa-wpforms"></i>Form MBKM
            <!-- dropdown -->
            <i class="fa-solid fa-chevron-right dropdown"></i>
        </a>
        <div class="sub-menu">
            <a href="{{ route('prambkm.create') }}" class="sub-item">Form Pra MBKM</a>
            <a href="{{ route('pascambkm.create') }}" class="sub-item">Form Pasca MBKM</a>
        </div>
    </div>
    <div class="item"><a href="{{ route('lowongan.user-index') }}"><i class="fa-solid fa-briefcase"></i></i>Lowongan MBKM
            Mandiri</a></div>
    <div class="item"><a href="{{ route('logbook.index') }}"><i class="fa-solid fa-book"></i>Logbook</a></div>
    <div class="item"><a href="/profile/{{ Session::get('nim') }}"><i class="fa-solid fa-user"></i>Profile</a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" class="hidden" method="POST">
        @csrf
        <a class="dropdown-item" href="#" >
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </form>
    <div class="item">
        <a  onclick="confirmLogout(event)">

        <i class="fa-solid fa-right-from-bracket logout"></i>Logout
    </a>
    </div>
</div>