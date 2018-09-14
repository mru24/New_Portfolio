import home from './components/home.vue'
import showBlog from './components/showBlog.vue'
import addBlog from './components/addBlog.vue'
import singleBlog from './components/singleBlog.vue'


export default [
  { path:'/',component: home },
  { path:'/show',component: showBlog },
  { path:'/add',component: addBlog },
  { path:'/post/:id',component: singleBlog }
]
