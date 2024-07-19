<template>
  <div>
    <input v-model="searchTerm" placeholder="Search for books..." />
    <button @click="search">Search</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      searchTerm: ''
    };
  },
  methods: {
    search() {
      this.$emit('search', this.searchTerm);
    }
  }
};
</script>

<style>
input {
  padding: 10px;
  font-size: 16px;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}
</style>
