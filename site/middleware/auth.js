export default defineNuxtRouteMiddleware((to, from) => {
  if (to.name === "account") {
    return "/account/login";
  }
});
