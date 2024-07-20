<template>
  <div class="container">
    <h2>{{ book.title }}</h2>
    <p>{{ book.description }}</p>
    <p>Genre: {{ book.genre }}</p>
    <p>Price: {{ book.price }}</p>
    <button class="button" @click="borrowBook">Borrow</button>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      book: {}
    };
  },
  methods: {
    async fetchBook() {
      const response = await axios.get(`/api/books/${this.$route.params.id}`);
      this.book = response.data;
    },
    async borrowBook() {
      await axios.post(`/api/borrow/${this.book.id}`);
      this.$router.push('/user-books');
    }
  },
  created() {
    this.fetchBook();
  }
};
</script>


