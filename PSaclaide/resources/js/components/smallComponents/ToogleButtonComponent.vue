<script setup>
import { ref,inject, onMounted , onBeforeMount } from "vue";

const isFormateur = ref( false );

const emitter = inject('emitter');
const toggle = (e) => {
//    UserState.$emit('changeState',this.isFormateur) 
    
   isFormateur.value = e;
   emitter.emit('changeState',isFormateur.value);
 
}

// onBeforeMount(()=>{
//     emitter.on('changeState', (value) => {   // *Listen* for event
//       console.log('myevent received!', `value: ${value}`);
//     });
// })

// onMounted(()=>{
//     emitter.emit('changeState',isFormateur.value);
   
// })

</script>


<template>
    <div>
        <button
            @click="toggle(true)"
            :class="[isFormateur ? 'btn btn-warning' : 'btn btn-default']"
        >Formateur</button>
        
        <button
            class="student"
            @click="toggle(false)"
            :class="[isFormateur ? 'btn btn-default' : 'btn btn-success']"
        >Etudiant</button>
    </div>
</template>
