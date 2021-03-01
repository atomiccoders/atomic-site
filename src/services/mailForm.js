import axios from 'axios';
// import config from '../../config/config.json';
import querystring from 'querystring';

const mail = axios.create({
  baseURL: 'https://atomiccode.pl',
  // withCredentials: true,
  headers: {
    'content-type': 'application/x-www-form-urlencoded',
  },
});

// sendGrid.interceptors.request.use(request => {
//   request.headers['x-voo-jsessionid'] = store.getters.getLoginToken;
//   return request;
// });

export default {
  send(params) {
    params.ticketId = Math.random()
      .toString(16)
      .slice(2);
    console.log('Params', querystring.stringify(params));
    return mail.post('/mail.php?method=POST', querystring.stringify(params));
  },
};
