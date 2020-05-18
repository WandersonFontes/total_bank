import { http } from './config'
export default{
    listar:()=>{
        return http.get('banco')
    },
    salvar:(conta)=>{
        return http.post('banco',conta)
    },
    atualizar:(conta)=>{
        return http.put('banco', conta)
    },
    apagar:(conta)=>{
        return http.delete('banco', conta(this.contas))
    }
}
