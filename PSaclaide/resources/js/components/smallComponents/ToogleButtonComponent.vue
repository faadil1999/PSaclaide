<script setup>
import { ref,inject, onMounted , onBeforeMount } from "vue";

console.log("sdsdsad");


const props = defineProps(['user_auth'])
const isFormateur = ref( false );

const emitter = inject('emitter');

const getState = async () => {
    
    let response =  await axios.get(`http://127.0.0.1:8000/api/toggleState/${props.user_auth.id}`)
    isFormateur.value = response.data.state;
}

const putState = async (e) => {
    let response =  await axios.put(`http://127.0.0.1:8000/api/toggleState/${props.user_auth.id}`,{
        state:e
    });
    isFormateur.value = e;
    console.log(response);
}


const toggle = async(e) => {
//    UserState.$emit('changeState',this.isFormateur) 
    await putState(e);
   
    console.log(`toogle ${isFormateur.value}`);
   emitter.emit('changeState',isFormateur.value);
 
}

onBeforeMount( async()=>{
   await getState();
    
    emitter.emit('changeState',isFormateur.value);
    
})

// onMounted(()=>{
//     emitter.emit('changeState',isFormateur.value);
   
// })

</script>


<template>
    <div>
        <button
            @click="toggle(true)"
            :class="[isFormateur ? 'btn btn-warning' : 'btn btn-default']"
        >Formateur </button>
        
        <button
            class="student"
            @click="toggle(false)"
            :class="[isFormateur ? 'btn btn-default' : 'btn btn-success']"
        >Etudiant </button>
    </div>
</template>
