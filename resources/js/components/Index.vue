<template>
    <div class="container-fluid p-5">
        <nav class="justify-content-around">
            <router-link v-if="token" :to="{ name: 'get.index' }"
                >Главная</router-link
            >
            <router-link v-if="!token" :to="{ name: 'user.login' }"
                >Войти</router-link
            >
            <router-link v-if="token" :to="{ name: 'user.personal' }"
                >Профайл</router-link
            >
            <router-link v-if="!token" :to="{ name: 'user.registration' }"
                >Регистрация</router-link
            >
            <router-link v-if="token" :to="{ name: 'contractors' }"
                >Контрагенты</router-link
            >

            <a v-if="token" @click.prevent="logout" href="#">Выйти</a>

            <hr />

            <div v-if="!token" class="d-flex justify-content-center">
                <login-register></login-register>
            </div>
        </nav>
        <transition name="component-fade" mode="out-in">
            <router-view></router-view>
        </transition>

    </div>
</template>

<script>
import LoginRegister from "./LoginRegister/LoginRegister";

export default {
    name: "index",
    components: {
        LoginRegister,
    },

    data() {
        return {
            token: null,
            userName: null,
        };
    },

    mounted() {
        this.getToken();
    },

    updated() {
        this.getToken();
    },

    methods: {
        getToken() {
            this.token = localStorage.getItem("x_xsrf_token");
        },

        logout() {
            axios.post("/logout").then((res) => {
                localStorage.removeItem("x_xsrf_token");
                this.$router.push({ name: "user.login" });
            });
        },
    },
};
</script>

    .component-fade-enter-active,
    .component-fade-leave-active {
        transition: opacity 0.7s ease;
    }

    .component-fade-enter-from,
    .component-fade-leave-to {
        opacity: 0;
    }

<style scoped></style>
