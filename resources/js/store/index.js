export default{
    state:{
        customer:[]
    },

    getters:{
        getCustomer(state){
            return state.customer
        }
    },

    actions: {
        allCustomers(context){
            axios.get('/customers')
                .then((response)=>{
                    context.commit('all_customer', response.data.customers)
                })
        }
    },

    mutations: {
        all_customer(state, data){
            return state.customer = data
        }
    }
}