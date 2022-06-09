<template>
<div>
    <div>
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                   aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                   aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input v-model="email" type="email" id="loginEmail" class="form-control" placeholder="Input your email" />
                        <label class="form-label" for="loginEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input v-model="password" type="password" id="loginPassword" class="form-control" placeholder="Input your password" />
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>
                    <!-- Submit button -->
                    <button @click.prevent="login" type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input v-model="name" type="text" id="registerName" class="form-control" />
                        <label class="form-label" for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input v-model="surName" type="text" id="registerSurName" class="form-control" />
                        <label class="form-label" for="registerUsername">Surname</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input v-model="email" type="email" id="registerEmail" class="form-control" />
                        <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input v-model="password" type="password" id="registerPassword" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input v-model="password_confirmation" type="password" id="registerPasswordConfirmation" class="form-control" />
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                    </div>

                    <!-- Submit button -->
                    <button @click.prevent="register" type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</div>

</template>

<script>
export default {
    name: "LoginRegister",

    data() {
        return {
            name: null,
            surName: null,
            email: null,
            password: null,
            password_confirmation: null,
        }
    },

    mounted() {

    },

    updated() {

    },

    methods: {

        login() {
            axios.get('/sanctum.csrf-cookie')
                .then(response => {
                    axios
                        .post('/login', {email: this.email, password: this.password})
                        .then( res => {
                            console.log(res);
                            localStorage.setItem('x_xsrf_token', res.config.headers['X-XSRF-TOKEN']);
                            this.$router.push({ name: 'user.personal' })
                        })
                });
        },

        register() {
            axios.get('/sanctum.csrf-cookie')
                .then(response => {
                    axios
                        .post('/register', {name: this.name, email: this.email, password: this.password, password_confirmation: this.password_confirmation})
                        .then( res => {
                            localStorage.setItem('x_xsrf_token', res.config.headers['X-XSRF-TOKEN']);
                            this.$router.push({ name: 'user.personal' })
                        })

                });
        }
    }
}

</script>

<style scoped>


</style>
