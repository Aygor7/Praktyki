<script setup>
import { ref } from 'vue'

defineProps({
  msg: String,
  aha: String,
  source: String,
})

const count = ref(0)
</script>

<template>
  <h1>{{ msg }}</h1>
  <h2>{{ aha }}</h2>

  <img id="xd" :src="source" alt="Image"/>

</template>

<style scoped>
#xd {
  width: 400px;
  height: 300px;
  float: left;
  border: 5px dashed pink;
  margin: 10px;
}
</style>
