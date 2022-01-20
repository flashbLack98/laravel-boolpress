<template>
    <div  class="container">
        <h1>lista post</h1>
        <ul>
            <Post v-for='post in posts'
            :key='post.id'
            :post='post'>
            
            </Post>
        </ul>

        <a href="/login">Torna a Homepage</a>
    </div>
</template>

<script>

/* import axios from 'axios'; */
import Post from './partials/Post.vue';

export default {
    name: "App",
    components: {Post,},
    data() {
        return {
           posts : [], 
        };
    },
    mounted(){
        window.axios.get('/api/post').then((resp) => {
            this.posts = resp.data;
        });
    },
    

};
</script>

