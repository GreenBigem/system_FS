<template>
    <div class="container-fluid">
        <div class="row">
<!--            <div class="col-3">-->
<!--                <left-side-bar></left-side-bar>-->
<!--            </div>-->
            <div class="col">
                <Content />
            </div>
        </div>
    </div>
</template>

<script>

// import Header from "./contractors/Header";
import Content from "./contractors/Content";
// import LeftSideBar from "./contractors/LeftSideBar";
// import RightSideBar from "./contractors/RightSideBar";
// import Footer from "./contractors/Footer";

export default {
    data() {
        return {

        }
    },

    components: {
        // Header,
        // LeftSideBar,
        Content
        // RightSideBar,
        // Footer
    },

    mounted() {

    },

    methods: {

    }
}
</script>
