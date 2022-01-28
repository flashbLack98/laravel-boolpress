<template>
    <div  class="container">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <router-link class="nav-link" to="/Home">Home <span class="sr-only">(current)</span></router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/Contacts">Contact</router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/About">About</router-link>
      </li>
     
    </ul>
  </div>
</nav>
        <!-- NAVBAR -->

        <!-- CONTENUTO VARIABILE -->
        <router-view></router-view>

    </div>
</template>

<script>

/* import axios from 'axios'; */

export default {
    name: "App",
    
};
</script>

