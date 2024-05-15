import axios from 'axios'
import { ref } from 'vue'
import { getConfigHeader, getdataParamsPagination } from '@/Helpers'
export default function useEvento() {
    const eventos = ref([])
    const errors = ref('')
    const evento = ref({})
    const respuesta = ref([])
    
    const obtenerEvento = async(id) => {
        let respuesta = await axios.get('/evento/mostrar?id='+id,getConfigHeader())
        evento.value = respuesta.data
    }
    const listaEventos = async()=>{
        let respuesta = await axios.get('/evento/todos',getConfigHeader())
        eventos.value = respuesta.data        
    }
    const obtenerEventos = async(data) => {
        let respuesta = await axios.get('/evento/listar' + getdataParamsPagination(data),getConfigHeader())
        eventos.value =respuesta.data
    }
    const agregarEvento = async(data) => {
        errors.value = ''
        try {
            let respond = await axios.post('/evento/guardar',data,getConfigHeader())
            errors.value =''
            if(respond.data.ok==1){
                respuesta.value=respond.data
            }
        } catch (error) {
            errors.value=""
            if(error.response.status === 422) {
                errors.value = error.response.data.errors
            }
        }
    }
    const actualizarEvento = async(data) => {
        errors.value = ''
        try {
            let respond = await axios.post('/evento/actualizar',data,getConfigHeader())
            errors.value =''
            if(respond.data.ok==1){
                respuesta.value=respond.data
            }

        } catch (error) {
            errors.value=""
            if(error.response.status === 422) {
                errors.value = error.response.data.errors
            }
        }
    }
    const eliminarEvento = async(id) => {
        const respond = await axios.post('/evento/eliminar', {id:id},getConfigHeader())
        if(respond.data.ok==1)
        {
            respuesta.value = respond.data
        }
    }
    return {
        errors, eventos, listaEventos, evento, obtenerEvento, obtenerEventos, 
        agregarEvento, actualizarEvento, eliminarEvento, respuesta
    }
}