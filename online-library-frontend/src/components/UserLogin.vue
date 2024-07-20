<style src="../assets/styles/login.css"></style>


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
      this.$router.push('/books');
    }
  }
};
</script>
