<template>
  <div class="register-container">
    <h2>Register</h2>
    <form @submit.prevent="register">
      <div class="input-group">
        <label for="name">Name:</label>
        <input v-model="name" id="name" type="text" required />
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input v-model="email" id="email" type="email" required />
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input v-model="password" id="password" type="password" required />
      </div>
      <button class="button" type="submit">Register</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'UserRegister',
  data() {
    return {
      name: '',
      email: '',
      password: ''
    };
  },
  methods: {
    async register() {
      try {
        await axios.post('/api/register', {
          name: this.name,
          email: this.email,
          password: this.password
        });
        this.$router.push('/login'); 
      } catch (error) {
        console.error('Error registering user:', error);
        alert('Registration failed. Please check your details.');
      }
    }
  }
};
</script>


<style scoped src="../assets/styles/register.css"></style>
