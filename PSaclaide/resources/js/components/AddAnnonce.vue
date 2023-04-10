<script setup>
import { onMounted, ref } from 'vue'
const props = defineProps(['user_auth','formateur_id'])
const is_collectif = ref( false )
const matieres = ref( null )
const sousMatieres = ref( null )
const location = ref( null )
const title = ref( "" )
const nbr_participant = ref( 1 )
var matiere_id = 1
var sousMatiere_id = 1
const description = ref( null )
const date = ref( null )
const horaire = ref( null )

// new Date().toJSON().slice(0,10).replace(/-/g,'/');

//get all subjects from database
const getMatieres = async () => {
    let response =  await axios.get("http://127.0.0.1:8000/api/matieres");
    matieres.value = response.data.matieres
    console.log(props.formateur_id);
}

const getSousMatieres = async () => {
    let response =  await axios.get("http://127.0.0.1:8000/api/sousMatieres");
    sousMatieres.value = response.data.sousMatieres
}


const onChange = (e) =>
{
    var id = e.target.value;
    matiere_id = e.target.value;
    console.log("id",matiere_id);
}

const onChangeSM = (e) =>
{
    var idSM = e.target.value;
    sousMatiere_id = e.target.value;
    console.log("idSM",sousMatiere_id);
}


//add annonce on database
const addAnnonce = async ()=>{
    await  axios.post('/api/store/annonce',{
        
        title: title.value,
        description: description.value,
        email: props.user_auth.email,
        matiere: matiere_id,
        sousMatiere: sousMatiere_id,
        isIndividual:!is_collectif.value,
        heure: horaire.value,
        date: date.value,
        id: props.formateur_id,
        location:location.value,
        participant_max: nbr_participant.value
     }).then(function (response){
        console.log("SUCCESS");

        window.location.href = "http://127.0.0.1:8000/home"
   }).catch(function (error) {

    console.log(error);

});
   

}

// after the onMounted function, we get all subjects in result to display it on screen
onMounted(() =>
{
    getMatieres();
    getSousMatieres();
})

</script>

<template>
    <div>
        <form @submit.prevent="addAnnonce()">
        
            <div class="card-body">  
                <h1>Bien test</h1>
                <div class="form-check">
                    <label>Type d'annonce</label><br/>
                   
                    <!-- <p v-for="matiere in matieres" :key="matiere.id" >{{ matiere }}</p> -->
                    <label class="form-radio-label">
                        <input class="form-radio-input" type="radio" v-model="is_collectif"  name="optionsRadios" :value="false">
                        <span class="form-radio-sign">Individuel</span>
                    </label>
                    <label class="form-radio-label ml-3">
                        <input class="form-radio-input" type="radio" v-model="is_collectif"  name="optionsRadios" :value="true">
                        <span class="form-radio-sign">Collectif</span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="email">Titre</label>
                    <input type="text" class="form-control" v-model="title" name="title"   placeholder="Entrer le titre">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
               
                <div v-if="is_collectif" class="form-group">
                    <label for="email">Nombre max participant</label>
                    <input type="number" class="form-control"  name="participant_max" v-model="nbr_participant"  placeholder="Nombre de participant">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div v-else  class="form-group">
                    <small id="emailHelp" class="form-text text-muted">Une annonce individuel se passe avec une seule personne</small>
                </div>
                <div  class="form-group">
                    <label for="email">Location</label>
                    <input type="text" class="form-control"  name="location" v-model="location"  placeholder="Lieu de deroulement">
                    <small id="emailHelp" class="form-text text-muted">Ex: Bat620 B120 ,Bat 640 E13.. </small>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Matières</label>
                        <select class="form-control" name="matiere" v-on:change="onChange($event)">   
                            <option  v-for="matiere in matieres" :key="matiere.id" :value="matiere.id">{{ matiere['name'] }}</option>
                        </select> 

                    <label for="exampleFormControlSelect1">Sous-Matières</label>
                        <select class="form-control" name="sousMatiere" v-on:change="onChangeSM($event)">   
                            <option  v-for="sousMatiere in sousMatieres" :key="sousMatiere.id" :value="sousMatiere.id">{{ sousMatiere['name'] }}</option>
                        </select> 
                </div>

                
                <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" v-model="date" id="date" name="date">
                
                        <label for="time">Horaire:</label>
                        <input type="time" v-model="horaire" id="time" name="time">
                </div>
       
                <div class="form-group">
                    <label for="comment">Description</label>
                    <textarea class="form-control" id="desc" type="textarea" v-model="description" name="description" rows="5">

                    </textarea>
                </div> 
             
                <div class="card-action">
                    <button class="btn btn-success" type="submit" >Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                </div> 
            </div>
        </form>
    </div>
</template>