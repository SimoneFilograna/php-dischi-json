"use strict"

const { createApp } = Vue

createApp({
    data() {
        return {
            diskList: [],
        }
    },

    mounted(){
        axios.get("API/api.php").then( response => {
            this.diskList = response.data
        });
    }

}).mount('#app')