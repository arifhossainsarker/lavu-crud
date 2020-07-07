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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        
    }
</script>
