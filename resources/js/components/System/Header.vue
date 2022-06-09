<template>
    <div class="py-0 p-3 mb-2 bg-success text-white">
        <div>
            Header
            <div>
                <button @click="sayHello" class="btn btn-primary p-2">Say Hello</button>
                <button @click="sayHi" class="btn btn-primary p-2">Say Hi</button>
                <br>
                <div>{{persons}}</div>
                <div v-for="person in persons">
                    <div>{{ person.name }}</div>
                    <div>{{ person.age }}</div>
                    <div>{{ person.job }}</div>
                </div>
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-6 card text-black p-2">
                            <h5 class="card-header">Ближайшие задачи</h5>
                            <div class="card-body">
                                <h5 class="card-title">Задачи на сегодня</h5>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Job</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="person in personsAgeMoreSeventeen"
                                            v-if="person.age > 17">
                                            <td>{{ person.id }}</td>
                                            <td>{{ person.name }}</td>
                                            <td>{{ person.age }}</td>
                                            <td>{{ person.job }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <a href="#" class="btn btn-primary">Все задачи</a>
                            </div>
                        </div>
                        <div class="col-6 card text-black p-2">
                            <h5 class="card-header">Последние кейсы</h5>
                            <div class="card-body">
                                <h5 class="card-title">Кейсы</h5>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Job</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="person in personsAgeLessEighteen"
                                        v-bind:key="name">
                                        <td>{{ person.id }}</td>
                                        <td>{{ person.name }}</td>
                                        <td>{{ person.age }}</td>
                                        <td>{{ person.job }}</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a href="#" class="btn btn-primary">Все задачи</a>
                            </div>
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
                name: 'Vasya',
                age: 20,
                persons: [
                    {
                        id: 1,
                        name: 'Alex',
                        age: 20,
                        job: 'couch'
                    },
                    {

                        id: 2,
                        name: 'Fiona',
                        age: 26,
                        job: 'teacher'
                    },
                    {
                        id: 3,
                        name: 'Goodwin',
                        age: 94,
                        job: 'mage'
                    },
                    {
                        id: 4,
                        name: 'Goodwin',
                        age: 18,
                        job: 'mage'
                    },
                    {
                        id: 5,
                        name: 'Goodwin',
                        age: 17,
                        job: 'mage'
                    }
                ]
            }
        },

        computed: {
          vasyaJob() {
              return ' is builder'
          },
            personsAgeMoreSeventeen() {
              return this.persons.filter(function(person) {
                  return person.age > 17;
                })
            },
            personsAgeLessEighteen() {
                return this.persons.filter(function(person) {
                    if(person.age < 18) {
                        return person;
                    }
                })
            }
        },

        methods: {
            sayHello() {
              console.log('Hello, ', this.name);
          },
            sayHi() {
                console.log('Hi, ', this.name);
            }
        },

        mounted() {

        }
    }
</script>
