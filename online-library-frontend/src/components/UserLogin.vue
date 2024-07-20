<template>
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
      // Handle login logic
      this.$router.push('/books');
    }
  }
};
</script>

<style scoped>
.login-container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: white;
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
}
</style>
