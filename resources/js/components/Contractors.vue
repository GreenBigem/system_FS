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
                                data-bs-target="#addIndContractor"
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
                                data-bs-target="#addEntContractor"
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
                    <router-view></router-view>
                </div>
            </div>
        </div>

        <!-- Modal for Adding Ind.Contractors -->

        <div
            class="modal fade"
            id="addIndContractor"
            tabindex="-1"
            aria-labelledby="addIndContractorModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addIndContractorModalLabel">
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
                                    for="indContractor-surname"
                                    class="col-form-label"
                                    >Фамилия (обязательно):</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    v-model="newIndContractorSurname"
                                    id="indContractor-surname"
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="indContractor-name"
                                    class="col-form-label"
                                    >Имя:</label
                                >
                                <input
                                    class="form-control"
                                    v-model="newIndContractorName"
                                    id="indContractor-name"
                                />
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
                        <button type="button" @click="createIndContractor" class="btn btn-primary">
                            Создать и редактировать
                        </button>
                    </div>
                </div>
            </div>
        </div>

                <!-- Modal for Adding Ent.Contractors -->

        <div
            class="modal fade"
            id="addEntContractor"
            tabindex="-1"
            aria-labelledby="addEntContractorModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addEntContractorModalLabel">
                            Добавить юр. лицо
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
                                    for="entContractor_short_name"
                                    class="col-form-label"
                                    >Короткое наименование (обязательно):</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="entContractor_short_name"
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="entContractor-inn"
                                    class="col-form-label"
                                    >ИНН:</label
                                >
                                <input
                                    class="form-control"
                                    id="entContractor-inn"
                                />
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
        return {
            newIndContractorSurname: null,
            newIndContractorName: null,
        };
    },

    components: {},

    mounted() {},

    methods: {

        createIndContractor() {
        console.log('Привет');
        // axios.get("/api/indContractors/").then((res) => {
        //     this.indContractors = res.data;
        // });
        }
    }
};
</script>

<style scoped>

</style>
