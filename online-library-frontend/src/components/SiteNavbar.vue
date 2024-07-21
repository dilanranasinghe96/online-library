<template>
  <nav class="navbar">
    <router-link to="/">Home</router-link>
    <router-link to="/login">Login</router-link>
    <router-link to="/register">Register</router-link>
  </nav>
</template>

<script>
export default {
  name: 'SiteNavbar',
};
</script>

<style scoped>
@import '@/assets/site-navbar.css';
</style>
