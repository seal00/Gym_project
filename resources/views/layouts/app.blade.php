<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <script src="/js/custom.css"></script>
</head>

<body>      
    <button onclick="topFunction()" id="btopo" title="homepagebutton">Top</button>
    <div id="menu">
        <ul>
            <li><a href="#login">Login</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#free">Free-Trial</a></li>
            <li><a href="#serv">Serviços</a></li>
            <li><a href="#home">Home</a></li>
        </ul>              
    </div>
    <form action="/formulario.php">
        <div class="container">
            <label><b>Username:</b></label>
            <input type="text" placeholder="Username" name="user" required>
            
            <label><b>Password:</b></label>
            <input type="password" placeholder="Password" name="pw" required>
            
            <button type="submit" id="lbutton">Login</button>
                
            <input type="checkbox" checked="checked"> Remember </br>
            <span class="pw">Forgot <a href="#">your password?</a></span>
        </div>
    </form>

    @yield('content')
    
</body>
</html>