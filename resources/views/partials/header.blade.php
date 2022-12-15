<header>
    <div class="header-container">
        <div class="logo">
            <a href="">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo">
            </a>
        </div>
       
        
        <ul>
            <li>
                <a href="#">characters</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">comics</a>
            </li>
            <li>
                <a href="#">movies</a>
            </li>
            <li>
                <a href="#">tv</a>
            </li>
            <li>
                <a href="#">games</a>
            </li>
            <li>
                <a href="#">collectables</a>
            </li>
            <li>
                <a href="#">videos</a>
            </li>
            <li>
                <a href="#">fans</a>
            </li>
            <li>
                <a href="#">news</a>
            </li>
            <li>
                <a href="#">shop</a>
            </li>
        </ul>
        <form>
            <input type="search" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </form>
    </div>
    
</header>