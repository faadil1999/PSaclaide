<script setup>
import { ref } from 'vue'
const test = ref("faadil");



</script>

<template>
    <div>
        <h1>Test</h1>
        <input type="text" name="" v-model.trim="test">
    
        <p>{{ test }}</p>
    </div>
</template>