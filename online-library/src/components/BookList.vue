<template>
  <div>
    <ul>
      <li v-for="book in books" :key="book.id">
        <h3>{{ book.title }}</h3>
        <p>{{ book.description }}</p>
        <p><strong>Genre:</strong> {{ book.genre }}</p>
        <p><strong>Price:</strong> ${{ book.price }}</p>
        <button @click="$emit('borrow', book.id)">Borrow</button>
        <button @click="$emit('return', book.id)">Return</button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['books']
};
</script>

<style>
ul {
  list-style-type: none;
  padding: 0;
}

li {
  border: 1px solid #ccc;
  padding: 20px;
  margin: 10px 0;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin: 5px;
}
</style>
