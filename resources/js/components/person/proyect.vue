<template>
<div>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
        <h3 class="card-title"></h3>
            <!-- <a href="" class="btn btn-success">Crear Proyecto</a> -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#proyectModal">
                    Crear Proeycto
                </button>
        <div class="card-tools">
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
                        <th>Nombre Proyecto</th>
                        <th>Documento Compromiso</th>
                        <th>Monto</th>
                        <th>Objeto del Incentivo</th>
                        <th>Fecha Inicial</th>
                        <th>Fecha Final</th>
                        <th>Numero de Transferencias</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr v-for="(item,index) in proyectos" :key="index">
                            <td>{{item.name}}</td>
                            <td>{{item.commitment_document}}</td>
                            <td>{{item.amount}}</td>
                            <td>{{item.objective}}</td>
                            <td>{{item.date_start}}</td>
                            <td>{{item.date_start}}</td>
                            <td>{{item.transaction_number}}</td>
                            <td>
                                <button class="btn btn-danger btn-sm">  <i class="fa fa-trash"></i> </button>
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
    <div class="modal fade" id="proyectModal" tabindex="-1" role="dialog" aria-labelledby="proyectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id='formOperation' method='post' :action="url" >

        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="proyectModalLabel">Crear Proyecto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <!-- <form class="form-horizontal"> -->
        <div class="modal-body">
            <div v-html='csrf'></div>
            <input type="text" :value="JSON.stringify(form)" name="json_string" >
            <div class="form-group">
                <label >Nombre Convocatoria / Concurso / Financiamiento Directo </label>
                <input type="text" class="form-control" placeholder="" v-model="form.name">
            </div>

            <div class="form-group">
                <label >Documento de Compromiso MPD/PIU/DC N° </label>
                <input type="text" class="form-control" placeholder="" v-model="form.commitment_document">
            </div>

            <div class="form-group">
                <label >Monto Aprobado en el Documento de Compromiso </label>
                <input type="text" class="form-control" placeholder="" v-model="form.amount">
            </div>

            <div class="form-group">
                <label >Objeto del Incentivo segun el Documento de Compromiso </label>
                <input type="text" class="form-control" placeholder="" v-model="form.objective">
            </div>

            <div class="form-group">
                <label >Fecha Inicial </label>
                <input type="date" class="form-control" placeholder="" v-model="form.date_start" >
            </div>

            <div class="form-group">
                <label >Fecha Final </label>
                <input type="date" class="form-control" placeholder="" v-model="form.date_end">
            </div>

            <div class="form-group">
                <label >Numero de Transferencias </label>
                <input type="number" class="form-control" placeholder="" v-model="form.transaction_number">
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
    props:['proyectos', 'persona','url','csrf'],
    data:()=>({
        form:{},
    }),
    mounted(){
        this.form.person_id = this.persona.id
    }



}
</script>
