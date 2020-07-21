<template>
    <div id="add">
        <h2 class="text-center">Edit Customer</h2>
        <form action="" @submit.prevent="updateCustomer()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }">
                 <has-error :form="form" field="name"></has-error>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }">
                <has-error :form="form" field="name"></has-error>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control" id="photo" name="photo" @change="changePhoto($event)" :class="{ 'is-invalid': form.errors.has('photo') }">

                <img :src="form.photo" alt="" height="80px" width="80px">
                
                <has-error :form="form" field="photo"></has-error>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return{
            form: new Form({
               name:'',
               email:'',
               photo:'' 
            })
        }
    },

    mounted(){
       axios.get(`customer/${this.$route.params.id}`)
        .then((response)=>{
            this.form.fill(response.data.customer)
        })
    },

    computed:{

    },

    methods:{
        changePhoto(event){
             let file = event.target.files[0];
                if(file.size > 1047576){
                    alert('photo max size 1MB')
                }else{
                    let reader = new FileReader();
                    reader.onload = (e)=> {
                    // The file's text will be printed here
                    this.form.photo = e.target.result
                    }
                    reader.readAsDataURL(file);
                }
        },

        updateCustomer(){
            this.form.post(`/updatepost/${this.$route.params.postid}`)
            .then(()=>{
            this.$router.push('/allCustomers')
            
            })
            .catch(()=>{

            })
        }
    }
}
</script>

<style>

</style>