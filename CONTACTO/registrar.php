<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stylemovil.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $fecha = date("d/m/y");

        // Utilizar una consulta preparada para evitar la inyección SQL
        $consulta = "INSERT INTO datos(nombre, apellido, email, telefono, mensaje, fecha)
                     VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);

        // Vincular parámetros
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $lastname, $email, $phone, $message, $fecha);

        // Ejecutar la consulta
        $resultado = mysqli_stmt_execute($stmt);

        // Verificar el resultado
        if ($resultado) {
            ?>
            <header class="navegacion">
        <div class="logo">
            <p>Addva</p>
            <div class="iconhamburguer">
                
              <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 7L7 7M20 7L11 7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M20 17H17M4 17L13 17" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M4 12H7L20 12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
          </div>
        </div>
        <nav class="navv">     
            <ul class="navigation">
            <li><a href="http://localhost/PROYECTO_ADDVA/HOME/index.html">Inicio</a></li>
              <li><a href="http://localhost/PROYECTO_ADDVA/SERVICIOS/index.html">¿Que servicios ofrecemos</a></li>
              <li><a href="http://localhost/PROYECTO_ADDVA/FQA/index.html">Precuntas Frecuentes</a></li>
              <li><a href="http://localhost/PROYECTO_ADDVA/CONTACTO/index.php">Contactanos</a></li>
            </ul>
        </nav>
        <div class="InfoButton">
        <a id="infobutton" href="http://localhost/PROYECTO_ADDVA/CONTACTO/index.php">¡Solicitar Informacion!</a>
        </div>

    </header>
            <section class="sectionregistro">
            <div class="complet">
            <h3 class="success">¡Tu registro se ha completado, nuestro equipo se comunicara contigo lo mas pronto posible!</h3>
            <img id="reloj" src="./reloj 1.svg" alt="">
            <a class="back" href="http://localhost/PROYECTO_ADDVA/HOME/index.html">Volver al Inicio</a>
            </div>
    </section>
    <footer class="fotter">
    <p id="Titulofotter">ADDVA</p>
    <div id="accesosfooter">
    <a href="http://localhost/PROYECTO_ADDVA/CONTACTO/index.php">CONTACTANOS</a>
      <a href="http://localhost/PROYECTO_ADDVA/SERVICIOS/index.html"> SERVICIOS</a>
      <a href="http://localhost/PROYECTO_ADDVA/BLOG/index.html">BLOG</a>
      <a href="http://localhost/PROYECTO_ADDVA/FQA/index.html">PREGUNTAS FRECUENTES</a>
    </div>
    <div id="linea1"></div>
    <div id="linea2"></div>
    <form id="form1">
        <input type="Name" id="Nombre1" placeholder="Tu Nombre" required="">
        <input type="Email" id="Email1" placeholder="Tu Correo" required="">
        <input id="input1" type="submit" value="¡Enviar!">
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
        } else {
            ?>
            
            <h3 class="error">Ocurrió un error: <?php echo mysqli_error($conex); ?></h3>
    
       

            <?php
        }

        // Cerrar la declaración preparada
        mysqli_stmt_close($stmt);
    } else {
        ?>
        <h3 class="errorr">Llena todos los campos</h3>
        <?php
    }
}
?>
