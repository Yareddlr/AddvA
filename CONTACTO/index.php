<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="stylemovil2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>AddvA</title>
</head>
<body>
    <header class="navegacion">
        <div class="logo">
        <a href="http://localhost/PROYECTO_ADDVA/HOME/index.php"><img src="./Logo_addva-removebg-preview.png" alt=""></a>
          </div>
          <div class="sidebar">
            <!-- Botón de cierre de la barra lateral -->
            <span class="close-btn">&times;</span>
            
            <!-- Lista de enlaces de la barra lateral -->
            <ul class="sidebar-links">
                <li><a href="http://localhost/PROYECTO_ADDVA/HOME/index.php">Inicio</a></li>
                <li><a href="http://localhost/PROYECTO_ADDVA/SERVICIOS/index.html">¿Qué servicios ofrecemos?</a></li>
                <li><a href="http://localhost/PROYECTO_ADDVA/FQA/index.html">Preguntas Frecuentes</a></li>
                <li><a href="http://localhost/PROYECTO_ADDVA/CONTACTO/index.php">Contáctanos</a></li>
            </ul>
        </div>
            <div class="iconhamburguer">
                
              <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 7L7 7M20 7L11 7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M20 17H17M4 17L13 17" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M4 12H7L20 12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
          </div>
        
        <nav class="navv">     
            <ul class="navigation">
            <li><a href="http://localhost/PROYECTO_ADDVA/HOME/index.php">Inicio</a></li>
              <li><a href="http://localhost/PROYECTO_ADDVA/SERVICIOS/index.html">¿Que servicios ofrecemos</a></li>
              <li><a href="http://localhost/PROYECTO_ADDVA/FQA/index.html">Precuntas Frecuentes</a></li>
              <li><a href="http://localhost/PROYECTO_ADDVA/CONTACTO/index.php">Contactanos</a></li>
            </ul>
        </nav>
        <div class="InfoButton">
        <a id="infobutton" href="http://localhost/PROYECTO_ADDVA/CONTACTO/index.php">¡Solicitar Informacion!</a>
        </div>

    </header>
        <main class="container">
<img class="fade-in" id="imgcont" src="./imgcontacto.png" alt="">
        </main>
<section class="section1">
<div class="info fade-in">
<p id="Con">Contactanos</p>
<p id="si">Si tienes dudas  dejanos tus datos para que nuestro equipo se comunique contigo, te responderemos en un plazo maximo de 24 horas </p>
<p id="mand">Mandanos un Email</p>
<p id="infoo">info@Addva.com</p>
<p id="movil">Telefono oficina</p>
<p id="Number">871-387-5372</p>
<p id="direccion">Direccion</p>
<p id="blvd">blvd independecia, col. san isidro #2627  Torreon Coah.</p>
</div>
<div class="formcontacto fade-in">
    <p id="Contact">¿Estas listo?</p>
    <p id="deja">Deja tus datos para que nuestro equipo se comunique</p>
    <form id="form"  method="post" action="registrar.php">
        <input type="Name" id="Nombre" name="name" placeholder="Tu Nombre" required="">
        <input type="lastname" id="apellido" name="lastname" placeholder="Tu Apellido" required="">
        <input type="Email" id="Email" name="email" placeholder="Tu Correo" required="">
        <input type="Phone" id="Movil" name="phone" placeholder="Tu telefono" required="">
        <textarea name="message" id="mensaje" name="message" placeholder="Dejanos un mensaje" cols="40" rows="10"></textarea>
        <button id="input" name="register">Quiero mas informacion</button>

        
    </form>
    
    <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="251" height="183" viewBox="0 0 251 183" fill="none">
        <path d="M0 0L0.863077 0.90333C16.6373 17.4132 25.9372 39.0524 27.0601 61.859L28.1757 84.5194C28.2329 85.6797 29.4715 86.3916 30.5028 85.857V85.857C50.8049 75.3327 75.7323 85.0602 83.54 106.554L85.1187 110.9C87.9037 118.566 97.7561 120.667 103.426 114.803L163.004 53.1904C177.369 38.3341 199.925 34.9864 217.986 45.03V45.03C229.389 51.371 237.532 62.2898 240.358 75.0275L248.512 111.777C250.821 122.185 251.362 132.907 250.112 143.494L245.447 183H0V0Z" fill="#E5E1FF"/>
      </svg>
      <svg id="svg2" xmlns="http://www.w3.org/2000/svg" width="433" height="183" viewBox="0 0 433 183" fill="none">
        <path d="M433 183L412.603 165.298C406.125 159.675 397.834 156.579 389.256 156.579V156.579C374.067 156.579 360.549 146.948 355.589 132.593L351.919 121.972C350.821 118.796 350.037 115.519 349.579 112.19L343.522 68.1487C340.642 47.2146 314.701 39.0732 300.376 54.6079L229.323 131.662C216.448 145.624 196.041 149.695 178.794 141.742V141.742C161.3 133.675 151.133 115.123 153.747 96.0365L159.173 56.4117C165.32 11.5214 108.581 -13.0968 79.9972 22.0587V22.0587C58.0257 49.0818 14.9758 41.8127 3.09541 9.07361L1.45071e-05 0.543597L423 0.543604C428.523 0.543604 433 5.02076 433 10.5436L433 183Z" fill="#E5E1FF"/>
      </svg>
