<template>
    <div>
      <h1>Order Status</h1>
      <form @submit.prevent="searchOrder">
        <input v-model="invoiceNumber" placeholder="Invoice #" />
        <button type="submit">Search</button>
      </form>
      <div v-if="order">
        <p>Status: {{ order.status.name }}</p>
        <img v-if="order.status.name === 'Delivered'" :src="order.photo" />
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        invoiceNumber: '',
        order: null,
      };
    },
    methods: {
      searchOrder() {
        axios.get(`/api/orders/${this.invoiceNumber}`).then((response) => {
          this.order = response.data;
        });
      },
    },
  };
  </script>
  