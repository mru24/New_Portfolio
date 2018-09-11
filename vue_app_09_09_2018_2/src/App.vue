<template>
  <div id="app">
    <app-navbar />
    <router-view/>
  </div>
</template>

<script>

import Navbar from './components/Navbar'

export default {
  components: {
    'app-navbar': Navbar
  },
  data() {
    return {
      title: 'Hello'
    }
  }
}
</script>

<style lang="sass">

  *
    margin: 0
    padding: 0
    box-sizing: border-box
  ul
    list-style: none
  a
    color: #aaa
    text-decoration: none
    transition: .4s
  a:visited
    @extend a
  a:active
    @extend a
  a:hover
    @extend a
    color: white

  body, html
    height: 100vh
  body
    font-family: sans-serif
    .mainBG
      width: 100%
      height: 100vh
      background: rgba(#000, 0.8)
      header
        h1
          color: #eee
          font-size: 4em
          span
            color: #fc0
        h4
          display: inline
          color: #eee
          font-size: 22px
          letter-spacing: 2px
          background: rgba(#000000, 0.1)
          padding: 3px 8px
          border-radius: 5px

</style>
