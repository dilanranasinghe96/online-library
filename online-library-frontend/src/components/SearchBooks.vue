<template>
  <div class="search-container">
    <h2>Search Books</h2>
    <form @submit.prevent="searchBooks">
      <div class="input-group">
        <label for="search-query">Search:</label>
        <input v-model="query" id="search-query" type="text" placeholder="Search by title, description, or genre" />
      </div>
      <button class="button" type="submit">Search</button>
    </form>
    <div v-if="books.length > 0" class="book-list">
      <div v-for="book in books" :key="book.id" class="card">
        <h3>{{ book.title }}</h3>
        <p>{{ book.description }}</p>
        <p>Genre: {{ book.genre }}</p>
        <p>Price: {{ book.price }}</p>
        <button class="button" @click="borrowBook(book.id)">Borrow</button>
      </div>
    </div>
    <div v-else>
      <p>No books found.</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      query: '',
      books: []
    };
  },
  methods: {
    async searchBooks() {
      try {
        const response = await axios.get(`/api/search-books`, {
          params: { query: this.query }
        });
        this.books = response.data;
      } catch (error) {
        console.error('Error searching books:', error);
      }
    },
    async borrowBook(bookId) {
      try {
        await axios.post(`/api/borrow/${bookId}`);
        this.searchBooks(); // Refresh search results
      } catch (error) {
        console.error('Error borrowing book:', error);
      }
    }
  }
};
</script>

<style scoped>
.search-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: white;
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
}

.search-container .input-group {
  margin-bottom: 15px;
}

.search-container .book-list {
  margin-top: 20px;
}

.search-container .card {
  background-color: white;
  border: 1px solid #ddd;
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
  padding: 20px;
  margin-bottom: 20px;
}
</style>
