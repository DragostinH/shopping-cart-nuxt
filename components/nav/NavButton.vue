<template>
  <button
    :class="` rounded-md py-2 px-4 ${computedColor} ${computedBackground} font-light uppercase hover:text-[red] ease-in duration-150`"
  >
    <slot />
  </button>
</template>

<script setup>
const props = defineProps({
  color: {
    type: String,
    default: "white",
  },
  backgroundColor: {
    type: String,
    default: "",
  },
});

console.log(props);

const computedColor = computed(() => {
  return `text-[${props.color}]`;
});

const computedBackground = computed(() => {
  return `bg-[${props.backgroundColor}]`;
});
</script>