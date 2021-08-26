<template>
    <div>
        <h1>Edit Status</h1>
        <form @submit.prevent="update">
            <div class="form-group">
                <label>Status</label>
                <input type="text" v-model="form.verifikasi">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</template>

<style>
.form-group{
    margin-bottom: 5px;
}
.errors{
    color: red;
}
</style>

<script>
export default {
    props: {
        title: String,
        admin: Object
    },
    data(){
        return{
            form: {
                verifikasi: this.admin.verifikasi,
            }
        }
    },
    methods: {
        update(){
            this.$inertia.put('/admin/' + this.admin.id, this.form)
        },
    }
}
</script>