</div>

</section>
<footer class="fotter fade-in">
    <p id="Titulofotter">ADDVA</p>
    <div id="accesosfooter">
    <a href="http://localhost/PROYECTO_ADDVA/CONTACTO/index.php">CONTACTANOS</a>
      <a href="http://localhost/PROYECTO_ADDVA/SERVICIOS/index.html"> SERVICIOS</a>
      <a href="http://localhost/PROYECTO_ADDVA/BLOG/index.html">BLOG</a>
      <a href="http://localhost/PROYECTO_ADDVA/FQA/index.html">PREGUNTAS FRECUENTES</a>
    </div>
    <div id="linea1"></div>
    <div id="linea2"></div>
    <form id="form1" action="procesar_formulario.php" method="post">
        <input type="Name" id="Nombre1" name="Nombre" placeholder="Tu Nombre" required="">
        <input type="Email" id="Email1" name="Email" placeholder="Tu Correo" required="">
        <input id="input1" type="submit"name="register" value="¡Enviar!">
    </form>
    <p id="Newsletter">Suscribete a nuestro Newsletter</p>
    <svg id="facebook" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
        <g clip-path="url(#clip0_17_31)">
          <path d="M26.5788 0.89209H2.39152C1.56331 0.892588 0.891924 1.56431 0.89209 2.39285V26.5802C0.892588 27.4084 1.56431 28.0798 2.39285 28.0796H15.4151V17.5657H11.8839V13.4504H15.4151V10.4218C15.4151 6.90971 17.5592 4.99809 20.6921 4.99809C22.1927 4.99809 23.4822 5.10994 23.8581 5.15988V8.83063H21.6977C19.9932 8.83063 19.6632 9.64058 19.6632 10.8294V13.4504H23.7386L23.2076 17.5657H19.6632V28.0796H26.5788C27.4075 28.0798 28.0794 27.4082 28.0796 26.5795C28.0796 26.5793 28.0796 26.5792 28.0796 26.5788V2.39152C28.0793 1.56331 27.4074 0.891924 26.5788 0.89209Z" fill="black"/>
        </g>
        <defs>
          <clipPath id="clip0_17_31">
            <rect width="29" height="29" fill="white"/>
          </clipPath>
        </defs>
      </svg>
      <svg id="insta" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
        <g clip-path="url(#clip0_17_33)">
          <path d="M20.9968 0H8.00273C3.59003 0 0 3.5902 0 8.0029V20.9969C0 25.4098 3.59003 28.9998 8.00273 28.9998H20.9968C25.4098 28.9998 28.9998 25.4096 28.9998 20.9969V8.0029C29 3.5902 25.4098 0 20.9968 0ZM26.427 20.9969C26.427 23.991 23.991 26.4268 20.9969 26.4268H8.00273C5.00878 26.427 2.57301 23.991 2.57301 20.9969V8.0029C2.57301 5.00895 5.00878 2.57301 8.00273 2.57301H20.9968C23.9909 2.57301 26.4268 5.00895 26.4268 8.0029V20.9969H26.427Z" fill="black"/>
          <path d="M14.4999 7.02771C10.3795 7.02771 7.02739 10.3798 7.02739 14.5002C7.02739 18.6205 10.3795 21.9724 14.4999 21.9724C18.6203 21.9724 21.9724 18.6205 21.9724 14.5002C21.9724 10.3798 18.6203 7.02771 14.4999 7.02771ZM14.4999 19.3992C11.7984 19.3992 9.60039 17.2015 9.60039 14.5001C9.60039 11.7984 11.7983 9.60054 14.4999 9.60054C17.2016 9.60054 19.3994 11.7984 19.3994 14.5001C19.3994 17.2015 17.2014 19.3992 14.4999 19.3992Z" fill="black"/>
          <path d="M22.2858 4.84601C21.7901 4.84601 21.3031 5.0467 20.953 5.39835C20.6012 5.74828 20.399 6.23543 20.399 6.73288C20.399 7.22878 20.6014 7.71577 20.953 8.06741C21.3029 8.41734 21.7901 8.61975 22.2858 8.61975C22.7833 8.61975 23.2687 8.41734 23.6204 8.06741C23.972 7.71577 24.1727 7.22861 24.1727 6.73288C24.1727 6.23543 23.972 5.74828 23.6204 5.39835C23.2704 5.0467 22.7833 4.84601 22.2858 4.84601Z" fill="black"/>
        </g>
        <defs>
          <clipPath id="clip0_17_33">
            <rect width="29" height="29" fill="white"/>
          </clipPath>
        </defs>
      </svg>
    <p id="Avisop">Aviso de privacidad</p>
    <p id="Derechos">2024 Advva S.A DE C.V. todos los derechos reservados.</p>

   <div id="blur"></div>
   <div id="blur2"></div>
</footer>       
<?php
include("registrar.php");
?>
 <script src="animacion.js"></script>
 <script src="animacion2.js"></script>
    </body>
    </html>