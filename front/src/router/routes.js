
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/index/IndexPage.vue'), meta: { requiresAuth: true } },
      { path: 'users', component: () => import('pages/users/Users.vue'), meta: { requiresAuth: true } },
      { path: 'pedidos', component: () => import('pages/pedidos/Pedidos.vue'), meta: { requiresAuth: true } },
    ]
  },
  {
    path: '/login',
    component: () => import('pages/LoginPage.vue')
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
