<template>
    <div></div>
</template>

<script>
export default {
    data() {
        return {
            entContractors: [],
        };
    },

    components: {},

    mounted() {
        // this.getEntContractors()
    },

    methods: {
        getEntContractors() {
            axios.get("/api/entContractors").then((res) => {
                this.entContractors = res.data;
            });
        },

        deleteEntContractor(id) {
            console.log(id);
            axios.delete("/api/entContractors/" + id).then((res) => {
                console.log(res);
            });
        },
    },
};
</script>
