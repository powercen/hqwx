import VueRouter from 'vue-router'

let routes = [
    {
        path:'/',
        component:require('./components/training/index')
    }
];


export default new VueRouter({
    routes
})
