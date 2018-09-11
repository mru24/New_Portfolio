<template>

  <div>
    <div class="homeBG">

    </div>
    <div class="mainBG">
      <header>
        <h1>Val <span>Wroblewski</span></h1>
        <h4>Web Developer</h4>
      </header>

      <div class="social">
        <ul>
          <li>
            <a href="https://facebook.com" target="_blank" rel="noreferrer nofollow noopener">
              <img src="../assets/img/social/facebook.png" alt="Facebook Logo png" width="30">
            </a>
          </li>
          <li>
            <a href="https://github.com" target="_blank" rel="noreferrer nofollow noopener">
              <img src="../assets/img/social/github3.png" alt="Github Logo png" width="30">
            </a>
          </li>
          <li>
            <a href="https://linkedin.com" target="_blank" rel="noreferrer nofollow noopener">
              <img src="../assets/img/social/linkedin2.png" alt="LinkedIn Logo png" width="30">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</template>

<script>
export default {

}
</script>

<style lang="sass" scoped>
.homeBG
  height: 100vh
  background-image: url('../assets/img/head_img.jpg')
  background-repeat: no-repeat
  background-size: cover
  background-position: right bottom
  opacity: .4
.mainBG
  position: absolute
  top: 0
  left: 0
  padding-top: 23%
  padding-left: 10%
.social
  margin-top: 20px
  ul
    list-style: none
    display: flex
    flex-direction: row
    li
      a
        margin-right: 20px
</style>
