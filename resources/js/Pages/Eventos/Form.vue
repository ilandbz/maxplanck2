<script setup>
import { toRefs, onMounted } from 'vue';
import useEvento from '@/Composables/eventos.js';
import useHelper from '@/Helpers';  
const { hideModal, Toast, slugify } = useHelper();
const props = defineProps({
    form: Object,
    currentPage : Number
});
const { form, currentPage } = toRefs(props)
const {
    errors, respuesta, agregarEvento, actualizarEvento
} = useEvento();
const  emit  =defineEmits(['onListar'])
const crud = {
    'nuevo': async() => {
        form.value.contenido= $('.note-editable').html();
        await agregarEvento(form.value)
        form.value.errors = []
        if(errors.value)
        {
            form.value.errors = errors.value
        }
        if(respuesta.value.ok==1){
            form.value.errors = []
            hideModal('#modalevento')
            Toast.fire({icon:'success', title:respuesta.value.mensaje})
            emit('onListar', currentPage.value)
        }
    },
    'editar': async() => {
        form.value.contenido= $('.note-editable').html();
        await actualizarEvento(form.value)
        form.value.errors = []
        if(errors.value)
        {
            form.value.errors = errors.value
        }
        if(respuesta.value.ok==1){
            form.value.errors = []
            hideModal('#modalevento')
            Toast.fire({icon:'success', title:respuesta.value.mensaje})
            emit('onListar', currentPage.value)
        }
    }
}
const guardar = () => {
    crud[form.value.estadoCrud]()
}

</script>
<template>
    <form @submit.prevent="guardar">
    <div class="modal fade" id="modalevento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modaleventoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modaleventoLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Titulo</label>
                                <input type="text" class="form-control" v-model="form.titulo" :class="{ 'is-invalid': form.errors.titulo }" placeholder="Titulo" @keyup="form.slug=slugify(form.titulo)">
                                <small class="text-danger" v-for="error in form.errors.titulo" :key="error">{{ error
                                        }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="Subtitulo" class="form-label">Subtitulo</label>
                                <input type="text" class="form-control" v-model="form.subtitulo" :class="{ 'is-invalid': form.errors.subtitulo }" placeholder="Subtitulo">
                                <small class="text-danger" v-for="error in form.errors.subtitulo" :key="error">{{ error
                                        }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="lugar" class="form-label">Lugar</label>
                                <input type="text" class="form-control" v-model="form.lugar" :class="{ 'is-invalid': form.errors.lugar }" placeholder="Lugar">
                                <small class="text-danger" v-for="error in form.errors.lugar" :key="error">{{ error
                                        }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="text" class="form-control" v-model="form.fecha" :class="{ 'is-invalid': form.errors.fecha }" placeholder="Fecha">
                                <small class="text-danger" v-for="error in form.errors.fecha" :key="error">{{ error
                                        }}</small>
                            </div>                               
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input class="form-control" type="file" accept="image/*" @change="cambiarImagen">
                                <div class="card">
                                    <img id="inputImagen" :src="form.imagen" class="img-fluid img-thumbnail">
                                </div>
                                <small class="text-danger" v-for="error in form.errors.imagen" :key="error">{{ error }}<br></small>
                            </div>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido</label>
                                <textarea id="summernote" v-model="form.contenido" class="form-control" :class="{ 'is-invalid': form.errors.contenido }" rows="10"></textarea>
                                <small class="text-danger" v-for="error in form.errors.contenido" :key="error">{{ error
                                        }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ (form.estadoCrud=='nuevo') ? 'Guardar' : 'Actualizar' }}</button>
                </div>
            </div>
        </div>
    </div>
    </form>



</template>