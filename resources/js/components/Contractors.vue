<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills nav-fill">
                    <div class="container-fluid">
                        <form class="d-flex">
                            <input
                                class="form-control mr-2"
                                type="search"
                                placeholder="Contractor's Search"
                                aria-label="Search"
                            />
                            <button
                                class="btn btn-outline-success"
                                type="submit"
                            >
                                Search
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
                            >Ind. contractors</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            v-bind:class="{
                                active:
                                    $route.path ===
                                    '/contractors/addIndContractor',
                            }"
                            href="#"
                            >Add ind. contractor</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            @click.prevent="showEntContractorsList()"
                            href="#"
                        >
                            Ent. contractors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="#"
                            tabindex="-1"
                            aria-current="page"
                            >Add ent. contractor</a
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
</template>

<script>
// import IndContractors from "resources/js/components/Contractors/IndContractors";

export default {
    data() {
        return {};
    },

    components: {
        // IndContractors,
    },

    mounted() {},

    methods: {},
};
</script>
