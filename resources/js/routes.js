const IndexVin = () => import ('./components/vin/Index.vue');
const Create_vin = () => import ('./components/vin/FormVin.vue');


export const routes = [
    {
        name: 'IndexVin',
        path:'/',
        component: IndexVin
    },
    {
        name: 'create_vin',
        path:'/create_vin',
        component: Create_vin
    },
]

