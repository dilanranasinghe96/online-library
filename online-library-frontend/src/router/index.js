import { createRouter, createWebHistory } from 'vue-router';
import BookDetails from '../components/BookDetails.vue';
import SearchBooks from '../components/SearchBooks.vue';
import UserBooks from '../components/UserBooks.vue';
import UserLogin from '../components/UserLogin.vue';
import UserRegister from '../components/UserRegister.vue'; 
import NotFound from '../views/NotFound.vue';

const routes = [
  { path: '/', redirect: '/login' },
  { path: '/login', component: UserLogin },
  { path: '/register', component: UserRegister }, 
  { path: '/books', component: SearchBooks },
  { path: '/user-books', component: UserBooks },
  { path: '/books/:id', component: BookDetails },
  { path: '/:pathMatch(.*)*', component: NotFound }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
