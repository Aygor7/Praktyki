<script setup>
import { ref } from 'vue'

defineProps({
  msg: String,
})

const count = ref(0)
const count2 = ref(0)
const count3 = ref(0)
const count4 = ref(0)
const count5 = ref(0)
const count6 = ref(0)
const count7 = ref(0)
const count8 = ref(0)
const count9 = ref(0)
const count10 = ref(0)
const count11 = ref(0)
const count12 = ref(0)
const count13 = ref(0)
const count14 = ref(0)
const count15 = ref(0)
const count16 = ref(0)
const count17 = ref(0)
const count18 = ref(0)
const count19 = ref(0)
const count20 = ref(0)
</script>

<template>
  <h1>{{ msg }}</h1>
  <h2>Każdy button ma osobny licznik</h2>

  <div class="card">
    <button type="button" @click="count++">{{ count }}</button>
    <button type="button" @click="count2++">{{ count2 }}</button>
    <button type="button" @click="count3++">{{ count3 }}</button>
    <button type="button" @click="count4++">{{ count4 }}</button>
    <button type="button" @click="count5++">{{ count5 }}</button>
    <button type="button" @click="count6++">{{ count6 }}</button>
    <button type="button" @click="count7++">{{ count7 }}</button>
    <button type="button" @click="count8++">{{ count8 }}</button>
    <button type="button" @click="count9++">{{ count9 }}</button>
    <button type="button" @click="count10++">{{ count10 }}</button>
    <button type="button" @click="count11++">{{ count11 }}</button>
    <button type="button" @click="count12++">{{ count12 }}</button>
    <button type="button" @click="count13++">{{ count13 }}</button>
    <button type="button" @click="count14++">{{ count14 }}</button>
    <button type="button" @click="count15++">{{ count15 }}</button>
    <button type="button" @click="count16++">{{ count16 }}</button>
    <button type="button" @click="count17++">{{ count17 }}</button>
    <button type="button" @click="count18++">{{ count18 }}</button>
    <button type="button" @click="count19++">{{ count19 }}</button>
    <button type="button" @click="count20++">{{ count20 }}</button>
  </div>

</template>

<style scoped>
button {
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
  color: forestgreen;
  background-color: lightgreen;
}

.card {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 80px;
  width: 100%;
  text-align: center;
  margin: 10px 0;
}

.read-the-docs {
  color: #888;
}
</style>
