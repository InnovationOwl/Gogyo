import {store} from '../store/index';

let header = {
  'Authorization': 'Bearer ' + process.env.MIX_API_TOKEN,
  'content-type': 'application/json',
  'Accept': 'application/json',
  'X-localization': 'en'
};

const sendGetRequest = (path, data, callback, errorCallback, finallyCallback) => {
  axios.get(process.env.MIX_API_HOST + path, data, header).then((response) => {
    callback(response);
  }).catch((error) => {
    errorCallback(error);
  }).finally(() => {
    finallyCallback();
  });
};

const sendPostRequest = (path, data, callback, errorCallback, finallyCallback) => {
  axios.post(process.env.MIX_API_HOST + path, data, header).then((response) => {
    callback(response);
  }).catch((error) => {
    errorCallback(error);
  }).finally(() => {
    finallyCallback();
  });
};

const sendPutRequest = (path, data, callback, errorCallback, finallyCallback) => {
  axios.put(process.env.MIX_API_HOST + path, data, header).then((response) => {
    callback(response);
  }).catch((error) => {
    errorCallback(error);
  }).finally(() => {
    finallyCallback();
  });
};

const sendDeleteRequest = (path, data, callback, errorCallback, finallyCallback) => {
  axios.delete(process.env.MIX_API_HOST + path, data, header).then((response) => {
    callback(response);
  }).catch((error) => {
    errorCallback(error);
  }).finally(() => {
    finallyCallback();
  });
};

const sendPatchRequest = (path, data, callback, errorCallback, finallyCallback) => {
  axios.patch(process.env.MIX_API_HOST + path, data, header).then((response) => {
    callback(response);
  }).catch((error) => {
    errorCallback(error);
  }).finally(() => {
    finallyCallback();
  });
};

export { sendGetRequest, sendPostRequest, sendPutRequest, sendDeleteRequest, sendPatchRequest };
