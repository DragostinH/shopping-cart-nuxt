<template>
  <div class="flex flex-col gap-6">
    <section id="menu-links-container" class="flex flex-wrap items-center justify-center gap-8">
      <MenuLink title="Entrée" value="entree" />
      <MenuLink title="Sushi" />
      <MenuLink title="Drinks" />
    </section>
    <section id="quote-section" class="bg-[black] flex flex-col items-center p-6" >
      <!-- Flower svg -->
      <div class="flex" id="flower-container">
        <img src="~/assets/img/quote-flower.png" alt="" />
        <img src="~/assets/img/quote-flower.png" alt="" />
        <img src="~/assets/img/quote-flower.png" alt="" />
      </div>
      <figure class="text-[white] p-6">
        <blockquote class=' italic border-b-[1px] border-b-[rgba(255,255,255,0.2)] before:content-["-"] after:content-["-"]'>  
          If you pay us money for our overpriced food, good fortune will come. This is a very genuine quote so you gotta trust it, bro
        </blockquote>
        <figcaption class="text-right">
          -Not the restaurant owner.
        </figcaption>
      </figure>
    </section>
  </div>
</template>

<script setup>
import MenuLink from "~/components/home/MenuLink.vue";
definePageMeta({
  layout: "custom",
});
</script>
