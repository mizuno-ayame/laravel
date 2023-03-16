import Router from 'vue-router'
import Home from './components/Home.vue'
import Company from './components/Company.vue'
import Sport from './components/Sport.vue'
import Guide from './components/Guide.vue'
import Access from './components/Access.vue'
import Clubteam from './components/Clubteam.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/company',
      name: 'company',
      component: Company
    },
    {
      path: '/sport',
      name: 'sport',
      component: Sport
    },
    {
      path: '/guide',
      name: 'guide',
      component: Guide
    },
    {
      path: '/access',
      name: 'access',
      component: Access
    },
    {
      path: '/clubteam',
      name: 'clubteam',
      component: Clubteam
    },
  ]
});
