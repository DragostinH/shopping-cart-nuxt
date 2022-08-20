<template>
  <main>
    <TheHeader />
    <slot />
    <TheFooter />
  </main>
</template>

<script setup>
import TheHeader from "~/layouts/custom/TheHeader.vue";
import TheFooter from "~/layouts/custom/TheFooter.vue";
</script>