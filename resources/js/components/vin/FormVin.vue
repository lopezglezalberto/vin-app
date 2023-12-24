<template>
    <div class="container body">
        <div class="col-md-12 col-sm-12 col-xs-9">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Generate VIN</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">

                                <div v-if="alert" class="alert alert-success alert-dismissible fade in" role="alert" >
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Alert!</strong> {{ text }}.
                                </div>

                                <form v-on:submit.prevent="add_vin">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <section class="panel">
                                            <div class="panel-body">
                                                <div class="col-sm-12">
                                                    <div class="form-group col-xs-6">
                                                        <label>Equipment code * :</label>
                                                        <Select2 v-model="select_equipment_code" 
                                                                :options="equipment_codes" placeholder="Select the equipment code..." 
                                                                @change="myChangeEvent" 
                                                        />
                                                        <div v-if="enviado && !$v.select_equipment_code.required" class="messageError">
                                                            This field is required.
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xs-6">
                                                        <label>Place of production * :</label>
                                                        <Select2 v-model="select_place_production" 
                                                                :options="place_production" placeholder="Select the place of production ..." 
                                                                @change="myChangeEventPlace" 
                                                        />
                                                        <div v-if="enviado && !$v.select_place_production.required" class="messageError">
                                                            This field is required.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12" style="padding-top: 3%;"> 
                                                    <div class=" col-sm-4">
                                                        <label>Version * :</label>
                                                        <input type="text" 
                                                            v-model="version"
                                                            class="form-control col-md-7 col-xs-12" 
                                                            data-parsley-id="6957"
                                                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                                            maxlength="3"
                                                            @input="myChangeEventVersion($event)" 
                                                        >
                                                        <div v-if="enviado && !$v.version.required" class="messageError">
                                                            This field is required.
                                                        </div>
                                                        <div v-if="enviado && !$v.version.minLength" class="messageError">
                                                            Must contain 3 digits.
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-4">
                                                        <label>Year of issue* :</label>
                                                        <input type="text" 
                                                            v-model="year_issue"
                                                            class="form-control col-md-7 col-xs-12" 
                                                            data-parsley-id="6957" 
                                                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" 
                                                            maxlength="2"
                                                            @input="myChangeEventYear($event)" 
                                                        >
                                                        <div v-if="enviado && !$v.year_issue.required" class="messageError">
                                                            This field is required.
                                                        </div>
                                                        <div v-if="enviado && !$v.year_issue.minLength" class="messageError">
                                                            Must contain 2 digits.
                                                        </div>
                                                    </div>
                                                    <div class=" col-sm-4">
                                                        <label>Serial number * :</label>
                                                        <input type="text" 
                                                            v-model="serial_number"
                                                            readonly="readonly"
                                                            class="form-control col-md-7 col-xs-12" 
                                                            data-parsley-id="6957"
                                                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                                            maxlength="7"
                                                        >
                                                        <div v-if="enviado && !$v.serial_number.required" class="messageError">
                                                            This field is required.
                                                        </div>
                                                        <div v-if="enviado && !$v.serial_number.minLength" class="messageError">
                                                            Must contain 7 digits.
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xs-12">
                                                    <div class="ln_solid"></div>
                                                    <div class="space-12"></div>
                                                    <div class="form-group col-sm-12">
                                                        <div class="pull-right">
                                                            <a v-on:click="getNewSerialNumber" class="btn btn-warning" v-if="isDisabledSearch" >Search serial number</a>
                                                            <button type="submit" class="btn btn-primary" v-if="isDisabledVIN">Add VIN</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">

                                        <h2 class="black"> Vehicle Identification Number </h2>
                                        
                                        <div class="project_detail">

                                            <p class="title">{{ vin_code }}</p>
                                            
                                        </div>
                                        <br />
                                        <!--  -->
                                        <div class="text-right form-group col-sm-12" style="padding-top: 20%">
                                            <a v-on:click="generateVIN" v-if="isDisabledVIN" class="btn btn-default btn-success">
                                                <i class="ace-icon fa fa-check bigger-160"></i> Generate VIN
                                            </a>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

