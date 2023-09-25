import Vue from 'vue'
import Router from 'vue-router'
import Contact from '@/components/Contact'

Vue.use(Router)

export default new Router({
  routes: [
    // {
    //   path: '/',
    //   name: 'HelloWorld',
    //   component: HelloWorld
    // },
    {
      path: '/',
      name: 'Contact',
      component: Contact
    }
  ]
})
