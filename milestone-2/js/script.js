Vue.config.devtools = true;

new Vue (
    {
        el:'#app',
        data: {
            albums: [],
            filtrato: [],
            // Select:
            selected: ''
            
        },
        created() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/api/api.php')
            .then((response) => {
                this.albums = response.data;
            }); 

            // axios.get(`http://localhost:8888/php-ajax-dischi/milestone-2/api/filtered.php?genere=${this.selected}`)
            // .then((response) => {
            //     this.filtrato = this.albums;
            //     console.log(this.filtrato);
            // });
            
        },
        methods: {
            clicca: function(){
                    axios.get(`http://localhost:8888/php-ajax-dischi/milestone-2/api/filtered.php?genere=${this.selected}`)
                    .then((response) => {
                        if(this.filtrato.length <= 0) {
                            this.filtrato = this.albums;
                        }
                        this.filtrato = response.data;
                        console.log(this.filtrato); 
                    
                    });
            }
        }

    }
);