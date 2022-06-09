<template>
    <div>
        <div class="py-0">
            <div>
                <div class="row justify-content-around">
                    <div class="card text-black p-2">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Patronymic</th>
                                        <th scope="col">Birth Date</th>
                                        <th scope="col">
                                            Press to show / edit
                                        </th>
                                        <th scope="col">Press to delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="item in indContractors">
                                        <td>{{ item.id }}</td>
                                        <td>{{ item.surname }}</td>
                                        <td>{{ item.name }}</td>
                                        <td>{{ item.patronymic }}</td>
                                        <td>{{ item.birth_date }}</td>
                                        <td>
                                            <router-link
                                                :to="{
                                                    name: 'user.personal',
                                                }"
                                                class="btn btn-warning"
                                                >Show / Edit</router-link
                                            >
                                        </td>
                                        <td>
                                            <a
                                                href="/delete"
                                                @click.prevent="
                                                    deleteIndContractor(item.id)
                                                "
                                                class="btn btn-danger"
                                                >Delete</a
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="#" class="btn btn-secondary"
                                >Add ind. contractor</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "IndContractors",

    data() {
        return {
            indContractors: [],
        };
    },

    components: {},

    mounted() {
        this.getIndContractors();
    },

    methods: {
        getIndContractors() {
            axios.get("/api/indContractors").then((res) => {
                this.indContractors = res.data;
            });
        },

        deleteIndContractor(id) {
            console.log(id);
            axios.delete("/api/indContractors/" + id).then((res) => {
                console.log(res);
            });
        },
    },
};
</script>
