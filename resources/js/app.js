import Vue from "vue";
import SystemIndex from "./components/System/SystemIndex";
import PostComponent from "./components/PostComponent";

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const app = new Vue({
        el: '#app',
        components: {
            SystemIndex,
            PostComponent
        }
    }
)
