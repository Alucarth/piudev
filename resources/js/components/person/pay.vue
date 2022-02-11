<template>
    <div>
            <!-- Default box -->
    <div class="card">
        <div class="card-header">
        <h3 class="card-title"> Proyecto: {{proyecto.name}} </h3>
            <!-- <a href="" class="btn btn-success">Crear Proyecto</a> -->

        <div class="card-tools">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#payModal">
                    Crear Pago
                </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">

                <table class="table">
                    <thead>
                        <th>Detalle</th>
                        <th>N° de Preventivo (c-31)</th>
                        <th>Estado</th>
                        <th>Objeto del Incentivo</th>
                        <th>Amount</th>

                        <th></th>
                    </thead>
                    <tbody>
                        <tr v-for="(item,index) in pays" :key="index">
                            <td>{{item.detail}}</td>
                            <td>{{item.number}}</td>
                            <td>{{item.state}}</td>
                            <td>{{item.amount}}</td>

                            <td>
                                 <button class="btn btn-danger btn-sm">  <i class="fa fa-trash"></i> </button>
                                <!--
                                <a :href="url_pays+'/'+item.id" class="btn btn-info btn-sm"> <i class="fas fa-money-bill-wave"></i> </a> -->
                            </td>
                        </tr>
                    </tbody>

                </table>



        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <!-- Footer -->
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    <!-- Modal -->
    <div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id='formOperation' method='post' :action="url" >

        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="payModalLabel">Crear Proyecto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <!-- <form class="form-horizontal"> -->
        <div class="modal-body">
            <div v-html='csrf'></div>
            <input type="text" :value="JSON.stringify(form)" name="json_string" hidden>
            <div class="form-group">
                <label >Detalle </label>
                <!-- <input type="text" class="form-control" placeholder="" v-model="form.detail"> -->
                <textarea  id="" class="form-control" v-model="form.detail" ></textarea>
            </div>

            <div class="form-group">
                <label >N° de Preventivo </label>
                <input type="text" class="form-control" placeholder="" v-model="form.number">
            </div>

            <div class="form-group">
                <label >Estado</label>
                <input type="text" class="form-control" placeholder="" v-model="form.state">
            </div>

            <div class="form-group">
                <label >Importe de las Transferencias </label>
                <input type="text" class="form-control" placeholder="" v-model="form.amount">
            </div>


        </div>
            <!-- </form> -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        </form>
    </div>
    </div>



    </div>
</template>

<script>
export default {
    props:['proyecto','pays','url','csrf'],
     data:()=>({
        form:{},
    }),
    mounted(){
        this.form.proyect_id = this.proyecto.id
    }

}
</script>
