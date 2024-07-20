
import NotFound from '../views/NotFound.vue';

import { createRouter, createWebHistory } from 'vue-router';
import BookDetails from '../components/BookDetails.vue';
import SearchBooks from '../components/SearchBooks.vue'; // Import the SearchBooks component
import UserBooks from '../components/UserBooks.vue';
import UserLogin from '../components/UserLogin.vue';

const routes = [
  { path: '/', redirect: '/login' },
  { path: '/login', component: UserLogin },
  { path: '/books', component: SearchBooks }, // Path for SearchBooks
  { path: '/user-books', component: UserBooks },
  { path: '/books/:id', component: BookDetails },
  { path: '/:pathMatch(.*)*', component: NotFound }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
