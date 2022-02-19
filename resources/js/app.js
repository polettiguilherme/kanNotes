/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { data } = require('jquery');

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


 var app = new Vue({
    el: '#box',
    data: {
        categoria: [],
        categorias:[],
        cards:[],
        new_card: '',
        request: [],
        id: '',
    },
    methods: {
        addCategoria: function(){

            this.categoria.id_quadro = $('#id_quadro').val();

            this.request = this.categoria;

            //console.log(this.request);

            $.ajax({
                url: '{{ route(site.add) }}',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                data: {
                    id_quadro: this.request.id_quadro,
                    nome_cat: this.request.nome_cat,
                    function: 'adicionar'
                },
                dataType: 'json',
                success: function(j){
                    console.log(j);
                    window.location.reload();
                }
            })
            

        },
        
        addCard: function(board){


            

            this.new_card = $('#card').val();

            console.log(this.new_card)

            axios.post('{{ route(site.add) }}', {
                id: board,
                novo: this.new_card,
                function: 'novo_card'
            }).then(response =>{
    
                console.log(response);
                window.location.reload();
    
            });

        },
        
        remover: function(id){
            
            $.ajax({
                url: '{{ route(site.add) }}',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                data: {
                    id_board: id,
                    function: 'remover'
                },
                dataType: 'json',
                success: function(j){

                    console.log(j)
                    window.location.reload();

                }
            })
        },

        removerCard: function(id){
            
            $.ajax({
                url: '{{ route(site.add) }}',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                data: {
                    id_card: id,
                    function: 'removerCard'
                },
                dataType: 'json',
                success: function(j){

                    console.log(j)
                    window.location.reload();

                }
            })
        },
        
    }
});