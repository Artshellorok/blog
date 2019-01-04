<nav class="navbar navbar-dark bg-primary navbar-expand-lg nav-top fixed-top">
        <div class='container'>
            <a href="#" class='navbar-profile rounded'  @click='$refs.login.reveal()'>@if(0)Artshellorok @else Login @endif</a>
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
        </div>
    </nav>
    <div style='height: 200px; margin-top: 55px' class='container'>
    </div>
    
    