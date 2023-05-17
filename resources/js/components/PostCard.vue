<template>

    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <v-img class="w-full" :src="post['post_picture_path']" alt="oops no image"></v-img>
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">{{post['title']}}</div>
        </div>
        <div class="px-6 pt-4 pb-2">
        </div>
      </div>
</template>

<script setup>
defineProps({post: Object})
</script>