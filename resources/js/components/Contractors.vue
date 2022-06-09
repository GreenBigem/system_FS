<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills nav-fill">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input
                                    class="form-control mr-2"
                                    type="search"
                                    placeholder="Введите контрагента"
                                    aria-label="Search"
                                />
                                <button
                                    class="btn btn-outline-success"
                                    type="submit"
                                >
                                    Поиск
                                </button>
                            </form>
                        </div>
                        <li class="nav-item">
                            <router-link
                                to="/contractors/ind_contractors"
                                class="nav-link"
                                v-bind:class="{
                                    active:
                                        $route.path ===
                                        '/contractors/ind_contractors',
                                }"
                                >Физ. лица</router-link
                            >
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                data-bs-whatever="@mdo"
                                v-bind:class="{
                                    active:
                                        $route.path ===
                                        '/contractors/addIndContractor',
                                }"
                                >Добавить физ. лицо</a
                            >
                        </li>
                        <li class="nav-item">
                            <router-link
                                to="/contractors/ent_contractors"
                                class="nav-link"
                                v-bind:class="{
                                    active:
                                        $route.path ===
                                        '/contractors/ent_contractors',
                                }"
                                >Юр. лица</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="#"
                                tabindex="-1"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                data-bs-whatever="@fat"
                                aria-current="page"
                                >Добавить юр. лицо</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <transition name="component-fade" mode="out-in">
                        <router-view></router-view>
                    </transition>
                </div>
            </div>
        </div>

        <!-- Modal -->

        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Добавить физ. лицо
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label
                                    for="recipient-name"
                                    class="col-form-label"
                                    >Фамилия (обязательно):</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="recipient-name"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label"
                                    >Имя:</label
                                >
                                <textarea
                                    class="form-control"
                                    id="message-text"
                                ></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Закрыть
                        </button>
                        <button type="button" class="btn btn-primary">
                            Создать и редактировать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },

    components: {},

    mounted() {},

    methods: {},
};
</script>

<style>
.component-fade-enter-active,
.component-fade-leave-active {
    transition: opacity 0.7s ease;
}

.component-fade-enter-from,
.component-fade-leave-to {
    opacity: 0;
}
</style>
