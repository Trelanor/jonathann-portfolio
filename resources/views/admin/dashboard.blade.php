<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--css-->
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!--js-->
        <script src="{{ asset('js/dashboard.js') }}" defer></script>
      
        
        <title>admin panel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
        
        @foreach ($users as $user)
            <p>This is user {{ $user->id }}</p>
        @endforeach

        <div class="container">
        <div class="drawer">
            <a class="navicon" href="/"><i class="icon ion-navicon"></i></a>
            <div class="menu">
            <a data-menu="dashboard" href="#" class="active"><i class="icon ion-home"></i></a>
            <a data-menu="users" href="#"><i class="icon ion-person-stalker"></i></a>            
            <a data-menu="download" href="#"><i class="icon ion-code-download"></i></a>
            <a data-menu="about" href="#"><i class="icon ion-information-circled"></i></a>
            <a data-dialog="logout" href="#"><i class="icon ion-log-out"></i></a>
            </div>
            <span class="credits">uplusion23</span>
        </div>
        <div class="content">
            <div class="page active" data-page="dashboard">
            <div class="header">
                <div class="title">
                <h2>Dashboard</h2>
                </div>
            </div>
            <div class="grid">
                <div class="card">
                <div class="head">
                    <span class="icon">
                    <i class="icon ion-pound"></i>
                    </span>
                    <span class="stat">
                    Server Status
                    </span>
                    <div class="status">
                    </div>
                </div>
                <div class="body">
                    <h2>Server is currently $_status</h2>
                    <p>
                    The server is running normally and no issues have recently been detected. If you notice an outage, please report it to the administrator.
                    </p>
                </div>
                <div class="footer">
                    <div class="user">
                    <div class="user-icon">
                    </div>
                    <span class="username">
                        Administrator
                    </span>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="head">
                    <span class="icon">
                    <i class="icon ion-code-working"></i>
                    </span>
                    <span class="stat">
                    CSGO Status
                    </span>
                    <div class="status">
                    </div>
                </div>
                <div class="body">
                    <h2>Cheat is currently $_status</h2>
                    <p>
                    The server is running normally and no issues have recently been detected. If you notice an outage, please report it to the administrator.
                    </p>
                </div>
                <div class="footer">
                    <div class="user">
                    <div class="user-icon">
                    </div>
                    <span class="username">
                        uplusion23
                    </span>
                    </div>
                </div>
                </div>
                <div class="card-verticle">
                <div class="card-small">
                    <span class="title">
                    Active Users
                    </span>
                    <h2 class="text">12</h2>
                    <div class="graph">
                    <div class="bar" data-day="sunday">
                        <div class="bar-content"></div>
                    </div>
                    <div class="bar" data-day="monday">
                        <div class="bar-content"></div>
                    </div>
                    <div class="bar" data-day="tuesday">
                        <div class="bar-content"></div>
                    </div>
                    <div class="bar" data-day="wednesday">
                        <div class="bar-content"></div>
                    </div>
                    <div class="bar" data-day="thursday">
                        <div class="bar-content"></div>
                    </div>
                    <div class="bar" data-day="friday">
                        <div class="bar-content"></div>
                    </div>
                    <div class="bar" data-day="saturday">
                        <div class="bar-content"></div>
                    </div>
                    </div>
                </div>
                <div class="card-small">
                    <span class="title">
                    Overview
                    </span>
                </div>
                </div>
            </div>
            <div class="stats">
            </div>
            </div>
            <div class="page noflex" data-page="users">
            <div class="header">
                <div class="title">
                <h2>Users</h2>
                </div>
            </div>
            <div class="grid">
                <div class="user-edit">
                <div class="header">
                    <span class="icon">
                    <i class="icon ion-person"></i>
                    </span>
                    <span class="user-edit-name">$_USERNAME</span>
                    <a href="#" class="close"><i class="icon ion-close-round"></i></a>
                </div>
                </div>
                <div class="users-table">
                <div class="users-item header">
                    <div class="table-item noflex">
                    ID
                    </div>
                    <div class="table-item">
                    Email Address
                    </div>
                    <div class="table-item">
                    Username
                    </div>
                    <div class="table-item">
                    Nickname
                    </div>
                    <div class="table-item">
                    Active
                    </div>
                    <div class="table-item">
                    Premium
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="page noflex" data-page="download">
            <div class="header">
                <div class="title">
                <h2>Download</h2>
                </div>
            </div>
            <div class="grid">
                <div class="card wide">
                <div class="head">
                    <span class="icon">
                    <i class="icon ion-code-working"></i>
                    </span>
                    <span class="stat">
                    Cheat Client
                    </span>
                    <div class="status">
                    </div>
                </div>
                <div class="body">
                    <h2>Latest Version: v$_VERSION</h2>
                    <p>
                    changelog here
                    </p>
                </div>
                <div class="footer">
                    <div class="user">
                    <div class="user-icon">
                    </div>
                    <span class="username">
                        Administrator 
                    </span>
                    </div>
                    <a class="download" href="#">Download <i class="icon ion-archive"></i></a>
                </div>
                </div>
            </div>
            </div>
            <div class="page noflex" data-page="about">
            <div class="header">
                <div class="title">
                <h2>About</h2>
                </div>
            </div>
            <div class="info-container">
                <div class="info">
                <a href="http://uplusion23.net/" target="_blank">Developer</a>
                <span>uplusion23</span>
                </div>
                <div class="info">
                <a href="#" target="_blank">Dashboard Version</a>
                <span>1.0.0</span>
                </div>
            </div>
            </div>
        </div>
        <div class="sidebar">

        </div>
        <div class="dialog">
            <div class="dialog-block">
            <h2>Are you sure you want to logout?</h2>
            <div class="controls">
                <a href="#" class="button">Logout</a>
                <a data-dialog-action="cancel" href="#" class="button">Cancel</a>
            </div>
            </div>
        </div>
        </div>
        <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
    </body>