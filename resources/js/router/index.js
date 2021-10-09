import { createRouter, createWebHistory } from "vue-router";

import CompaniesIndex from '../components/companies/CompanyIndex'
import CompanyCreate from "../components/companies/CompanyCreate";
import CompanyEdit from "../components/companies/CompanyEdit";

const routes = [
  {
    path: '/dashboard',
    name: 'companies.index',
    component: CompaniesIndex
  },
  {
    path: '/create',
    name: 'companies.create',
    component: CompanyCreate
  },
  {
    path: '/:id/edit',
    name: 'companies.edit',
    component: CompanyEdit,
    props: true
  },
]

export default createRouter({
  history: createWebHistory(),
  routes
})
