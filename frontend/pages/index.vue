<template>
  <div>
    <h1 class="title">
      {{ text }}
    </h1>
  </div>
</template>

<script>
export default {
  async asyncData({ $axios }) {
    const text = await $axios.$get('/');
    return {
      text,
    };
  },
  data() {
    return {
      text: '',
    };
  },
  mounted() {
    window.liff.init({
      liffId: process.env.LIFF_ID,
    });
  },
};
</script>