<template>
  <main class="flex flex-col">
    <TheHeader/>
    <MiddleData>
      <slot/>
    </MiddleData>
    <TheFooter/>
  </main>
</template>

<script setup>
import TheHeader from "~/layouts/custom/TheHeader.vue";
import TheFooter from "~/layouts/custom/TheFooter.vue";
import MiddleData from "./custom/MiddleData";

</script>