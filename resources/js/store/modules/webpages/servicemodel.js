
//permission

const state = {
    servicemodel:[],
    servicemodels:[],
    servicemodelsbyid:[],
    singleservicemodel:[],
  },
  getters = {
    ServiceModel(state){
      return state.servicemodel;
    },
    ServiceModels(state){
      return state.servicemodels;
    },
    ServiceModelsById(state){
      return state.servicemodelsbyid;
    },
    SingleServiceModel(state){
        return state.singleservicemodel;
    },
  }
const actions = {
    servicemodel(context){
        axios.get('/servicemodel/get')//based on authethicated id
        .then((response)=>{
          console.log(response.data);
          context.commit('servicemodel', response.data.servicemodel); //based on authethicated id
        });
    },
    servicemodels(context){
        axios.get('/servicemodels/get')
        .then((response)=>{
        //   console.log(response.data.servicemodels);
          context.commit('servicemodels', response.data.servicemodels);
        });
    },
    ServiceModelById(context, payload){
        axios.get('/servicemodel/show/'+payload)
              .then((response)=>{
                  console.log('ffffffffffff');
                  context.commit('singleservicemodel', response.data.singleservicemodel);
              });
    },
    ServiceModelsByServiceId(context, payload){
        axios.get('/servicemodel/get/'+payload)
        .then((response)=>{
            console.log( response.data.servicemodelsbyid);
            context.commit('servicemodelsbyid', response.data.servicemodelsbyid);
        });
    }
  }

const mutations = {
    servicemodel(state, data){
      return state.servicemodel = data;
    },
    servicemodels(state, data){
      return state.servicemodels = data;
    },
    singleservicemodel(state, data){
      return state.singleservicemodel = data;
    },
    servicemodelsbyid(state, data){
        return state.servicemodelsbyid = data;
      },
  }

export default {
  // namespaced: true,
  state,
  getters,
  actions,
  mutations
}




