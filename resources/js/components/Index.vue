<template>
<div class="container-fluid">
    <nav class="justify-content-around">
        <router-link v-if="token" :to="{ name: 'get.index' }">Get</router-link>
        <router-link v-if="!token" :to="{ name: 'user.login' }">Login</router-link>
        <router-link v-if="token" :to="{ name: 'user.personal' }">Personal</router-link>
        <router-link v-if="!token" :to="{ name: 'user.registration' }">Registration</router-link>
        <router-link v-if="token" :to="{ name: 'contractors' }">Contractors</router-link>

        <a  v-if="token" @click.prevent="logout" href="#">Logout</a>

        <hr>

        <div v-if="!token" class="d-flex justify-content-center">
            <login-register></login-register>
        </div>
    </nav>
    <router-view></router-view>
</div>
</template>

<script>
import LoginRegister from "./LoginRegister/LoginRegister";

export default {
    name: "index",
    components: {
      LoginRegister
    },

    data() {
        return {
            token: null,
            userName: null
        }
    },

    mounted() {
        this.getToken()
    },

    updated() {
      this.getToken()
    },

    methods: {

        getToken() {
          this.token = localStorage.getItem('x_xsrf_token');
        },

        logout() {
            axios
                .post('/logout')
                .then( res => {
                    localStorage.removeItem('x_xsrf_token');
                    this.$router.push({ name: 'user.login' });
                })
        }
    }
}

</script>

<style scoped>


</style>
