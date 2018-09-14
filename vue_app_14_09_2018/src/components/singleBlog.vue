<template>
  <div>
    <div class="container">
      <h3 class="title">{{ blog.title }}</h3>

      <div class="single-post">
        <article>
          <router-link :to="'/show'">
            <p>{{ blog.body }}</p>
          </router-link>
        </article>
      </div>
    </div>

  </div>

</template>

<script>
export default {
  data() {
    return {
      id: this.$route.params.id,
      blog: {}
    }
  },
  created () {
    this.$http.get('https://vue-app-14-09-2018.firebaseio.com/posts/' + this.id + '.json').then(function(data) {
      return data.json();
    }).then(function(data) {
      this.blog = data;
    })
  }
}
</script>

<style lang="sass" scoped>

@import 'config'

.container
  margin-top: 120px
  .single-post
    @include borderRadiusLg
    article
      p
        line-height: 1.8
        font-size: 1.3em

</style>
