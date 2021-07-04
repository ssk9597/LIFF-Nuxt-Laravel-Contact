<template>
  <div>
    <Form />
    <!-- <ContactDetail /> -->
    <div class="card" v-for="(contact, index) in contacts" :key="index">
      <h3 class="contact-content">{{ contact.contact }}</h3>
      <p class="contact-name">{{ contact.name }}</p>
      <p class="contact-email">{{ contact.email }}</p>
    </div>
  </div>
</template>

<script>
import Form from '@/components/Template/Form.vue';
// import ContactDetail from '@/components/Atoms/ContactDetail.vue';

export default {
  components: {
    Form,
    // ContactDetail,
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
