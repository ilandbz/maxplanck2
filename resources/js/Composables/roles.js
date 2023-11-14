import axios from 'axios'
import { ref } from 'vue'
import { getConfigHeader, getdataParamsPagination } from '@/Helpers'
export default function useRole() {
    const roles = ref([])
    const errors = ref('')
    const role = ref({})
    const respuesta = ref([])
    
    const obtenerRole = async(id) => {
        let respuesta = await axios.get('/role/mostrar?id='+id,getConfigHeader())
        role.value = respuesta.data
    }
    const listaRoles = async()=>{
        let respuesta = await axios.get('/role/todos',getConfigHeader())
        roles.value = respuesta.data        
    }
    const obtenerRoles = async(data) => {
        let respuesta = await axios.get('/role/listar' + getdataParamsPagination(data),getConfigHeader())
        roles.value =respuesta.data
    }
    const agregarRole = async(data) => {
        errors.value = ''
        try {
            let respond = await axios.post('/role/guardar',data,getConfigHeader())
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
    const actualizarRole = async(data) => {
        errors.value = ''
        try {
            let respond = await axios.post('/role/actualizar',data,getConfigHeader())
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
    const eliminarRole = async(id) => {
        const respond = await axios.post('/role/eliminar', {id:id},getConfigHeader())
        if(respond.data.ok==1)
        {
            respuesta.value = respond.data
        }
    }
    return {
        errors, roles, listaRoles, role, obtenerRole, obtenerRoles, 
        agregarRole, actualizarRole, eliminarRole, respuesta
    }
}