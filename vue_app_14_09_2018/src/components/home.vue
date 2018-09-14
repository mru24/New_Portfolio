<template>
  <div>
    <header>
      <div>
        <h1>I love 8-bit computers.</h1>
        <div class="cursor"></div>
      </div>
    </header>
    <showBlog></showBlog>
  </div>
</template>

<script>
import showBlog from './showBlog.vue'

export default {
  components: {
    showBlog
  }
}
</script>

<style lang="sass" scoped>

@import 'config'

header
  height: 290px
  background: $c64Blue
  display: grid
  justify-content: center
  align-items: center
  box-shadow: 5px 5px 20px $c64Blue
  h1
    color: white
    font-family: 'Press Start 2P', cursive
    font-size: 1.4em
    letter-spacing: 3px
  .cursor
    width: 20px
    height: 20px
    background: #eee
    animation: flashing .8s infinite


@keyframes flashing
  0%
    opacity: 1
  49%
    opacity: 1
  51%
    opacity: 0
  98%
    opacity: 0
</style>
