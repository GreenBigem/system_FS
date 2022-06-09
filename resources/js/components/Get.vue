<template>
<div>
    Get
    Пользователь с именем: {{ userName }} вошел в систему!
</div>
</template>

<script>
export default {
    name: "Get",

    data(){
        return {
            userName: ''
        }
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
