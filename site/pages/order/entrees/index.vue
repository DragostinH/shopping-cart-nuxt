<template>
  <section id="products-spread" class="flex items-center justify-center">
    <article id="products" class="container grid md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-8 p-4">
      <Product v-for="product in products" :key="product.id" :product="product" />
    </article>
  </section>
</template>

<script setup>
import Product from "@/components/menu/Product.vue";
definePageMeta({
  layout: "order",
});

</script>
