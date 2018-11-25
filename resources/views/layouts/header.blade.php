<nav class="navbar navbar-dark bg-primary navbar-expand-lg nav-top fixed-top">
    <div class='container'>
        <a href="#" class='navbar-profile rounded'>@if(1)Artshellorok @else Login @endif</a>
        <div class='mr-auto d-flex flex-row'>
            <div class='nav-logos-line-1'></div>
            <ul class="navbar-nav nav-logos">
                <li class="nav-item">
                    <a href="#">
                        @svg('img/github.svg')
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        @svg('img/vk.svg')            
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        @svg('img/twitter.svg')
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        @svg('img/facebook.svg')
                    </a>
                </li>
            </ul>
            <div class='nav-logos-line-2'></div>
        </div>
        <div class='dropdown ml-auto'>
            <div id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class='dropdown-country-btn'>
                <img src='img/us.svg' width='25px'>
            </div>
            <div class="dropdown-menu dropdown-country bg-primary" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><img src='img/ru.svg' width='25px'></a>
            </div>
        </div>
    </div>
</nav>
<div style='height: 200px; margin-top: 55px' class='container'>
</div>
<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
    <div class='container'>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-links">
                <li class="nav-item home current">
                    <a class="nav-link" href="/">
                        <img src="img/home.png" width="20" height="20">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sports</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="#">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-dark search ml-auto rounded" aria-label="Close" @click='$refs.search.reveal()'>
            <img src="img/search.png" alt="search" class="rounded">
        </button>
    </div>
</nav>
<hr class='hr-red'>

