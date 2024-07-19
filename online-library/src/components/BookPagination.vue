<template>
  <div>
    <button @click="paginate(pagination.current_page - 1)" :disabled="!pagination.links.prev">Previous</button>
    <span>Page {{ pagination.current_page }} of {{ pagination.last_page }}</span>
    <button @click="paginate(pagination.current_page + 1)" :disabled="!pagination.links.next">Next</button>
  </div>
</template>

<script>
export default {
  props: ['pagination'],
  methods: {
    paginate(page) {
      if (page > 0 && page <= this.pagination.last_page) {
        this.$emit('paginate', page);
      }
    }
  }
};
</script>

<style>
button {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin: 5px;
}
</style>
