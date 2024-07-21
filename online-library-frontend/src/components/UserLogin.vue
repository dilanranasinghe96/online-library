<template>
  <div class="login-page">
    <div class="login-container">
      <h2>Login</h2>
      <form @submit.prevent="login">
        <div class="input-group">
          <label>Email:</label>
          <input v-model="email" type="email" required />
        </div>
        <div class="input-group">
          <label>Password:</label>
          <input v-model="password" type="password" required />
        </div>
        <button class="button" type="submit">Login</button>
      </form>
      <p class="register-link">
        Don't have an account? 
        <button class="register-button" @click="$router.push('/register')">Register</button>
      </p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'UserLogin',
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    async login() {
      try {
        const response = await axios.post('/api/login', {
          email: this.email,
          password: this.password
        });
        
        // Store the token in local storage or Vuex store
        localStorage.setItem('authToken', response.data.token);
        
        // Redirect to books page
        this.$router.push('/books');
      } catch (error) {
        console.error('Error logging in:', error);
        alert('Login failed. Please check your credentials.');
      }
    }
  }
};
</script>
