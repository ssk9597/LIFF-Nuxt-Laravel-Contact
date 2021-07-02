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
    window.liff.init({
      liffId: process.env.LIFF_ID,
    });
  },
  methods: {
    testButton() {
      if (!liff.isInClient()) {
        console.log('外部ブラウザまたはLINE内ブラウザで動作させている');
      } else {
        console.log('LIFFブラウザで動作させている');
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