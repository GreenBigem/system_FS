<template>
    <div class="py-0">

        <ul class="nav nav-pills nav-fill">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Contractor" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ind. contactors list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add ind. contactor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ent. contactors list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Add ent. contactor</a>
            </li>
        </ul>
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
                                <th scope="col">Press to edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in indContractors">
                                <td>{{ item.id }}</td>
                                <td>{{ item.surname }}</td>
                                <td>{{ item.name }}</td>
                                <td>{{ item.patronymic }}</td>
                                <td>
                                    <router-link :to="{ name: 'user.personal' }" class="btn btn-primary">Edit</router-link>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" :to="{ name: 'user.index' }" class="btn btn-primary">Add ind. contractor</a>
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
            indContractors: []
        }
    },

    mounted() {
        this.getIndContractors()
    },
    components: {

    },

    methods: {
        getIndContractors() {
            axios
                .get('/api/indContractors')
                .then(res => {
                    this.indContractors = res.data;
                })
        }
    }

}
</script>
