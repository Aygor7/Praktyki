<script setup>
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <div id="bloki">
    <header id="baner">
      <p>Baner</p>
    </header>

    <div id="layout">
      <aside id="lewy">
        <p>Lewy pasek</p>
      </aside>

      <main id="content">
        <p>Content</p>
      </main>

      <aside id="prawy">
        <p>Prawy pasek</p>
      </aside>
    </div>

    <footer id="footer">
      <p>Stopka</p>
    </footer>
  </div>
</template>

<style scoped>
body {
  font-family: Arial, sans-serif;
}

#bloki {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
}

#baner {
  background-color: lightcoral;
  color: black;
  text-align: center;
  padding: 20px;
  width: 100%;
  font-size: 18px;
}

#layout {
  display: flex;
  flex: 1;
  color: black;
  font-size: 17px;
  width: 1320px;
}

#lewy, #prawy {
  flex: 1;
  background-color: lightsalmon;
  text-align: center;
  padding: 15px;
  box-sizing: border-box;
  height: 500px;
}

#content {
  flex: 3;
  padding: 20px;
  background-color: lightgreen;
  box-sizing: border-box;
  height: 500px;
}

#footer {
  background-color: lightblue;
  color: black;
  text-align: center;
  padding: 10px;
  width: 1300px;
  font-size: 17px;
}
</style>
