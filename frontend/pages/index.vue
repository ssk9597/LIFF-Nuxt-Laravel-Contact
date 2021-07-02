<template>
  <div>
    <h1 class="title">
      {{ text }}
    </h1>
    <FormLabel :title="'メールアドレス'" />
    <FormInput
      :type="'email'"
      :placeholder="'メールアドレス'"
      :value="email"
      @input="email = $event"
    />
    <button @click="testButton()">ボタン</button>
  </div>
</template>

<script>
import FormInput from '@/components/Atoms/FormInput.vue';
import FormLabel from '@/components/Atoms/FormLabel.vue';

export default {
  components: {
    FormInput,
    FormLabel,
  },
  async asyncData({ $axios }) {
    const text = await $axios.$get('/');
    return {
      text,
    };
  },
  data() {
    return {
      text: '',
      email: '',
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
        alert('外部ブラウザまたはLINE内ブラウザで動作させている');
      } else {
        alert('LIFFブラウザで動作させている');
        liff.sendMessages([
          {
            type: 'text',
            text: this.email,
          },
        ]);
      }
    },
  },
};
</script>
