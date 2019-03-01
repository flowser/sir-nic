
//permission

const state = {
    servicemodels:[],
    servicemodelsbyservid:[],
    singleservicemodel:[],
<<<<<<< HEAD
    latestServiceModels:[],
=======
    latestservicemodels:[],
>>>>>>> everything ll set before we run nm run production
  },
  getters = {
    ServiceModels(state){
      return state.servicemodels; //by loggedin or not all service models bydefault or by service id
    },
    SingleServiceModel(state){
        return state.singleservicemodel;
    },
<<<<<<< HEAD
    latestServiceModels(state){
        return state.latestServiceModels;
=======
    ServiceModelsbyServID(state){
        return state.servicemodelsbyservid;
    },
    LatestServiceModels(state){
        return state.latestservicemodels;
>>>>>>> everything ll set before we run nm run production
    },
  }
const actions = {
    servicemodels(context){
        axios.get('/servicemodel/get')//based on authethicated id
        .then((response)=>{
          console.log('chionsi',response.data);
          context.commit('servicemodels', response.data.servicemodels); //all service models logged in
        });
    },
    ServiceModelById(context, payload){
        axios.get('/servicemodel/show/'+payload)
              .then((response)=>{
<<<<<<< HEAD
                  context.commit('singleservicemodel', response.data.singleservicemodel);
=======
                  context.commit('singleservicemodel', response.data.singleservicemodel);//view one
>>>>>>> everything ll set before we run nm run production
              });
    },
    ServiceModelsByServiceID(context, payload){
        console.log('thispayload',payload)
        axios.get('/servicemodel/fetch/'+payload)
        .then((response)=>{
            console.log('inche', response.data.servicemodels);
            context.commit('servicemodelsbyservid', response.data.servicemodels);//loged in gets all servicemodels based by service id
        });
    },
    SearchServiceModel(context, payload){
        axios.get('/servicemodel/search?s='+payload)
            .then((response)=>{
                console.log(response.data)
                context.commit('SearchServiceModels', response.data.servicemodels)
            })
    },
    LatestServiceModels(context){
        axios.get('/servicemodel/latest/')
        .then((response)=>{
            console.log( response.data);
            context.commit('LatestServiceModels', response.data.servicemodels);
        });
    },
    LatestServiceModelsByServiceID(context, payload){
        console.log('laid',payload)
        axios.get('/servicemodel/fetch/latest/'+payload)
        .then((response)=>{
            console.log('latest by service i', response.data);
            context.commit('LatestServiceModels', response.data.servicemodels);//loged in gets all servicemodels based by service id
        });
    },
<<<<<<< HEAD
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
=======
>>>>>>> everything ll set before we run nm run production
  }

const mutations = {
    servicemodels(state, data){
      return state.servicemodels = data;
    },
    singleservicemodel(state, data){
      return state.singleservicemodel = data;
    },
<<<<<<< HEAD
    servicemodelsbyid(state, data){
        return state.servicemodelsbyid = data;
    },
    latestServiceModels(state, data){
      return state.latestServiceModels = data;
    },
    SearchServiceModels(state, data){
      return state.servicemodels = data;
    },
=======
    servicemodelsbyservid(state, data){
      return state.servicemodelsbyservid = data;
    },
    SearchServiceModels(state, data){
      return state.servicemodelsbyservid = data;
    },
    LatestServiceModels(state, data){
        return state.latestservicemodels = data;
      },
>>>>>>> everything ll set before we run nm run production
  }

export default {
  // namespaced: true,
  state,
  getters,
  actions,
  mutations
}




