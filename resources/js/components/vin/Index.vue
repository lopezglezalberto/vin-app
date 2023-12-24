<template>

    <div class="container body">
        <div class="col-md-12 col-sm-12 col-xs-9">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Vins</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>vin</th>
                                            <th>Version</th>
                                            <th>Equipment code</th>
                                            <th>Year of issue</th>
                                            <th>Serial number</th>
                                            <th>Place of production</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="vin in vins" :key="vin.id">
                                            <td scope="col">{{ vin.description }}</td>
                                            <td scope="col">{{ vin.version }}</td>
                                            <td scope="col">{{ vin.equipment_code }}</td>
                                            <td scope="col">{{ vin.year_issue }}</td>
                                            <td scope="col">{{ vin.serial_number }}</td>
                                            <td scope="col">{{ vin.place_production }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</template>


<script>
    export default {
        name: 'IndexVin',

        data(){
            return {
                vins: []
            }
        },
        created(){
            this.axios.get('api/vins')
                        .then((response) => {
                            this.vins = response.data.data
                            
                        })
        }
    }
</script>