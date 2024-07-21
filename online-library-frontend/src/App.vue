<template>
  <div id="app">
    <SiteNavbar />
    <main>
      <router-view />
    </main>
  </div>
</template>

<script>
import SiteNavbar from './components/SiteNavbar.vue';

export default {
  name: 'App',
  components: {
    SiteNavbar
  }
};
</script>

<style>
@import './assets/styles.css';

#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

main {
  flex: 1;
}
</style>
