@extends('layouts.appuser')

@section('body')

<style>
/* Styles pour la navigation verticale */
.vertical-nav {
    background-color: #333;
    width: 250px; /* Largeur de la barre de navigation */
    height: 100%;
    position: fixed; /* Barre de navigation fixe à gauche */
    top: 0;
    left: 0;
    overflow-y: auto; /* Activer la défilement vertical si nécessaire */
}

.vertical-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.vertical-nav li {
    padding: 10px;
    text-align: center;
}

.vertical-nav a {
    color: #fff;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s;
}

.vertical-nav a:hover {
    background-color: #555;
}


/* Styles pour la navigation horizontale */
.horizontal-nav {
    background-color: #333;
    width: 100%;
}

.horizontal-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex; /* Afficher les éléments de la liste en ligne */
}

.horizontal-nav li {
  
    padding: 10px;
    text-align: center;
}

.horizontal-nav a {
    color: #fff;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s;
}

.horizontal-nav a:hover {
    background-color: #555;
}


</style>
<nav class="vertical-nav">
  <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">À propos</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Produits</a></li>
      <li><a href="#">Contact</a></li>
  </ul>
</nav>
<nav class="horizontal-nav">
  <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">À propos</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Produits</a></li>
      <li><a href="#">Contact</a></li>
  </ul>
</nav>
<div style="margin-left:25%;padding:1px 16px;">
  <h2>Fixed Full-height Side Nav</h2>
  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
</div>

</body>
</html>



   @endsection
   