import Select2 from 'v-select2-component';
import { required, minLength } from 'vuelidate/lib/validators';

    export default {
        name: 'Create_vin',
        components: {Select2},
        data(){
            return {
                equipment_codes: [],
                place_production: [],
                errormsg: '',
                enviado: false,
                select_equipment_code: '',
                select_place_production: '',
                vin_code: '',
                version: '',
                year_issue: '',
                serial_number: '',
                isDisabledSearch: false,
                isDisabledVIN: false,
                alert: false,
                text: '',
                count_down: null,
                
            }
        },
        created(){

            Promise.all([this.loadEquipmentCode(), this.loadPlaceProduction()])
                .then(values => {

                }).catch(error => {
                    this.errormsg = error.response.data.message;
                });

            this.enableSearch()
        },
        validations: {

            select_equipment_code: { required },
            select_place_production: { required },
            version: { required, minLength: minLength(3) },
            year_issue: { required, minLength: minLength(2) },
            serial_number: { required, minLength: minLength(7) }

        },
        methods: {
            async  loadEquipmentCode(){

                await this.axios.get('api/equipmentCodes')
                    .then((resp) => {

                        this.equipment_codes = resp.data.data;
                    });
            },

            async loadPlaceProduction(){
                await this.axios.get('api/placeProductions')
                    .then((resp) => {
                        
                        this.place_production = resp.data.data
                    });
            },

            alert_msg(text_msg){

                this.alert = true
                this.text = text_msg
                this.expires_in = 10

                this.interval = setInterval(() => {
                    if (this.expires_in === 0) {
                        this.alert = false
                    } else {
                        this.expires_in -= 1;
                    }
                }, 1000);
                
            },

            enableSearch(){

                if((this.version.length == 3) && 
                   (this.year_issue.length == 2) && 
                   (this.select_equipment_code) && 
                   (this.select_place_production)) {
                   
                    this.isDisabledSearch = true

                    return;
                } 
                
                this.isDisabledSearch = false;
                return;
            },

            enableAdd(){

                if((this.version.length == 3) && 
                (this.year_issue.length == 2) && 
                (this.serial_number.length == 7) &&
                (this.select_equipment_code) && 
                (this.select_place_production)) {
                
                    this.isDisabledVIN = true

                    return;
                } 

                this.isDisabledVIN = false;
                return;
            },

            myChangeEvent(val){

                this.enableSearch()
                this.enableAdd()
            },

            myChangeEventVersion(event){

                this.version = event.target.value;
                this.enableSearch()
                this.enableAdd()
            },

            myChangeEventYear(event){

                this.year_issue = event.target.value;
                this.enableSearch()
                this.enableAdd()
            },

            myChangeEventPlace(val){
                this.enableSearch()
                this.enableAdd()
            },

            generateVIN(){

                this.vin_code = '';
                this.enviado=true;

                if (this.$v.$invalid) {
                    return;
                }

                this.vin_code = this.version + this.select_equipment_code + this.year_issue + this.serial_number + this.select_place_production
            },

            getNewSerialNumber(){
                this.axios.post('api/getSerialNumber')
                .then((resp) => {
                    
                    this.serial_number = resp.data
                    this.enableAdd()
                });
            },

            add_vin(){

                this.vin_code = '';
                this.enviado=true;

                if (this.$v.$invalid) {
                    return;
                }

                this.vin_code = this.version + this.select_equipment_code + this.year_issue + this.serial_number + this.select_place_production

                const param = {
                    equipment_code: this.select_equipment_code,
                    place_production: this.select_place_production,
                    code: this.vin_code,
                    version: this.version,
                    year_issue: this.year_issue,
                    serial_number: this.serial_number,
                }
               
                this.axios.post('api/vins', param)
                .then((resp) => {
                    const vin = resp.data
                    this.alert_msg('VIN added successfully') 
                });
            },
        },
    }
</script>

<style scoped>

    .messageError{

        color:rgb(230, 0, 0);

    }
</style>