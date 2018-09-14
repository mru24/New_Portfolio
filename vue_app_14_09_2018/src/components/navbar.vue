<template>
  <div class="navbar">
    <ul>
      <li>
        <router-link :to="'/'" exact>Home</router-link>
      </li>
      <li>
        <router-link :to="'/show'" exact>Blog</router-link>
      </li>
      <li>
        <router-link :to="'/add'" exact>Add Post</router-link>
      </li>
    </ul>
  </div>
</template>

<script>

export default {

}

</script>

<style lang="sass" scoped>
@import 'config'

a
  transition: .5s
  color: #ccc
  font-weight: 500

a:hover
  color: #fff

.navbar
  background: $c64Blue
  position: fixed
  top: 15px
  left: 0
  width: 100%
  height: 40px
  padding: 0 40px
  ul
    li
      display: inline-block
      width: 90px
      height: 40px
      line-height: 40px
      text-align: center
      margin-right: 10px

.router-link-active
  display: block
  background: #ddd
  color: #444
  @include borderRadius

</style>
