<head>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Gupter&display=swap" rel="stylesheet">
</head>


<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
        <header>
            <a href="#">Tableau de baord</a>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-stacked">
                        <div class="dropdown" class="col-md-12">
                            <button class="dropbtn"><a href="{{route('ajout_employers')}}" >Ajouts</a></button>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Les Tableaux de vue</button>
                            <div class="dropdown-content">
                                <a href="{{route('acceuil')}}">Employers</a>
                                <a href="{{route('vuconge')}}">Conges</a>
                                <a href="{{route('tablpointage')}}">Pointage</a>
                                <a href="{{route('vudptm')}}">Departement</a>
                            </div>
                        </div>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li><a href="#">Bienvenue dans votre compte</a></li>
                </ul>
                <div class="rigth">
                   <a href="/deconnexion" class="button">Déconnexion</a>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('admin')
        </div>
        <div class="footer">

        </div>
    </div>
</div>
