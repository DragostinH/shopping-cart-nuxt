<template>
  <p>{{}}</p>
</template>

<script setup>
definePageMeta({
  layout: "custom",
});
const route = useRoute();

console.log(route.params);
</script>