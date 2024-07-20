<style src="../assets/styles/userBooks.css"></style>


<template>
  <div class="container">
    <h2>Your Borrowed Books</h2>
    <div v-for="book in borrowedBooks" :key="book.id" class="card">
      <h3>{{ book.title }}</h3>
      <p>{{ book.description }}</p>
      <p>Genre: {{ book.genre }}</p>
      <p>Price: {{ book.price }}</p>
      <button class="button" @click="returnBook(book.id)">Return</button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      borrowedBooks: []
    };
  },
  methods: {
    async fetchUserBooks() {
      const response = await axios.get('/api/user-books');
      this.borrowedBooks = response.data;
    },
    async returnBook(bookId) {
      await axios.post(`/api/return/${bookId}`);
      this.fetchUserBooks();
    }
  },
  created() {
    this.fetchUserBooks();
  }
};
</script>


