<template>
  <header
    class="
      bg-[url('https://via.placeholder.com/1920x1080.png?text=Header+Background')]
      bg-center bg-cover bg-no-repeat
      flex
      justify-between
      p-8
    "
  >
    <nuxt-link to="/">
      <img
        class="rounded-full border-[1px]"
        src="https://via.placeholder.com/125x125"
        alt="company-logo"
      />
    </nuxt-link>
    <TheNav />
    <slot />
  </header>
</template>

<script setup>
import TheNav from "~/components/nav/TheNav.vue";
</script>
