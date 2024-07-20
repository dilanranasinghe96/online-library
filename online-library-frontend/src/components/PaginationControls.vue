<template>
  <div class="pagination">
    <button @click="prevPage" :disabled="currentPage <= 1">Previous</button>
    <span>Page {{ currentPage }} of {{ totalPages }}</span>
    <button @click="nextPage" :disabled="currentPage >= totalPages">Next</button>
  </div>
</template>

<script>
export default {
  name: 'PaginationControls',
  props: {
    totalPages: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      currentPage: 1
    };
  },
  methods: {
    prevPage() {
      if (this.currentPage > 1) {
        this.currentPage--;
        this.$emit('page-changed', this.currentPage);
      }
    },
    nextPage() {
      if (this.currentPage < this.totalPages) {
        this.currentPage++;
        this.$emit('page-changed', this.currentPage);
      }
    }
  }
};
</script>

<style scoped>
/* Add any additional styles for pagination here */
</style>
