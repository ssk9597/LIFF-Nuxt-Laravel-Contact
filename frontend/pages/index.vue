<template>
  <div>
    <!-- 姓 -->
    <FormLabel :title="'姓'" />
    <FormInput :type="'text'" :placeholder="'姓'" :value="firstName" @input="firstName = $event" />
    <!-- 名 -->
    <FormLabel :title="'名'" />
    <FormInput :type="'text'" :placeholder="'名'" :value="lastName" @input="lastName = $event" />
    <!-- メールアドレス -->
    <FormLabel :title="'メールアドレス'" />
    <FormInput
      :type="'email'"
      :placeholder="'メールアドレス'"
      :value="email"
      @input="email = $event"
    />
    <!-- お問い合わせ内容 -->
    <!-- 送信ボタン -->
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
  data() {
    return {
      firstName: '',
      lastName: '',
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
        // メッセージを送る
        liff.sendMessages([
          {
            type: 'text',
            text: `姓：${this.firstName}\n 名：${this.lastName}\n メールアドレス：${this.email}`,
          },
        ]);
        // アプリを閉じる
        liff.closeWindow();
      }
    },
  },
};
</script>
