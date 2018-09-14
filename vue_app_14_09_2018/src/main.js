import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
import Routes from './routes'

Vue.use(VueResource)
Vue.use(VueRouter)

const router = new VueRouter({
  routes: Routes,
  mode: 'history'
})

Vue.config.productionTip = false

// Custom directives
  //v-rainbow
Vue.directive("rainbow", {
  bind(el, binding, vnode) {
    el.style.background = "#" + Math.random().toString().slice(2,8);
  }
})

// Filters
Vue.filter('to-uppercase', function(value) {
  return value.toUpperCase();
})
Vue.filter('snippet', function(value) {
  return value.slice(0,100) + " ...";
})

new Vue({
  render: h => h(App),
  router: router
}).$mount('#app')
