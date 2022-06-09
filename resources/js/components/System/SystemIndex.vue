<template>
    <div class="py-0">

        <div>
            <div class="row">
                <div class="col-sm-3">
                    <left-side-bar></left-side-bar>
                </div>
                <div class="col-sm-7 column">
                    <div>
                        <Header />
                    </div>
                    <div>
                        <Content />
                    </div>
                </div>
                <div class="col-sm-2">
                    <right-side-bar></right-side-bar>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>

    import Header from "./Header";
    import Content from "./Content";
    import LeftSideBar from "./LeftSideBar";
    import RightSideBar from "./RightSideBar";
    import Footer from "./Footer";

    export default {
        data() {
            return {

            }
        },

        mounted() {

        },
        components: {
            Header,
            LeftSideBar,
            Content,
            RightSideBar,
            Footer
        }
    }
</script>
