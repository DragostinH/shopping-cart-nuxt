<template>
  <div class="product-container">
    <p class="product-title">fanta 330ml</p>
    <div class="product-mid-container">
      <img
        class="product-img"
        src="../Menu/img/drinks/softDrinks/fanta-330.jpg"
        title=""
        style=""
      />
      <p class="product-description">fanta orange/lime 0.330l</p>
    </div>
    <div class="product-bottom-container">
      <p class="product-price">$1.99</p>
      <div class="product-btn-container">
        <div class="add-to-bskt-btn-container">
          <button class="add-to-basket-btn product-btn">ADD</button
          ><img class="add-btn-icon" src="./img/shopping-cart-icon.png" />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
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