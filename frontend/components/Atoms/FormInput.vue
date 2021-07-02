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
  props: [type, placeholder, value],
};
</script>

<style lang="scss">
.form-input {
  box-sizing: border-box;
  width: 100%;
  height: 30px;
  padding: 0 10px;
  margin: 5px 0;
  font-size: 16px;
  color: #333;
  border: solid 1px #ccc;
  border-radius: 6px;
  outline: 0;
  transition: 0.3s;
  -webkit-appearance: none;

  &:focus {
    border: 1px solid #00b5ad;
  }
}
</style>
