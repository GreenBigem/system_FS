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
                                        <th scope="col">Short Legal Form</th>
                                        <th scope="col">Short Name</th>
                                        <th scope="col">Patronymic</th>
                                        <th scope="col">Birth Date</th>
                                        <th scope="col">
                                            Press to show / edit
                                        </th>
                                        <th scope="col">Press to delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="item in entContractors">
                                        <td>{{ item.id }}</td>
                                        <td>{{ item.short_legal_form }}</td>
                                        <td>{{ item.short_name }}</td>
                                        <td>{{ item.inn }}</td>
                                        <td>{{ item.leg_adr_city }}</td>
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
                                                    deleteEntContractor(item.id)
                                                "
                                                class="btn btn-danger"
                                                >Delete</a
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="#" class="btn btn-secondary"
                                >Add ent. contractor</a
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
    data() {
        return {
            entContractors: [],
        };
    },

    components: {},

    beforeMount() {
        this.getEntContractors();
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
