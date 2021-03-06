<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>SIMANIS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{auth()->user()->name}}</h6>
                
            </div>
        </div>

        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            @if(auth()->user()->user_group->group_id === 1)
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Master</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/mjurusan" class="dropdown-item">Master Jurusan</a>
                    <a href="/mkelas" class="dropdown-item">Master Kelas</a>
                    <a href="/mmapel" class="dropdown-item">Master Mata Pelajaran</a>
                    <a href="/mguru" class="dropdown-item">Master Guru</a>
                    <a href="/datasiswa" class="dropdown-item">Master Siswa</a>
                </div>
            </div>
            @endif
            @if(auth()->user()->user_group->group_id === 2)

            @endif
        </div>
    </nav>
</div>