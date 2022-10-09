<template>
  <div class="flex flex-col border-r-8 border-primary-red bg-[#221b1a] text-primary-50 p-4 rounded-md">
    <p class="product-title">{{ name }}</p>
    <div class="product-mid-container flex">
      <img
          class="product-img"
          :src="image"
          title=""
          style=""
      />
      <p class="product-description">{{ description }}</p>
    </div>
    <div class="product-bottom-container flex">
      <p class="product-price">{{ price }}</p>
      <div class="product-btn-container">
        <div class="add-to-bskt-btn-container">
          <button class="add-to-basket-btn product-btn">ADD
          </button
          >
          <img class="add-btn-icon" src="https://via.placeholder.com/25x25"/>
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
      name: "fanta 330ml",
      description: "fanta orange/lime 0.330l",
      price: "1.99",
      image: "./img/drinks/softDrinks/fanta-330.jpg",
    },
    required: true,
  },
});
//use computed property to get the product name
const name = computed(() => props.product.name);
//use computed property to get the product description
const description = computed(() => props.product.description);
//use computed property to get the product price
const price = computed(() => props.product.price);
//use computed property to get the product image
const image = computed(() => 'https://via.placeholder.com/280x200');
</script>

<style>
</style>