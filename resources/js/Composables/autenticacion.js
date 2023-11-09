import axios from 'axios';
import { ref,provide } from 'vue';
import useHelper from '@/Helpers';


export const useAutenticacion = () => {
    const errors = ref('');
    const {Swal } = useHelper();
    const loginUsuario = async (data) => {
        errors.value = ''
        try {
            const respuesta = await axios.post('login',data)
            if(respuesta.data)
            {
                // Swal.fire({
                //     position: 'center',
                //     icon: 'success',
                //     title: 'Acceso Correcto',
                //     showConfirmButton: false,
                //     timer: 1500
                // })
                localStorage.setItem('userSession',respuesta.data);
                window.location.href = 'principal';
            }
        } catch (error) {
            if(error.response.status === 422){
                errors.value = error.response.data.errors
            }
        }
    }

    const logoutUsuario = async() => {
        const respuesta = await axios.post('/logout')
        if(respuesta.data.ok==1)
        {
            localStorage.removeItem('userSession')
            window.location.href="/intranet/login"
        }
    }

    const obtenerMarcaciones = async() => {
        const respuesta = await axios.get('api/attendances')

        if(respuesta.data)
        {
            console.log(respuesta.data)
        }
    }

    return {
        errors, loginUsuario, logoutUsuario, obtenerMarcaciones
    }

}
