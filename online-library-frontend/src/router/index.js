import { createRouter, createWebHistory } from 'vue-router';
import UserLogin from '../components/UserLogin.vue';
import UserRegister from '../components/UserRegister.vue';
import BookListView from '../views/BookListView.vue';

const routes = [
  { path: '/', component: BookListView },
  { path: '/login', component: UserLogin },
  { path: '/register', component: UserRegister }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
