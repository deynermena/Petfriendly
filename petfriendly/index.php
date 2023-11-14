<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iconos/huella2.jpg"/>
    <title>Pet Friendly</title>
    <link rel="stylesheet" href="vista/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <header class="header">
        
        <div class="menu container">
            <a href="#" class="logo">PF</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <i class='bx bx-menu bx-sm' ></i>
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="inicio_sesion/link.php">Ingresar<i class='bx bx-user-circle bx-sm' ></i></a></li> 
                </ul>
            </nav>
        </div>
        
        <div class="header-content container">
            <div class="header-txt">
                <h1>Pet friendly</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aspernatur veritatis dolor voluptatem consequatur possimus voluptas molestiae esse,
                    repellat laudantium vel provident magni voluptatibus dicta debitis enim soluta qui, pariatur quas.
                </p>
                <a href="#" class="btn-1">Mas informacion...</a>
            </div>
            <div class="header-img">
                <img src="iconos/veterinario-cachorro-min.jpg" alt="">
            </div>

        </div>

    </header>


    <section class="about-container">
        <div class="about-img">
            <img src="iconos/gato_nosotros" alt="">
        </div>
        <div class="about-txt">
            <h2 id="nosotros">Nosotros</h2>
            <p >
               Lorem, ipsum dolor sit amet consectetur adipisicing elit.
               Sed quaerat voluptate praesentium dignissimos,
               nulla numquam nam, est nesciunt consequatur, et at maxime officia. Magnam porro, neque rem vel laborum nobis?
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Veritatis pariatur, doloremque totam,aspernatur quas neque in eaque explicabo ipsa mollitia ad.
                Quia facere dicta nesciunt totam accusantium blanditiis, incidunt quis!
            </p>
        </div>

    </section>

    <main class="servicios">

        <h2 id="servicios">Servicios</h2>
        <div class="servicios-content">

            <div class="servicio-1">
                <i class='bx bxs-dog bx-md' ></i>
                <h3>Control</h3>
                <p>
                    Ofrecemos una base de datos para tener control
                    sobre todas las mascotas de cada cliente registrado.
                </p>
            </div>

            <div class="servicio-2">
                <i class='bx bxs-shower bx-md' ></i>
                <h3>Baños</h3>
                <p>Los diferentes tipos de baños
                    que se le pueden realizar a tus mascotas.
                </p>
            </div>

            <div class="servicio-3">
                <i class='bx bxs-injection bx-md' ></i>
                <h3>Vacunas</h3>
                <p>
                    Las vacunas y tratamientos que necesita la mascota
                    organizadas de manera coherente.

                </p>
            </div>
        </div>
    </main>

    <section class="formulario container">

        <form method="post" autocomplete="off">
            
            <h2>Consulta previa</h2>

            <div class="input-group">

                <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y apellido">
                <i class='bx bxs-user bx-sm' ></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono celular">
                    <i class='bx bxs-phone bx-sm' ></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class='bx bxs-envelope bx-sm' ></i>
                </div>
                                
                <div class="input-container">
                    <textarea name="message" placeholder="Describe tu consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunctcion()">
            </div>

        </form>
    </section>
    
    <button onclick="topFunction()" id="myBtn" title="IR ARRIBA"><i class='bx bx-up-arrow-circle bx-sm'></i></button>

    <footer class="footer">
        <div class="link">
            <a href="#" class="logo">PF</a>
        </div>
        <div class="text"><a>Creado por: Deyner David Murillo Mena</a></div>
        


        
        <div class="link"> </div>
        
    </footer>

    <?php
        include "send.php" ;
    ?>

    <script>
        function myFunctcion(){
            window.location.href="http://localhost/petfriendly";
        }
    </script>

    <script>

        // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

    </script>

</body>
</html>
