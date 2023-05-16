<template>
    <Head title="Afterchef Redux" />
    <h1>Welcome</h1>
    <p>Hello, Welcome to Afterchef!</p>
    <div v-for="post in posts" 
                :key="post.id" 
    >
        <a :href="'/post/'+ post['id']">{{post['title']}} by {{post['name']}}</a>
    </div>
</template>

<script setup>

//import Post from '../components/Post'
import { Head } from '@inertiajs/vue3'

defineProps({ posts: Object})
</script>