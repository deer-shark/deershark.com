<template>
  <div>
    <IndexPage />
    <!-- <NuxtLink to="/">Home Page</NuxtLink> -->
  </div>
</template>

<script>
export default {
  props: ["error"],
  layout: "error", // you can set a custom layout for the error page
};
</script>
