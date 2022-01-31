<template>
  <div class="container">
 

    <div class="dropdown py-3 pl-3">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            Filtri
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <router-link :to="{name : 'CategoryShow', query : { category: category.id }}" v-for="category in categories" :key="category.id" class="list-group-item ">
                    {{ category.name }}
                </router-link>
        </div>
    </div>

    <ul>
        <Post v-for='post in posts'
        :key='post.id'
        :post='post'>
        
        </Post>
    </ul>

    <button v-if="currentPage > 1"  @click='getPosts(currentPage - 1)'>Indietro</button>

    <button  v-if="currentPage < lastPage " @click='getPosts(currentPage + 1)'>Avanti</button>

  </div>
</template>

<script>

import Post from '../../components/Post.vue';

export default {
    name: 'Index',
    components: {Post,},
        data() {
            return {
            posts : [],
            categories: [],
            currentPage : 1,
            lastPage : '' 
            };
        },
        methods: {
            getPosts(page = 1) {
                const category = this.$route.query.category
                
                window.axios.get("/api/post" , {
                    params: {
                        page,
                        category,
                    }
                }).then((resp) => {
                    this.lastPage = resp.data.last_page;
                    this.posts = resp.data.data;
                    this.currentPage = resp.data.current_page;
                });
            },

            getCategories(){
                window.axios.get('/api/categories').then((resp) => {
                    this.categories = resp.data;
                    console.log(this.$route);
                });
            }
        },

        mounted() {
            this.getPosts();
            this.getCategories();
        },
    
    

}
</script>

<style>

</style>