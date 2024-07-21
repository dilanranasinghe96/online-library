<template>
    <div>
      <h3>{{ book.title }}</h3>
      <p>{{ book.description }}</p>
      <p><strong>Genre:</strong> {{ book.genre }}</p>
      <p><strong>Price:</strong> ${{ book.price }}</p>
      <button @click="borrowBook">Borrow</button>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    props: ['book'],
    methods: {
      async borrowBook() {
        try {
          const response = await axios.post(`http://localhost:8000/api/borrow`, {
            book_id: this.book.id
          });
          console.log(response.data);
        } catch (error) {
          console.error(error);
        }
      }
    }
  };
  </script>
  
  <style scoped>
  div {
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
  }
  </style>
  