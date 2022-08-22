<template>
  <div class="flex flex-col justify-center gap-4">
    <div id="title-container">
      <h1
        class="
          text-primary-red text-center text-3xl
          border-b-[1px] border-primary-border
        "
      >
        {{ title }}
      </h1>
    </div>
    <nuxt-link :to="`/order/${title.toLowerCase()}`">
      <img
        class="border-[1px] border-[red]"
        src="https://via.placeholder.com/350x250"
        alt=""
      />
    </nuxt-link>
  </div>
</template>

<script setup>
const props = defineProps({
  title: {
    type: String,
    default: "",
  },
});
</script>