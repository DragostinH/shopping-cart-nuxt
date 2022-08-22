<template>
  <Custom>
    <MiddleNav />
    <slot />
  </Custom>
</template>

<script setup>
import MiddleNav from "~/components/nav/MiddleNav.vue";
import Custom from "./custom.vue";
</script>