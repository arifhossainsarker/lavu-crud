import ListCustomer from './components/List'
import AddCustomer from './components/Add'
export const routes = [
    { 
        path: '/customer-list', 
        component: ListCustomer 
    },
    { 
        path: '/add-customer', 
        component: AddCustomer 
    }
]