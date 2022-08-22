<template>
  <footer
    class="
      bg-[black]
      flex flex-col
      justify-center
      items-center
      w-full
      gap-4
    "
  >
    <article class="text-[white]">
      <p class="contact-p">Contacts</p>
      <p class="address-p">Somewhere Street, Postcode, Nowhereland</p>
      <p class="tel-orders">
        Reservations and orders: <span class="tel-span">420696969</span>
      </p>
      <p class="email-p">
        E-mail HQ: <span class="hq-span">info@expensiverestaurant.lmao</span>
      </p>
      <p class="email-reservations">
        Email for reservations:
        <span class="reservation-span"
          >whoareyoukidding@expensiverestaurant.lmao</span
        >
      </p>
    </article>

    <article class="social-media-links">
      <ul class="bg-[white] flex p-4 rounded-lg">
        <li>
          <a href="#">
            <img src="~/assets/img/facebook-icon.png" alt="" />
          </a>
        </li>
        <li>
          <a href="#">
            <img src="~/assets/img/instagram.icon.png" alt="" />
          </a>
        </li>
        <li>
          <a href="#">
            <img src="~/assets/img/tripadvisor-icon.png" alt="" />
          </a>
        </li>
      </ul>
    </article>
    <img
      src="https://via.placeholder.com/125x125"
      alt=""
      class="rounded-full"
    />
    <a
      href="https://github.com/DragostinH/shopping-cart-nuxt"
      target="_blank"
      rel="noopener noreferrer"
    >
      <img src="~/assets/img/github-icon.png" alt="" />

    </a>
  </footer>
</template>

<script setup>
</script>
