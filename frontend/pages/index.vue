<template>
  <div>
    <h1 class="title">
      {{ text }}
    </h1>
    <button @click="testButton()">ボタン</button>
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
    console.log(process.env.LIFF_ID);
    window.liff.init({
      liffId: process.env.LIFF_ID,
    });
  },
  methods: {
    testButton() {
      if (!liff.isInClient()) {
        alert('外部ブラウザまたはLINE内ブラウザで動作させている');
      } else {
        alert('LIFFブラウザで動作させている');
        liff.sendMessages([
          {
            type: 'text',
            text: 'Hello World!',
          },
        ]);
      }
    },
  },
};
</script>