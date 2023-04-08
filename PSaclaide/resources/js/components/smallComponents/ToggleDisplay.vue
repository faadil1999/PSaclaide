<script setup>
import {ref, inject , onMounted , onUpdated , onBeforeMount } from 'vue'

const props = defineProps(['user_auth'])
const emitter = inject('emitter')
const isFormateur = ref (null)
const styleDiv = ref ('etudiantclass') 

const getState = async () => {
    
    let response =  await axios.get(`http://127.0.0.1:8000/api/toggleState/${props.user_auth.id}`)
    isFormateur.value = response.data.state;
}


onBeforeMount( async()=>{

    getState();

})


onMounted(() => {


    console.log(`Fadtoooggle:  ${isFormateur.value}`);
})

onUpdated(()=>{

        emitter.on('changeState', (value) => {   // *Listen* for event
            console.log(`toggle update ${value}`);
      isFormateur.value = value;
    });

    if(isFormateur.value){
        styleDiv.value = "formateurclass";
    }else{
        styleDiv.value = "etudiantclass";
    }

    console.log(`${isFormateur.value} ${styleDiv.value}`)

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