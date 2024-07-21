import Vue from 'vue';
import Router from 'vue-router';
import BookDetails from './components/BookDetails.vue';
import BookList from './components/BookList.vue';
import Home from './views/HomeView.vue';
import Login from './views/LoginView.vue';
import Register from './views/RegisterView.vue';

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/register',
      name: 'register',
      component: Register
    },
    {
      path: '/books',
      name: 'book-list',
      component: BookList
    },
    {
      path: '/books/:id',
      name: 'book-details',
      component: BookDetails,
      props: true
    }
  ]
});
