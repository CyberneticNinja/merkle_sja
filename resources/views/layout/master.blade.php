<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>@yield('title')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <style>
        .content
        {
            padding: 20px;
        }
        form
        {
            width:75%;
        }
        #warning
        {
            color: red;
        }

    </style>
</head>
<body>
    <div class="columns">
        <div class="column">
            <div class="content">
                <h1>Menu</h1>
                <aside class="menu">
                    <ul class="menu-list">
                    <li><a href="http://localhost/merkle_sja/public/register">Register</a></li>
                    </ul>
                    <p class="menu-label">
                        <h2>Admin</h2>
                    </p>
                    <ul class="menu-list">
                        <li><a>Login</a></li>
                    </ul>            
                </aside>
            </div>
        </div>
        <div class="column is-four-fifths">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    
</body>
</html>