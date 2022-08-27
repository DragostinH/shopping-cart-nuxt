<template>
  <div class="product-container">
    <p class="product-title">fanta 330ml</p>
    <div class="product-mid-container">
      <!-- placeholder img -->
      <img
        class="product-img"
        src="https://placehold.co/300x200"
        title=""
        style=""
      />
      <p class="product-description">fanta orange/lime 0.330l</p>
    </div>
    <div class="product-bottom-container">
      <p class="product-price">$1.99</p>
      <div class="product-btn-container">
        <div class="add-to-bskt-btn-container">
          <!-- shopping cart icon -->
          <button>Details</button>
          <button class="bg-[red]">ADD <img :src="BasketIcon" alt="" /></button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import BasketIcon from "~/assets/img/shopping-cart-icon.png";
const props = defineProps({
  product: {
    type: Object,
    default: {
      title: "fanta 330ml",
      description: "fanta orange/lime 0.330l",
      price: "1.99",
      img: "./img/drinks/softDrinks/fanta-330.jpg",
    },
    required: true,
  },
});
</script>

<style>
</style>