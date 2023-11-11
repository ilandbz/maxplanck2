import { createRouter, createWebHistory } from "vue-router";
import jwt_decode from 'jwt-decode';

//PLANTILLAS
import LayoutLogin from '@/Layouts/AppLayoutLogin.vue'
import LayoutDefault from '@/Layouts/AppLayoutDefault.vue'
//vistas
import Principal from '@/Pages/Principal.vue'
import Login from '@/Pages/Auth/Login.vue'
import Noticia from '@/Pages/noticias/Inicio.vue'
import Menu from '@/Pages/menus/Inicio.vue'
import Cargo from '@/Pages/cargos/Inicio.vue'
const routes = [
    {
        path: '/intranet/principal', name:'Intranet', component: Principal ,
        meta:{layout: LayoutDefault}
    },
    {
        path: '/intranet/login',name: 'Login', component: Login,
        meta: {layout: LayoutLogin}
    },
    {
        path: '/intranet/noticia',name: 'Noticia', component: Noticia,
        meta: {layout: LayoutDefault}
    },
    {
        path: '/intranet/menus', name:'Menus', component: Menu ,
        meta:{layout: LayoutDefault}
    },
    {
        path: '/intranet/cargos', name:'Cargos', component: Cargo ,
        meta:{layout: LayoutDefault}
    },

    
]

export default createRouter({
    history: createWebHistory(),
    routes
})