<template>
  <div>
    <div class="container">
      <h1 class="title">Add Article</h1>
      <div class="post-container">
        <form>
          <div class="form-control">
            <label>Title</label>
            <input type="text" v-model.lazy="blog.title">
          </div>
          <div class="form-control">
            <label>Blog Text</label>
            <textarea v-model.lazy="blog.body"></textarea>
          </div>
          <button type="button" v-on:click="post">Submit</button>
        </form>
      </div>
      <div class="preview">
        <h4>{{ blog.title }}</h4>
        <p>{{ blog.body }}</p>
      </div>
      <div class="success" v-if="submitted">
        <h3>Post submitted</h3>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      blog: {
        title: "",
        body: ""
      },
      submitted: false
    }
  },
  methods: {
    post: function() {
      this.$http.post('https://vue-app-14-09-2018.firebaseio.com/posts.json', this.blog).then(function(data) {
        console.log(data);
        this.submitted = true;
      })
    }
  }
}
</script>

<style lang="sass">
@import 'config'

form
  width: 100%
  padding: 20px
  margin: 40px 0
  background: #f5f5f5
  border: 1px solid #999
  @include borderRadius
  .form-control
    label
      display: block
      margin: 10px 0
      width: 100%
    input
      width: 100%
      height: 30px
    textarea
      width: 100%
      height: 120px
      resize: none
  button
    display: block
    width: 100px
    height: 30px
    margin: 20px 0
    background: #f57f12
    color: white
    border: none
    @include borderRadius

.preview
  @extend form

.success
  @extend form
  background: #3dcb69
  color: white

</style>
