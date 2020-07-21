<template>
    <div id="list">
        <router-link to="/add-customer" class="btn btn-primary float-right">Add Customer</router-link>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Sl</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(customer, index) in getAllCustomer" :key="index">
                    <th scope="row">{{ index+1 }}</th>
                    <td>{{ customer.name }}</td>
                    <td>{{ customer.email }}</td>
                    <td><img :src="customer.photo" height="100px" width="100px" /></td>
                    <td><router-link :to="`/edit-customer/${customer.id}`" class="btn-info">Edit</router-link> || <a href="" class="btn-danger" @click.prevent="deleteCustomer(customer.id)">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted(){
            this.$store.dispatch("allCustomers")
        },

        computed:{
            getAllCustomer(){
                return this.$store.getters.getCustomer
            }
        },
        methods:{
            deleteCustomer(id){
                axios.get('/deletecustomer/'+id)
                    .then(()=>{
                        this.$store.dispatch("allCustomers")
                    })
            }
        }
    }
</script>
