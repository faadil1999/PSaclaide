<script setup>
import {ref, inject , onMounted , onUpdated } from 'vue'

const emitter = inject('emitter')
const isFormateur = ref (null)
const styleDiv = ref ('etudiantclass') 

onMounted(() => {
    emitter.on('changeState', (value) => {   // *Listen* for event
    //   console.log('show element', `value: ${value}`);
    isFormateur.value = value;
    });
    console.log("Fadtoooggle");
})

onUpdated(()=>{
        emitter.on('changeState', (value) => {   // *Listen* for event
       console.log('toggle display', `value: ${value}`);
      isFormateur.value = value;
    });

    if(isFormateur.value == true ){
        styleDiv.value = "formateurclass";
    }else{
        styleDiv.value = "etudiantclass";
    }

    console.log(styleDiv.value)

    })

</script>

<template>
    <div :class ="styleDiv" >
        <h1 style="color:black" v-if="isFormateur" >Test</h1>
        <slot ></slot>
    </div>
</template>

<style scope>

.formateurclass
{
    -webkit-transition: 2s; 
    background-color: #661012;
}

.etudiantclass
{
    -webkit-transition: 2s; 
    background-color: #c1f6b4;
}

</style>