<template>
  <div class="container">
    <h2>Book List</h2>
    <div v-for="book in books" :key="book.id" class="card">
      <img :src="book.coverImage" alt="Book Cover">
      <h3>{{ book.title }}</h3>
      <p>{{ book.description }}</p>
      <p>Genre: {{ book.genre }}</p>
      <p>Price: {{ book.price }}</p>
      <button class="button" @click="borrowBook(book.id)">Borrow</button>
    </div>
    <PaginationControls :total-pages="totalPages" @page-changed="fetchBooks" />
  </div>
</template>

<script>
import PaginationControls from './PaginationControls.vue';
import axios from 'axios';

export default {
  components: {
    PaginationControls
  },
  data() {
    return {
      books: [],
      totalPages: 1
    };
  },
  methods: {
    async fetchBooks(page = 1) {
      const response = await axios.get(`/api/books?page=${page}`);
      this.books = response.data.books;
      this.totalPages = response.data.totalPages;
    },
    async borrowBook(bookId) {
      await axios.post(`/api/borrow/${bookId}`);
      this.fetchBooks();
    }
  },
  created() {
    this.fetchBooks();
  }
};
</script>

<style scoped>
.card {
  background-color: white;
  border: 1px solid #ddd;
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
  padding: 20px;
  margin: 20px 0;
}
</style>
