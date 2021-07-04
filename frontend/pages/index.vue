<template>
  <div>
    <Form />
    <ContactDetail :contacts="contacts" />
  </div>
</template>

<script>
import Form from '@/components/Template/Form.vue';
import ContactDetail from '@/components/Template/ContactDetail.vue';

export default {
  components: {
    Form,
    ContactDetail,
  },
  async asyncData({ $axios }) {
    const contacts = await $axios.$get('/contacts/index');
    console.log(contacts);
    return { contacts };
  },
  mounted() {
    window.liff.init({
      liffId: process.env.LIFF_ID,
    });
  },
};
</script>

<style lang="scss" scoped>
</style>
