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
            width:50%;
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
		<li><a href="http://45.77.75.226/merkle_sja/public">Home</a></li>
                  <li><a href="http://45.77.75.226/merkle_sja/public/register">Register</a></li>
                    </ul>
                    <p class="menu-label">
                        <h2>Admin</h2>
                    </p>
                    <ul class="menu-list">
                    	@php
                        	if(!isset($_COOKIE['username']))
                        	{
                            	$url = 'http://45.77.75.226/merkle_sja/public/login';
                            	echo '<li><a href="'.$url.'">Login</a></li>';
                        	}
                        	else
                        	{
                            	$url = 'http://45.77.75.226/merkle_sja/public/logout';
                            	echo '<li><a href="'.$url.'">Logout</a></li>';
                        	}
                    	@endphp
                        @php
                            if(isset($_COOKIE['username']))
                            {
                                $url = 'http://45.77.75.226/merkle_sja/public/adminHome';
                                echo '<li><a href="'.$url.'">Admin Home</a></li>';
                            }
                        @endphp
                       
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
