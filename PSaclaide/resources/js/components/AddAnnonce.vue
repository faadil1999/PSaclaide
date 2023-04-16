<script setup>
import { onMounted, ref , inject } from 'vue'
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
const emitter = inject('emitter');
const isFormateur = ref( null );


//get all subjects from database
const getMatieres = async () => {
    let response =  await axios.get("http://127.0.0.1:8000/api/matieres");
    matieres.value = response.data.matieres
    console.log(props.formateur_id);
}

const getSousMatieres = async () => {
    let response =  await axios.get(`http://127.0.0.1:8000/api/sousMatieres/${matiere_id}`);
    console.log('Sous Matieres');
    sousMatieres.value = response.data.sousMatieres
}


const onChange =async (e) =>
{
    var id = e.target.value;
    matiere_id = e.target.value;
    await getSousMatieres();
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
        id: props.user_auth.id,
        location:location.value,
        formateur_id:props.formateur_id,
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
    emitter.on('changeState', (value) => {   // *Listen* for event
    //   console.log('show element', `value: ${value}`);
      isFormateur.value = value;
    });
    getMatieres();
    getSousMatieres();
})

</script>

<template>
    <div>
      
        
        <div id="containercreerannonce" class="container">
					<h1 id="h1creerannonce">Publier une annonce de cours</h1>
					<form id="annonce-form" v-if="isFormateur" @submit.prevent="addAnnonce()">
						<div class="form-group">
                            <label for="exampleFormControlSelect1">Matières</label>
                            <select class="form-control" name="matiere" v-on:change="onChange($event)">   
                                <option  v-for="matiere in matieres" :key="matiere.id" :value="matiere.id">{{ matiere['name'] }}</option>
                            </select> 
						</div>
						<div class="form-group">
                            <label for="exampleFormControlSelect1">Sous-Matières</label>
                            <select class="form-control" name="sousMatiere" v-on:change="onChangeSM($event)">   
                                <option  v-for="sousMatiere in sousMatieres" :key="sousMatiere.id" :value="sousMatiere.id">{{ sousMatiere['name'] }}</option>
                            </select> 
						</div>
						<div class="form-group">
							<label for="title">Titre de l'annonce</label>
                            <input type="text" class="form-control" v-model="title" name="title"   placeholder="Entrer le titre">
						</div>
						<div class="form-group">
							<label for="descriptif">Description du cours</label>
							<textarea id="descriptif" v-model="description" name="description" class="form-control" placeholder="Entrez plus de précision sur votre cours si vous le désirez."></textarea>
						</div>
						<div class="form-group">
							<label for="departement">Lieu du cours</label>
                            <input type="text" class="form-control"  name="location" v-model="location"  placeholder="Lieu de deroulement">
                            <small id="emailHelp" class="form-text text-muted">Ex: Bat620 B120 ,Bat 640 E13.. </small>
						</div>
						<div class="form-group">
							<label for="date">Date</label>
							<input type="date"  v-model="date" id="date" name="date" required />
						</div>
						<div>
							<label for="heure">Heure du cours</label>
							<input type="time" v-model="horaire" id="heure" name="heure" required/>
							<br>
							<br>
						</div>
						<div class="form-group">
							<label for="nombre-eleves">Nombre d'élèves désiré</label>
							<div class="radio-buttons">
                                <input class="form-radio-input" type="radio" v-model="is_collectif"  name="optionsRadios" :value="false">
								<b for="choiceunique">Un seul élève (Individuel)</b>
							</div>
							<div class="radio-buttons">
								<input class="form-radio-input" type="radio" v-model="is_collectif"  name="optionsRadios" :value="true">
								<b for="choicemultiple">Plusieurs élèves (Collectif)</b>
							</div>
							<div class="nbeleve" v-if="is_collectif">
								<br>
                                <label for="email">Nombre max participant</label>
                                <input type="number" class="form-control"  name="participant_max" v-model="nbr_participant"  placeholder="Nombre de participant">
							</div>
							<br>
							<br>
							<div class="radio-button">
								<button type="submit">Publier</button>
								<!-- <button type="reset">Réinitialiser</button> -->
							</div>
						</div>
					</form>
                    <div v-else>
                        <h3>Vous devez mettre votre statut sur formateur !!</h3>
                    </div>
				</div>

    </div>
</template>

