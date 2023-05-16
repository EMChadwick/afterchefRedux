<template>
    <Head><title>{{post['title']}}</title></Head>
    <h1>{{post['title']}}</h1>
    <h2>{{author}}</h2>
    <p>{{post['description']}}</p>
   
</template>

<script setup>

//import Post from '../components/Post'
import { Head } from '@inertiajs/vue3'

defineProps({ post: Object, author: Object})
</script>