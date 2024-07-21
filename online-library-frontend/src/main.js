import axios from 'axios';
import { createApp } from 'vue';
import App from './App.vue';
import './assets/styles/main.css'; // Import global styles
import router from './router';
import store from './store';

// Set the base URL for axios
axios.defaults.baseURL = 'http://localhost:8000'; // Replace with your Laravel server URL

const app = createApp(App);
app.use(router);
app.use(store);
app.mount('#app');
