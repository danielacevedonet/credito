<?php
if (is_page()) {
  // Para poner todas las clases que necesita la pagina Imprimir facturas
  function creditoClases(){
    require TEMPLATEPATH . '/layout.css';
    require TEMPLATEPATH . '/cuenta.css';
  }

  // Para poner todas las los templates que se necesitasn
  function creditoTemplate(){
    require TEMPLATEPATH . '/cuenta.php';
  }

  // Con este atraemos el layout
  require('layout.php');
}


// <?php

// if (get_field('aqui_hospedaje') == 'articulo' ) {
//     get_template_part('templates/single-articulo');
//   } else {

//         // Para poner las funciones de Layout de la pagina
//         include "functions/layout.php";
//         // Para poner las funciones de la pagina
//         include "functions/single-hospedaje.php";

//         // Para poner todas las clases que necesita la pagina Imprimir facturas
//         function aquiClases(){
//           require TEMPLATEPATH . '/css/layout.css';
//           require TEMPLATEPATH . '/css/single-hospedaje.css';
//           require TEMPLATEPATH . '/css/container.css';
//           require TEMPLATEPATH . '/css/input-checkbox.css';
//           require TEMPLATEPATH . '/css/mapa-google.css';
//         }

//         function aquiTemplate(){
//           if (get_field('aqui_hospedaje') == 'hospedaje' ) {
//             get_template_part( 'templates/single-hospedaje' );
//           } else if (get_field('aqui_hospedaje') == 'restaurante' ) {
//             echo "Es cogieron restaurante";
//           }
//         }

//         // Para traer los todo el JavaScript de la pagina
//         function aquiJavaScrip(){
//           require TEMPLATEPATH . '/js/jquery-2.1.1.min.js';
//           require TEMPLATEPATH . '/js/materialize.js';
//           require TEMPLATEPATH . '/js/layout.js';
//           require TEMPLATEPATH . '/js/single-hospedaje.js';
//         }

//         // Para traer el template layout
//         include "templates/layout.php";

// }
