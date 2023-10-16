<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">Klean</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="{{ route('main') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">Biz haqimizda</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Xizmatlar</a>
            <a href="{{ route('project') }}" class="nav-item nav-link">Loyihalar</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('post.index') }}" class="dropdown-item">Bloglar</a>
                    <a href="{{ route('single') }}" class="dropdown-item">Batafsil</a>
                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link">Bog'lanish</a>
        </div>
        <a href="{{route('post.create')}}" class="btn btn-primary mr-3 d-none d-lg-block">Po'st qo'shish</a>
    </div>
</nav>
