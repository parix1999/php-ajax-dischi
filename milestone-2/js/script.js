Vue.config.devtools = true;

new Vue (
    {
        el:'#app',
        data: {
            albums: ['ciao'],
            filtrato: [],
            // Select:
            selected: '',
            flag: false,
            
        },
        created() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/api/api.php')
            .then((response) => {
                this.filtrato = response.data;
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
                        this.filtrato = response.data;
                        console.log(typeof(this.filtrato)); 
                    
                    });
            },
            tutti:function() {
                this.flag = true;
                if (this.flag === true){
                    axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/api/api.php')
                    .then((response) => {
                    this.filtrato = response.data;
                    }); 
                }
            }

        }

    }
);