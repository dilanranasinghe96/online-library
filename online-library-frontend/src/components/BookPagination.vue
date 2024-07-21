<template>
  <div class="pagination">
    <button @click="changePage(page)" v-for="page in total" :key="page" :disabled="page === current">{{ page }}</button>
  </div>
</template>

<script>
export default {
  name: 'BookPagination',
  props: ['total', 'current'],
  methods: {
    changePage(page) {
      this.$emit('change', page);
    }
  }
};
</script>

<style scoped>
@import '@/assets/book-pagination.css';
</style>
