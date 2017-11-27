<!DOCTYPE html>
<html>

<head>
    <title>ACR GYM</title>
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

            <section id="slide1" class="homeslide">
                <div id="home">
                    <div class="bodycontainer">
                        <div class="bodycontent">
                            <h2>Publicidade Inicial</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="slide2" class="servslide">
                <div id="serv">
                    <div class="servcontainer">
                        <div class="servcontent">
                            <h2>Serviços disponiveis no ginásio</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="slide3" class="freeslide">
                <div id="free">
                    <div class="freecontainer">
                        <div class="freecontent">
                            <h2>Free trial</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="slide4" class="aboutslide">
                <div id="about">
                    <div class="aboutcontainer">
                        <div class="aboutcontent">
                            <h2>Sobre o nosso ginásio</h2>
                        </div>
                    </div>
                </div>
            </section>
</body>

</html>
    