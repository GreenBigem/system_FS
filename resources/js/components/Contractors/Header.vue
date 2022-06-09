<template>
    <div class="py-0 p-3 mb-2 bg-success text-white">
        <ul class="nav nav-pills nav-fill">
                    <div class="container-fluid">
                        <form class="d-flex">
                            <input class="form-control mr-2" type="search" placeholder="Contractor" aria-label="Search">
                            <button class="btn btn-outline-success text-black" type="submit">Search</button>
                        </form>
                    </div>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ind. contactors list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add ind.contactor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ent. contactors list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Add ent.contactor</a>
            </li>
        </ul>
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
