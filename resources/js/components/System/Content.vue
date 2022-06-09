<template>
    <div class="py-0 p-3 mb-2 bg-light text-dark">
        <div>
            Content
        </div>
        <div>
            <div class="mb-3">
                <input type="text" class="form-control" id="name" v-model="name" placeholder="name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="surname" v-model="surname" placeholder="surname">
            </div>
            <div class="mb-3">
                <input
                    type="submit"
                    @click.prevent="addIndContractor"
                    class="btn btn-primary"
                    value="Добавить">
            </div>
            <div>My name is {{ name }}, and my surname is {{ surname }}</div>
        </div>
        <div class="col-6 card text-black p-2">
            <h5 class="card-header">Контрагенты</h5>
            <div class="card-body">
                <h5 class="card-title">Все</h5>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Name</th>
                        <th scope="col">Updated_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="indContractor in indContractors">
                        <td>{{ indContractor.id }}</td>
                        <td>{{ indContractor.surname }}</td>
                        <td>{{ indContractor.name }}</td>
                        <td>{{ indContractor.updated_at }}</td>
                    </tr>
                    </tbody>
                </table>

                <a href="#" class="btn btn-primary">Все задачи</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                name: null,
                surname: null,
                indContractors: null
            }
        },

        mounted() {
            this.getIndContractors();
        },

        methods: {
            getIndContractors(){
                axios
                    .get('/api/system/ind_contractors')
                    .then(function(data) {
                        let $indCintractors = data.data;
                        console.log(indContractors);
                        return indContractors;
                    })
            },

            addIndContractor() {
                axios
                    .post('/api/system/ind_contractors', {name: this.name, surname: this.surname})
                    .then( res => {
                        console.log(res);
                    })
            }
        }
    }
</script>
