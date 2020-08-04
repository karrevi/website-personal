<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/91925d8505.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/faviconImage.jpg" type="jpg" sizes="32x32">
    <title>Carlos Revilla Portfolio</title>
</head>

<body>
    <div class="container navbar">
        <header>
            <div class="lgo">
                <h1>Carlos</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">skills</a></li>
                    <li><a href="#work">my work</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="container main-info-section">
        <div class="text">
            <h1>
                <span>H</span>
                <span class="m-left">o</span>
                <span class="m-left">l</span>
                <span class="m-left">a</span>
                <span class="m-left">,</span>
                <br>
                <span>S</span>
                <span class="m-left">o</span>
                <span class="m-left">y</span>
                <span class="name">C</span>
                <span class="m-left name">a</span>
                <span class="m-left name">r</span>
                <span class="m-left name">l</span>
                <span class="m-left name">o</span>
                <span class="m-left name">s</span>
                <span class="m-left">,</span>
                <br>
                <span>F</span>
                <span class="m-left">u</span>
                <span class="m-left">l</span>
                <span class="m-left">l</span>
                <span>S</span>
                <span class="m-left">t</span>
                <span class="m-left">a</span>
                <span class="m-left">c</span>
                <span class="m-left">k</span>
                <span>D</span>
                <span class="m-left">e</span>
                <span class="m-left">v</span>
                <span class="m-left">e</span>
                <span class="m-left">l</span>
                <span class="m-left">o</span>
                <span class="m-left">p</span>
                <span class="m-left">e</span>
                <span class="m-left">r</span>
                <span class="m-left">.</span>
            </h1>
            <p>Javascript / MERN / MEAN / Php / Laravel</p>
            <a href="#contact">contáctame</a>
        </div>
        <div class="profile-image">
            <span class="image-vanishing"></span>
            <img src="img/profile-image2.png" alt="">
        </div>
    </div>
    <div class="container about" id="about">
        <h1>About</h1>
        <div class="about-me-info">
            <p>Puedo decir que la reinvención es la parte mas importante de mi vida, sobre todo en los últimos años, ya
                que no he dejado de hacer cambios radicales de todo tipo.
            </p>
            <p>Puedo decir que me considero un entusiasta, positivo y muy asertivo. Siempre con un punto de vista
                analítico y metódico. Estas características peculiares de mi persona, las pude detectar durante mi
                experiencia laboral, en la cual he podido trabajar con grandes grupos de personas, en equipo y a
                todos los niveles.
            </p>
            <p>Por otra parte, vale resaltar que me interesan las causas animales, ecológicas y de actualidad.
                En definitiva, descubrí en la programación esa parte que me concentra y me permite demostrar mi lado
                productivo, lógico y estructurado.
            </p>
        </div>
        <img src="img/dotted-shape.png" alt="">
    </div>

    <div class="container skills" id="skills">
        <h1>Skills</h1>
        <p class="skills-info">
            A lo largo de mi formación como Developer, he podido aprender varios lenguajes de programación y con los
            cuales he realizado diversos proyectos, para saber un poco de lo que hablo, te presento mi stack
            tecnológico en backend y frontend:
        </p>
        <div class="container-slider">
            <div class="slider-container">
                <div class="slider-test">
                    <img src="./img/js.jpg" alt="Javascript">
                    <div>
                        <h3>Javascript</h3>
                    </div>
                </div>
                <div class="slider-test">
                    <img src="./img/react.png" alt="React">
                    <h3>React</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/angular.jpg" alt="angular">
                    <h3>Angular</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/typescript.png" alt="Typescript">
                    <h3>Typescript</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/laravel.png" alt="Laravel">
                    <h3>Laravel</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/mysql.png" alt="mysql">
                    <h3>MySQL</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/mongoDB.png" alt="mongoDB">
                    <h3>MongoDB</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/php.png" alt="Php">
                    <h3>PHP</h3>
                </div>
                <div class="slider-test">
                    <img src="./img/sass.png" alt="sass">
                    <h3>Sass</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container work" id="work">
        <h1>Work</h1>
        <div class="work-category">
            <button id="designing" class="active" onclick="showRequiredCategory(this)">Web Designing</button>
            <button id="animation" onclick="showRequiredCategory(this)">Angular Projects</button>
            <button id="project" onclick="showRequiredCategory(this)">React Projects</button>
        </div>
        <div class="category-designing showCategory">
            <a href=""><img src="img/pelisplus.gif" alt=""></a>
            <a href=""><img src="img/panaderiaNg.gif" alt=""></a>
            <a href=""><img src="img/rickandmorty.gif" alt=""></a>
            <a href=""><img src="img/codesnnipets.gif" alt=""></a>
            <a href=""><img src="img/jquery.gif" alt=""></a>
        </div>
        <div class="category-animation hideCategory">
            <a href=""><img src="img/panaderiaNg.gif" alt=""></a>
        </div>
        <div class="category-project hideCategory">
            <a href=""><img src="img/rickandmorty.gif" alt=""></a>
            <a href=""><img src="img/codesnnipets.gif" alt=""></a>
        </div>
    </div>
    <div class="container contact" id="contact">
        <h1>Contact</h1>
        <form action="https://formspree.io/xpzybdja" method="POST">
            <input type="text" name="name" placeholder="Tú nombre">
            <input type="email" name="email" placeholder="Email">
            <textarea name="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
            <input type="submit">
        </form>
    </div>
    <div class="go-top-container">
        <div class="go-top-buttom">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>

    <footer>
        <hr>
        <div class="social-container">
            <ul class="social-icons">
                <li><a href="https://github.com/karrevi"><i class="fab fa-github"></i></a></li>
                <li><a href="https://twitter.com/carlosweb_90"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/clrevilla/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/TimelineLite.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/CSSPlugin.min.js"></script>
</body>

</html>