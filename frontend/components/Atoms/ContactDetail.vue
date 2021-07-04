<template>
  <div>
    <div class="card" v-for="(contact, index) in contacts" :key="index">
      <h3 class="contact-content">{{ contact.contact }}</h3>
      <p class="contact-name">{{ contact.name }}</p>
      <p class="contact-email">{{ contact.email }}</p>
    </div>
  </div>
</template>

<script>
export default {
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
.card {
  box-sizing: border-box;
  width: 15em;
  padding: 1.2em 0.8em;
  margin: 0 auto;
  color: #333;
  border: 0.5px solid #e9eaea;
  border-radius: 3px;
  transition: 0.3s;
}

.content-name,
.contact-email {
  padding: 0.8em 0;
  font-size: 0.8em;
}

.contact-email {
  color: #00b5ad;
  cursor: pointer;

  &:hover {
    border-bottom: #00b5ad 1px solid;
  }
}
</style>