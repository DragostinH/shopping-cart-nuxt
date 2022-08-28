<template>
  <Product />
</template>

<script setup>
import Product from "@/components/menu/Product.vue";

definePageMeta({
  layout: "order",
});

onMounted(async () => {
  console.log("mounted");
  const data = await fetch(`http://localhost:8000/api/order`);
  const order = await data.json();
  console.log(data);
  console.log(order);
});
</script>
