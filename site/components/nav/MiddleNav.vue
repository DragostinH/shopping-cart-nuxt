<template>
  <section>
    <ul
      class="bg-[black] text-primary-50 uppercase flex items-center p-4 gap-6"
    >
      <li class="">
        <button class="hover:text-[#c59d5f] ease-in duration-150 uppercase">
          entrees
        </button>
      </li>
      <li class="active:bg-[#515151]">
        <button class="hover:text-[#c59d5f] ease-in duration-150 uppercase">
          sushi
        </button>
      </li>
      <li class="">
        <button class="hover:text-[#c59d5f] ease-in duration-150 uppercase">
          drinks
        </button>
      </li>
    </ul>
    <ul class="bg-[#515151] flex">
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
    </ul>
  </section>
</template>

<script setup>
/*
const entree = { mainDishes: {}, rice: {}, salads: {}, fish: {} };
const sushi = { combo: {}, nagiri: {}, sashimi: {} };
const drinks = { sodas: {}, beers: {}, wines: {} };
const menu = [entree, sushi, drinks];
*/
const route = useRoute();

</script>
