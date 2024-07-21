<template>
    <div class="book-list-view">
      <SiteNavbar />
      <div class="container">
        <h1>Online Library</h1>
        <input type="text" v-model="searchQuery" placeholder="Search by title, description, or genre" />
        <BookList :books="books" @borrow="borrowBook" @return="returnBook" />
        <BookPagination :total="totalPages" :current="currentPage" @change="changePage" />
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
import BookList from '../components/BookList.vue';
import BookPagination from '../components/BookPagination.vue';
import SiteNavbar from '../components/SiteNavbar.vue';
  
  export default {
    name: 'BookListView',
    components: {
      SiteNavbar,
      BookList,
      BookPagination
    },
    data() {
      return {
        books: [],
        searchQuery: '',
        totalPages: 1,
        currentPage: 1
      };
    },
    async created() {
      this.fetchBooks();
    },
    methods: {
      async fetchBooks(page = 1) {
        try {
          const response = await axios.get(`http://localhost:8000/api/books?page=${page}&search=${this.searchQuery}`);
          this.books = response.data.data;
          this.totalPages = response.data.last_page;
          this.currentPage = page;
        } catch (error) {
          console.error(error);
        }
      },
      async borrowBook(bookId) {
        try {
          await axios.post(`http://localhost:8000/api/borrow/${bookId}`);
          this.fetchBooks();
        } catch (error) {
          console.error(error);
        }
      },
      async returnBook(bookId) {
        try {
          await axios.post(`http://localhost:8000/api/return/${bookId}`);
          this.fetchBooks();
        } catch (error) {
          console.error(error);
        }
      },
      changePage(page) {
        this.fetchBooks(page);
      }
    }
  };
  </script>
  
  <style scoped>
  @import '@/assets/book-list-view.css';
  </style>
  