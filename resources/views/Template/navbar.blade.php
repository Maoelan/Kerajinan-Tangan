<div class = "wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class = "navbar-nav">  
        <li class = "nav-item">
            <a class = "nav-link" data-widget = "pushmenu" href = "#">
                <i class = "fas fa-bars"></i>
                <span class = "sr-only">Toggle navigation</span>
            </a>
        </li>
        
        <form action = "#" method = "get" class = "form-inline mx-2">
            <input type = "hidden" name = "_token" value = "p1hr5PRFOo2rmDi8KehO9tfqXbOwHvJmCar9LKxu">
            <div class = "input-group">
                <input class = "form-control form-control-navbar" type = "search" name = "q" placeholder = "search" aria-label = "search">
                <div class = "input-group-append">
                    <button class = "btn btn-navbar" type = "submit">
                        <i class = "fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </ul>
    
    <ul class = "navbar-nav ml-auto">
        <li class = "nav-item dropdown user-menu">
            <a href = "#" class = "nav-link dropdown-toggle" data-toggle = "dropdown">
                <span >Maulana Muhammad</span>
            </a>
            
            <ul class = "dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class = "user-footer">
                    <a class = "btn btn-default btn-flat float-right btn-block " href = "#" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class = "fa fa-fw fa-power-off"></i>Log Out
                    </a>
                    <form id = "logout-form" action = "http://127.0.0.1:8000/logout" method = "POST" style = "display: none;">
                        <input type = "hidden" name = "_token" value = "p1hr5PRFOo2rmDi8KehO9tfqXbOwHvJmCar9LKxu">
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>