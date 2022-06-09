<template>
    <div>
        Personal page

<div class="d-flex justify-content-center">

    <br>
    <div class="card ">
        <div class="card-body">{{ userName }} - Крутышка!</div>
    </div>

</div>
    </div>
</template>

<script>
export default {
    name: "Personal",

    data() {
        return {
            userName: null
        }
    },

    computed: {

    },

    mounted() {
        this.getData();
    },

    methods: {
        getData() {
            axios
                .get('/api/get')
                .then(res => {
                    console.log(res.data.name);
                    this.userName = res.data.name;
                })
        }
    }
}

</script>

<style scoped>


</style>
