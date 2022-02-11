<template>
    <div>
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>

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


                <vue-bootstrap4-table :rows="personas" :columns="columns" :config="config">
                    <template slot="option" slot-scope="props">
                        <a :href="url+'/'+props.row.id" class="btn btn-info"> <i class="fas fa-folder"></i></a>
                        <!-- <v-icon  small>
                            remove_red_eye
                        </v-icon> -->
                        <!-- <v-icon @click="edit(props.row)" small>
                            edit
                        </v-icon>
                        <v-icon @click="destroy(props.row)" small>
                            delete
                        </v-icon> -->
                    </template>
                </vue-bootstrap4-table>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <!-- Footer -->
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
    </div>
</template>
<script>
import VueBootstrap4Table from 'vue-bootstrap4-table'


export default {
    props:['personas','url'],
    data:()=>({

            columns: [{
                    label: "id",
                    name: "id",
                    filter: {
                        type: "simple",
                        placeholder: "id"
                    },
                    sort: true,
                },
                {
                    label: "Nombres",
                    name: "first_name",
                    filter: {
                        type: "simple",
                        placeholder: "Enter first name"
                    },
                    sort: true,
                },
                {
                    label: "Apellidos",
                    name: "last_name",
                    filter: {
                        type: "simple",
                        placeholder: "Enter first name"
                    },
                    sort: true,
                },
                {
                    label: "tipo Doc.",
                    name: "document_type",
                    filter: {
                        type: "simple",
                        placeholder: "Enter first name"
                    },
                    sort: true,
                },
                {
                    label: "Documento",
                    name: "document",
                    filter: {
                        type: "simple",
                        placeholder: "Enter first name"
                    },
                    sort: true,
                },
                {
                    label: "Exp",
                    name: "exp",
                    filter: {
                        type: "simple",
                        placeholder: "Enter first name"
                    },
                    sort: true,
                },
                {
                    label: "Telefono",
                    name: "tlephone",
                    filter: {
                        type: "simple",
                        placeholder: "Enter first name"
                    },
                    sort: true,
                },
                {
                    label: "Celular",
                    name: "cellphone",
                    filter: {
                        type: "simple",
                        placeholder: "Enter first name"
                    },
                    sort: true,
                },
                {
                    label: "Email",
                    name: "email",
                    sort: true,
                },
                {
                    label: "Opciones",
                    name: "option",
                    sort: false,
                }

                ],
        config: {
                checkbox_rows: true,
                rows_selectable: true,
                card_title: "Regisro de Personas"
            }
    }),
    mounted()
    {
        console.log("cargando lista de personas");
    },
    components: {
        VueBootstrap4Table
    }
}
</script>
