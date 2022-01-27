<template>
    <li class='card'>
        <router-link :to="'/post/' + post.id"><h3>{{ post.title }} </h3></router-link>
        <p>{{ post.description}}</p>
        <p>{{post.user_id}}</p>
    </li>
</template>

<script>
export default {
    name: 'Post',
    props: {
        post : {
            type: Object,
        },
    },
    data(){
       return{
        
       };
    },
}
</script>

<style>

</style>