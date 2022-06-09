<template>
    <div>
        <div class="py-0">
            <div class="row justify-content-around">
                <div class="card text-black p-2">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Фамилия</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Отчество</th>
                                    <th scope="col">Дата рождения</th>
                                    <th scope="col">Редактирование</th>
                                    <th scope="col">Удаление</th>
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
                                            >Редактировать</router-link
                                        >
                                    </td>
                                    <td>
                                        <a
                                            href="/delete"
                                            @click.prevent="
                                                deleteIndContractor(item.id)
                                            "
                                            class="btn btn-danger"
                                            >Удалить</a
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

    beforeMount() {
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
