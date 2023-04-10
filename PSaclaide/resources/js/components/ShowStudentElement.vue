<script setup>

import {ref,inject, onMounted , onUpdated} from 'vue'
const emitter = inject('emitter');
const isFormateur = ref( null );


onMounted(() => {

    emitter.on('changeState', (value) => {   // *Listen* for event
    //   console.log('show element', `value: ${value}`);
      isFormateur.value = value;
    });
       
    })

 onUpdated(()=>{
        emitter.on('changeState', (value) => {   // *Listen* for event
    //   console.log('show element', `value: ${value}`);
      isFormateur.value = value;
    });
    })

</script>

<template>
    <div>
        <slot v-if="!isFormateur"></slot>
    </div>
</template>