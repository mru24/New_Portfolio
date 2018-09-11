<template>
  <nav class="navbar navbar-collapsed fixed-top navbar-dark">
    <a href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav text-center" v-for="item in navItems">
        <li class="nav-item">
          <router-link :to="item.link" class="nav-link">{{ item.name }}</router-link>
        </li>
      </ul>
    </div>
  </nav>

</template>

<script>
export default {
  data() {
    return {
      navItems: [
        {name: 'Home', link: '/'},
        {name: 'Portfolio', link: '/portfolio'},
        {name: 'Contact', link: '/contact'}
      ]
    }
  }
}
</script>

<style lang="sass" scoped>
  .nav-link
    font-size: 24px
    font-weight: bold
    letter-spacing: 2px
    background: rgba(#000000, 0.5)
</style>
