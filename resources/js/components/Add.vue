<template>
    <div id="add">
        <h2 class="text-center">Add Customer</h2>
        <form action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>