
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Dashboard</h3>
                    <h3 class="text-primary">Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{auth()->user()->name}}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('admin.dashboard') }}" class="nav-item nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{route('admin.pesanan') }}" class="nav-item nav-link {{ request()->routeIs('admin.pesanan') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Pemesanan Tiket</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Laporan</a>
                    @auth
                    <form action="{{route('logout') }}" method="post" id="form">@csrf</form>
                    <a href="#" onclick="document.querySelector('#form').submit()" class="nav-item nav-link"><i class="fa fa-arrow-right me-2"></i>
                    Keluar</a>
                    @endauth
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

