<template>
  <div>
    <input
      class="form-input"
      :type="type"
      :placeholder="placeholder"
      :value="value"
      @input="$emit('input', $event.target.value)"
    />
  </div>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: 'text',
      validator: function(value) {
        return ['text', 'email', 'password'].indexOf(value) !== -1;
      },
    },
    placeholder: {
      type: String,
      required: true,
    },
    value: {
      type: String,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
.form-input {
  display: block;
  width: 100%;
  padding: 10px 10px;
  margin: 10px 0;
  color: #333;
  border: solid 1px #ccc;
  border-radius: 6px;
  outline: 0;
  transition: 0.3s;

  &:focus {
    border: 1px solid #00b5ad;
  }
}
</style>
