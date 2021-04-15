<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>El peñol - Guatape</title>
      <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
      <link rel="stylesheet" href="css/peñol.css">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
   </head>
   <body>
      <header>
         <nav>
            <a href="/index">Inicio</a>
            <a href="/alojamientos">Alojamiento</a>
            <a href="/recorridos">Recorrido</a>
            <a href="/Tours">Tours</a>
            <a href="/Contacto">Contacto</a>
         </nav>
         <section class="textos-header">
            <h1>
               Encuentra tus próximas vacaciones
            </h1>
            <h2>
               Con turismo.loc
            </h2>
            <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
            <div class = "wave" style="height: 150px; overflow: hidden;" >
               <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                  <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
               </svg>
            </div>
         </section>
      </header>
      <main>
         <section class= "contenedor peñol">
            <h2 class="titulo">
            El peñol - Guatape
            </h2>
            <!-- Estas son las caracteristicas del recorrido -->
            <div class="contenedor-peñol">
               <img src="img/peñol2.jpg" alt="" class = "img-port-recor">
               <div class="contenedor-texthot">
                  <h2>
                     Caracteristicas del recorrido
                  </h2>
                  <h3><span></span> Esta es una caracteristica del recorrido.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ea voluptatibus odio architecto voluptate soluta itaque ipsam in sequi fuga ad, ipsa beatae esse numquam illo veritatis illum ab ex!</p>
                  <h3><span></span> Esta es una caracteristica del recorrido.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ea voluptatibus odio architecto voluptate soluta itaque ipsam in sequi fuga ad, ipsa beatae esse numquam illo veritatis illum ab ex!</p>
                  <h3><span></span> Esta es una caracteristica del recorrido.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ea voluptatibus odio architecto voluptate soluta itaque ipsam in sequi fuga ad, ipsa beatae esse numquam illo veritatis illum ab ex!</p>
                  <h3><span></span> Esta es una caracteristica del recorrido.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ea voluptatibus odio architecto voluptate soluta itaque ipsam in sequi fuga ad, ipsa beatae esse numquam illo veritatis illum ab ex!</p>
                  <h3><span></span> Esta es una caracteristica del recorrido.</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ea voluptatibus odio architecto voluptate soluta itaque ipsam in sequi fuga ad, ipsa beatae esse numquam illo veritatis illum ab ex!</p>
               </div>
            </div>
         </section>
         <section class="contenedor-form">
            <div class = "formu">
               <h2 class = "Titulo">Reserva</h2>
               <div class="selecc-select">
                  Seleccione la ubicación de su tour:
                  <form name = "CB_Selec"action="" id = "CB_Selec">
                     <select class="form-select" name="opt" id="selecc" >
                         <option value="0">--Seleccione un tour--</option>
                        <option value="1">Guatape</option>
                        <option value="2">Medellín</option>
                        <option value="3">Cartagena de Indias</option>
                     </select>
                  </form>
                  <input type="button" name ="btnConocer" id = "btnConocer" value="Conocer"
                     onclick = "" >
               </div>
               <div class="info">
                  <p>Nombre del tour: <input  type ="text" id ="id_nom" class ="form-control" readonly></p>
                  <p>Localidad del tour: <input type ="text" name ="loc_alo" id ="id_loc" class ="form-control"readonly></p>
                  <p>Precio del tour: <input type ="money" name ="pre_alo" id ="id_pre" class ="form-control"readonly></p>
                  <input type="button" name ="btncargar" id = "btnCargar" value="Reservar"
                     onclick = "" >
               </div>
               <div class="reser">
                  <p>Nombre de la reserva: <input type ="text" name ="nom_res" id ="id_nom_res"class ="form-control"></p>
                  <p>Identificación: <input type ="int" name ="id_reserv" id ="id_reserv"class ="form-control"></p>
                  <p>Acompañantes: <input type ="int" name ="Acom_res" id ="id_aco_res"class ="form-control"></p>
                  <p>Fecha de recorrido: <input type ="date" name ="fecha" id ="id_date"class ="form-control"></p>
                </div>  

                <div class="opt_ext-select">
                    Servicio extra: 
                    <form name="cb_extra" id = "cb_extra">
                        <select class = "form-select"name="opt_ext" id="opt_ext">
                            <option value="a">Ninguno</option>
                            <option value="b">Transporte</option>
                            <option value="c">Simcard</option>
                        </select>
                    </form>
                  
                  <p>Valor servicio extra: <input type="money" name ="V_extr" id = "id_vextr" class ="form-control"readonly></p>
                  <p>Valor total: <input type="money" name ="V_final" id ="id_final" class ="form-control"readonly></p>
                  <input type="button" name ="btnRegistrar" id = "btnRegistrar" value="Registrar reserva"
                     onclick = "" >
                     <input type="button" name ="btn" id = "btn" value ="Atras"
                  onclick = "history.back()">

               </div>
            </div>
         </section>
      </main>
      <footer>
         <div class="contenedor-footer">
            <div class="content-foot">
               <h4>Teléfono</h4>
               <p>1234567890</p>
            </div>
            <div class="content-foot">
               <h4>Email</h4>
               <p>Correo@deprueba.com</p>
            </div>
            <div class="content-foot">
               <h4>Dirección</h4>
               <p>Calle falsa # 1-23</p>
            </div>
         </div>
         <h2 class="titulo-final">&copy; Takeomatsu's Art | Santiago Bravo</h2>
      </footer>
   </body>
</html>