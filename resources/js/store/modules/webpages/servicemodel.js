
//permission

const state = {
    servicemodel:[],
    servicemodels:[],
    servicemodelsbyid:[],
    singleservicemodel:[],
    latestServiceModels:[],
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
    latestServiceModels(state){
        return state.latestServiceModels;
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
                  context.commit('singleservicemodel', response.data.singleservicemodel);
              });
    },
    ServiceModelsByServiceId(context, payload){
        axios.get('/servicemodel/get/'+payload)
        .then((response)=>{
            console.log( response.data.servicemodelsbyid);
            context.commit('servicemodelsbyid', response.data.servicemodelsbyid);
        });
    },
    latestServiceModels(context){
        axios.get('/servicemodel/latest/')
        .then((response)=>{
            console.log( response.data);
            context.commit(' latestServiceModels', response.data.ervicemodels);
        });
    },
    SearchServiceModel(context, payload){
        axios.get('/blogcourse/courses/search?s='+payload)
            .then((response)=>{
                console.log(response.data)
                context.commit('SearchServiceModels', response.data.servicemodels)
            })
      },
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
    latestServiceModels(state, data){
      return state.latestServiceModels = data;
    },
    SearchServiceModels(state, data){
      return state.servicemodels = data;
    },
  }

export default {
  // namespaced: true,
  state,
  getters,
  actions,
  mutations
}




