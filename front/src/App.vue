<template>
  <div id="app">

    <nav>
      <div class="nav-wrapper blue darken-1">
        <a href="#" class="brand-logo center">Banco Total</a>
      </div>
    </nav>

    <div class="container">
      <form @submit.prevent="salvar">

          <label>Nome</label>
          <input type="text" placeholder="Insira seu nome" v-model="conta.cliente">
          <label>Conta</label>
          <input type="number" placeholder="Insira o número da sua conta" v-model="conta.conta" >
          <label>Saldo</label>
          <input type="text" placeholder="Valor" v-model="conta.saldo">

          <button class="waves-effect waves-light btn-small">Salvar<i class="material-icons left">save</i></button>

      </form>

      <table>

        <thead>

          <tr>
            <th>NOME</th>
            <th>CONTA</th>
            <th>SALDO</th>
            <th>OPÇÕES</th>
          </tr>

        </thead>

        <tbody>

          <tr v-for="conta of contas" :key="conta.id">

            <td>{{ conta.cliente }}</td>
            <td>{{ conta.conta }}</td>
            <td>{{ conta.saldo }}</td>
            <td>
              <button @click="editar(conta)" class="waves-effect btn-small blue darken-1"><i class="material-icons">create</i></button>
              <button @click="remover(conta)" class="waves-effect btn-small red darken-1"><i class="material-icons">delete_sweep</i></button>
            </td>

          </tr>

        </tbody>
      
      </table>

    </div>

  </div>
</template>

<script>

import Contas from './services/conta'

export default {
  name: 'app',
  data(){
    return{
      conta:{
        id:'',
        cliente:'',
        conta:'',
        saldo:''

            },
      contas: [],
      errors: []
    }
  },

  mounted(){
    this.listar()
  },

  methods:{
    
    listar(){
      Contas.listar().then(resposta => {
        console.log(resposta.data)
        this.contas = resposta.data
      })
    },

    salvar(){

      if(!this.conta.id){

        Contas.salvar(this.conta).then()
          this.contas = {}
          alert('Cadastrado com sucesso!')
          this.listar()
          this.errors = {}

      }else{

        Contas.atualizar(this.conta).then()
          this.contas = {}
          this.errors = {}
          alert('Atualizado com sucesso!')
          this.listar()
      }
      

    },

    editar(contas){
      this.conta = contas
      window.scrollTo(0, 0); 
    },

    remover(conta){

      if(confirm('Deseja excluir o produto?')){

        Contas.apagar(conta).then()
          //this.contas.splice(this.conta)
          this.listar()
          this.errors = {}
      }

    }
  }

}
</script>

<style>

</style>
