import ListCustomer from './components/List'
import AddCustomer from './components/Add'
import EditCustomer from './components/Edit'
export const routes = [
    { 
        path: '/customer-list', 
        component: ListCustomer 
    },
    { 
        path: '/add-customer', 
        component: AddCustomer 
    },
    {
        path: '/edit-customer/:id',
        component: EditCustomer
    }
]