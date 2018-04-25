<?php

  // Para poner todas las funciones que se necesitan
  function creditoFunction()
  {
    if (is_page())
    {
      if (is_user_logged_in())
      {
        require TEMPLATEPATH . '/function/cuenta.php';
      }
    }
    else if (is_front_page())
    {

    }

  }
  // Para poner todas las clases que necesita la pagina.
  function creditoClases()
  {
    require TEMPLATEPATH . '/layout.css';
    // CSS para las paginas
    if (is_page())
    {
      if (is_user_logged_in())
      {
        require TEMPLATEPATH . '/cuenta.css';
      }
      else
      {
        require TEMPLATEPATH . '/home.css';
      }
    }
    // CSS para el frente de la pagina
    else if (is_front_page())
    {
      require TEMPLATEPATH . '/home.css';
      if (is_user_logged_in())
      {
        require TEMPLATEPATH . '/cuenta.css';
      }
      else
      {
        require TEMPLATEPATH . '/login.css';
      }
    }
  }

  // Para poner todas las los templates que se necesita.
  function creditoTemplate()
  {
    if (is_page())
    {
      if (is_user_logged_in())
      {
        require TEMPLATEPATH . '/cuenta.php';
      }
      else
      {
        require TEMPLATEPATH . '/warning.php';
      }
    }
    else if (is_front_page())
    {
      if (is_user_logged_in())
      {
        require TEMPLATEPATH . '/home-in.php';
      }
      else
      {
        require TEMPLATEPATH . '/home-out.php';
      }
    }
  }

  function creditoJavaScrip()
  {
    require TEMPLATEPATH . '/jquery-2.1.1.js';
    require TEMPLATEPATH . '/materialize.js';
    require TEMPLATEPATH . '/cuenta.js';
  }

  // Con este atraemos el layout
  require('layout.php');
