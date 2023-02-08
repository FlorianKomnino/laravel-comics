@php
    $dcComicsMenu = [
        'characters',
        'comics',
        'movies',
        'TV',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ]
@endphp


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{Vite::asset('resources/assets/imgs/dc-logo.png')}}" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
                foreach ($dcComicsMenu as $menuItem) {
                    ?>
                <a class="nav-link" href="#">{{ $menuItem }}</a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="input-group">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" />
            </div>
            <button type="button" class="btn btn-primary">
                Search
            </button>
        </div>
    </div>
</nav>