<template>
    <Head><title>{{post['title']}}</title></Head>
    <img :src="post['post_picture_path']">
    <h1>{{post['title']}}</h1>
    <h2>{{author}}</h2>
    <p>{{post['description']}}</p>
    <div>{{post}}</div>
   
</template>

<script setup>

//import Post from '../components/Post'
import { Head } from '@inertiajs/vue3'

defineProps({ post: Object, author: Object})
</script>