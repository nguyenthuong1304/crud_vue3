require('./bootstrap');

require('alpinejs');

import { createApp } from "vue";
import router from './router'
import CompanyIndex from './components/companies/CompanyIndex'
import CompanyCreate from "./components/companies/CompanyCreate";

createApp({
    components: {
        CompanyIndex,
        CompanyCreate
    }
}).use(router).mount('#app')
