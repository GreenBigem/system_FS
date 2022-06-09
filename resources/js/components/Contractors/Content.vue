<template>
    <div>
        <div class="py-0">
            <ul class="nav nav-pills nav-fill">
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control mr-2" type="search" placeholder="Contractor's Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <li class="nav-item">
                    <a class="nav-link" v-bind:class="{ 'active': $route.path === '/contractors' }" href="#">Ind. contractors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" v-bind:class="{ 'active': $route.path === '/contractors/addIndContractor' }" href="#">Add ind. contractor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click.prevent="showEntContractorsList()" href="#">
                            Ent. contractors
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-current="page">Add ent. contractor</a>
                </li>
                <!--            <li class="nav-item">-->
                <!--                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
                <!--            </li>-->
            </ul>
            <div v-if="show">
                <transition
                    name="custom-classes-transition"
                    enter-active-class="animated tada"
                    leave-active-class="animated bounceOutRight"
                >

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
                                        <th scope="col">Press to edit</th>
                                        <th scope="col">Press to delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="item in indContractors" @click.prevent="indContractorsHide(item.id)">
                                        <td>{{ item.id }}</td>
                                        <td>{{ item.surname }}</td>
                                        <td>{{ item.name }}</td>
                                        <td>{{ item.patronymic }}</td>
                                        <td>{{ item.birth_date }}</td>
                                        <td>
                                            <router-link :to="{ name: 'user.personal' }" class="btn btn-warning">Edit</router-link>
                                        </td>
                                        <td>
                                            <a href="/delete" @click.prevent="deleteIndContractor(item.id)" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a href="#" class="btn btn-secondary">Add ind. contractor</a>
                            </div>
                        </div>
                    </div>
                </div>
                </transition>
            </div>
            <div v-if="showIndContractor">
                <p>Max</p>
                <transition
                    name="custom-classes-transition"
                    enter-active-class="animated tada"
                    leave-active-class="animated bounceOutRight"
                >

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
                                            <th scope="col">Press to edit</th>
                                            <th scope="col">Press to delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="item in indContractors" @click.prevent="indContractorsHide(item.id)">
                                            <td>{{ item.id }}</td>
                                            <td>{{ item.surname }}</td>
                                            <td>{{ item.name }}</td>
                                            <td>{{ item.patronymic }}</td>
                                            <td>{{ item.birth_date }}</td>
                                            <td>
                                                <router-link :to="{ name: 'user.personal' }" class="btn btn-warning">Edit</router-link>
                                            </td>
                                            <td>
                                                <a href="/delete" @click.prevent="deleteIndContractor(item.id)" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <a href="#" class="btn btn-secondary">Add ind. contractor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "Content",

    data() {
        return {
            indContractors: [],
            show: true,
            showIndContractor: false
        }
    },

    components: {},

    mounted() {
        this.getIndContractors()
    },

    methods: {
        getIndContractors() {
            axios
                .get('/api/indContractors')
                .then(res => {
                    this.indContractors = res.data;
                })
        },

        deleteIndContractor(id) {
            console.log(id);
            axios
                .delete('/api/indContractors/' + id)
                .then(res => {
                    console.log(res);
                })
        },

        indContractorsHide(id) {
            console.log(id)
            this.show = !this.show
            this.showIndContractor(id);
        },

        showIndContractor(id) {
            this.showIndContractor = !this.showIndContractor
        }


    }
}
</script>


