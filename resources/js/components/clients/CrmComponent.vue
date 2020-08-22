<template>
    <div>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button id="client_information" type="button" class="btn btn-secondary mr-1">Client Information</button>
            <button id="medical_aid_details" type="button" class="btn btn-secondary mr-1">Medical Aid Details</button>
            <button id="medical_file" type="button" class="btn btn-secondary mr-1">Medical File</button>
            <button id="interaction_history" type="button" class="btn btn-secondary">Interaction History</button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            openNav: function (event) {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            },
    
            closeNav: function (event) {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        }
    }
</script>