<template>
  <div>
    <Form />
    <ContactDetail />
  </div>
</template>

<script>
import Form from '@/components/Template/Form.vue';
import ContactDetail from '@/components/Atoms/ContactDetail.vue';

export default {
  components: {
    Form,
    ContactDetail,
  },
};
</script>

<style lang="scss" scoped>
</style>
