import { createApp } from 'vue';
import App from './App.vue';
import './assets/styles/main.css'; // Import global styles
import router from './router';
import store from './store';

const app = createApp(App);
app.use(router);
app.use(store);
app.mount('#app');
