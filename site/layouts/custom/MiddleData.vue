<template>
  <section>
    <h1>{{ name }}</h1>
    <h2>{{ subName }}</h2>
    <article id="products-spread">
      <slot/>
    </article>
  </section>
</template>

<script setup>
const props = defineProps({
  name: {
    type: String,
    required: true,
  },
  subName: {
    type: String,
    required: true,
  },
});
</script>
