<template>

  <div>
    <div class="portfolioBG">

    </div>
    <div class="mainBG">
      <header>
        <h1>My <span>Projects</span></h1>
        <h4>Check out some of my projecs..</h4>
      </header>
      <div class="projects">
        <div class="project" v-for="item in projects">
          <div class="projectImage">
            <!-- <img src="../Projects/AuntieMaggieCakes.png" alt="" width="180"> -->
            <img :src=" item.image" alt="">
          </div>

            <a :href="item.link" class="projectTitle" target="_blank" rel="noreferrer nofollow noopener">{{ item.name }}</a>

          <div class="projectGithub">
            <img src="../assets/img/social/github.png" alt="Github icon" width="16">
            Github
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  data() {
    return {
      projects: [
        {name: 'Auntie Maggie Cakes', info: 'HTML, CSS, SASS, Bootstrap, Maretialize', link: '../static/Projects/AuntieMagieCakes/index.php', github: '', image: "../static/Projects/AuntieMaggieCakes.png", show: false},
        {name: 'Portfolio', info: 'Laravel, MVC', link: '../static/Projects/Portfolio/index.php', github: '', image: '../static/Projects/Portfolio.png', show: false},
        {name: 'Properties Haven', info: 'Vue.JS, jQuery', link: '../static/Projects/PropertiesHaven/index.html', github: '', image: '../static/Projects/PropertiesHaven.png', show: false},
        {name: 'School', info: 'Vagrant', link: '../static/Projects/School/index.html', github: '', image: '../static/Projects/School.png', show: false},
        {name: 'Travel Agency', info: 'Photoshop, Illustrator, Sony Vegas', link: '../static/Projects/TravelAgency/index.php', github: '', image: '../static/Projects/TravelAgency.png', show: false}
      ]
    }
  }

}
</script>

<style lang="sass" scoped>

@mixin borderRadius
  border-radius: 4px

.mainBG
  padding-top: 10%
  padding-left: 10%
  height: auto
  min-height: 100vh

.projects
  margin-top: 40px
  display: flex
  flex-direction: row
  flex-wrap: wrap
  justify-content: space-between
  .project
    // project div width and height
    $width: 300px
    $height: $width + 10px
    // gap between divs
    $marginBottom: 3px
    width: $width
    margin-bottom: 20px
    margin-right: 30px
    transition: 1s
    .projectImage
      height: $height
      margin-bottom: $marginBottom
      @include borderRadius
      img
        width: 100%
        height: 100%
        border: 6px solid #fc0
        @include borderRadius
    .projectTitle
      // title and github link height
      $height: 30px
      display: block
      background: #ddd
      padding-left: 10px
      font-size: 15px
      letter-spacing: 1px
      height: $height
      line-height: $height
      margin-bottom: $marginBottom
      @include borderRadius
    a
      color: #333
    a:active, a:visited
      @extend a
    a:hover
      color: #900
    .projectGithub
      background: black
      color: #aaa
      height: $height
      line-height: $height
      padding-left: 10px
      @include borderRadius
      transition: .4s
      &:hover
        color: white
      img
        margin-bottom: 3px
        margin-right: 5px

</style>
