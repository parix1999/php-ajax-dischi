Vue.config.devtools = true;

new Vue (
    {
        el:'#app',
        data: {
            albums: [],
        },
        created() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/api/api.php')
            .then((response) => {
                this.albums = response.data;
            });
        }

    }
);