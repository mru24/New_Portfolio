<template>
  <div>
    <div class="container">
      <h1 class="title">Articles</h1>

      <div class="blog-container">
        <div class="search-field">
          <input type="text" v-model="search" placeholder="search blogs..">
        </div>

        <div class="single-post" v-for="blog in filteredBlogs">
          <h4 v-rainbow class="header">{{ blog.title }}</h4>
          <article>
            <router-link v-bind:to="'/post/' + blog.id">
              <p>{{ blog.body | snippet }}</p>
            </router-link>
          </article>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
import searchMixin from '../mixins/searchMixin'

export default {
  data () {
    return {
      blogs: [],
      search: ''
    }
  },
  methods: {

  },
  created() {
    this.$http.get('https://vue-app-14-09-2018.firebaseio.com/posts.json').then(function(data) {
      return data.json();
    }).then(function(data) {
      var blogsArray = [];
      for(let key in data) {
        data[key].id = key;
        blogsArray.push(data[key]);
      }
      this.blogs = blogsArray;
    })
  },
  mixins: [
    searchMixin
  ]
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
@import 'config'


.search-field
  text-align: right
  input
    padding-left: 10px
    width: 300px
    height: 30px
    border: 1px solid #666
    @include borderRadius

.single-post
  margin: 30px 0
  background: #f5f5f5
  border-radius: 0 0 25px 25px
  box-shadow: 5px 5px 20px rgba($c64Blue, .4)
  .header
    // @extend .title
    padding: 20px
    color: #fff
    text-transform: capitalize
  article
    padding: 15px
    a, a:visited, a:active
      color: #666
    a:hover
      color: #000
    .footer
      text-align: right

</style>
