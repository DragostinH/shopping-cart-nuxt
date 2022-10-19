<template>
  <nav class="bg-[rgba(0,0,0,0.2)] items-center absolute rounded-md right-0 top-0 py-4">
    <ul class="flex gap-2 bg-[black] p-2 scre">
      <li>
        <nuxt-link to="/"><NavButton>Home</NavButton></nuxt-link>
      </li>
      <li>
        <nuxt-link to="/order"
          ><NavButton class="text-[white] border-none"
            >Menu</NavButton
          ></nuxt-link
        >
      </li>
      <li>
        <nuxt-link to="/order"
          ><NavButton class="text-[black] bg-[white] border-none"
            >Order</NavButton
          ></nuxt-link
        >
      </li>
      <li>
        <nuxt-link to="/about"><NavButton>About</NavButton></nuxt-link>
      </li>
      <li>
        <nuxt-link to="/contact"><NavButton>Contact</NavButton></nuxt-link>
      </li>
      <li>
        <nuxt-link to="/account"><NavButton>Account</NavButton></nuxt-link>
      </li>
      <li><button class= "active:bg-[white]" :class="(e)=>updateColor(e)">order</button></li>
    </ul>
  </nav>
</template>

<script setup>
const route = useRoute();

// const updateColor = (e) => {
//   console.log(e);
// }

const updateColor = (e) => {
  if(route.name === e.target.textContent){
    console.log('clicked');
    return "text-primary-50";
  }
}
</script>