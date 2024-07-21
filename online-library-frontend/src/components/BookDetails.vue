<template>
    <div class="book-details" v-if="book">
      <h2>{{ book.title }}</h2>
      <p>{{ book.description }}</p>
      <p><strong>Genre:</strong> {{ book.genre }}</p>
      <p><strong>Price:</strong> ${{ book.price }}</p>
      <button @click="returnBook">Return</button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'BookDetails',
    props: ['id'],
    data() {
      return {
        book: null
      };
    },
    created() {
      this.fetchBook();
    },
    methods: {
      fetchBook() {
       
        this.book = { id: this.id, title: 'Sample Book', description: 'This is a sample book description.', genre: 'Fiction', price: 20 };
      },
      returnBook() {
      }
    }
  };
  </script>
  
  <style scoped>
  .book-details {
    max-width: 800px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
  }
  </style>
  