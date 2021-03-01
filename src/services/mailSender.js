import axios from 'axios';
import config from '../../config/config.json';

const sendGrid = axios.create({
  baseURL: 'https://api.sendgrid.com/v3',
  withCredentials: true,
  headers: {
    'Access-Control-Allow-Origin': '*',
    'content-type': 'application/json',
    authorization: `${config.sendgrid.apiKey}`,
  },
});

const data = JSON.stringify({
  personalizations: [
    {
      to: [
        {
          email: 'kubektkd@gmail.com',
          name: 'John Doe',
        },
      ],
      subject: 'Hello, World!',
    },
  ],
  from: {
    email: 'noreply@johndoe.com',
    name: 'John Doe',
  },
  reply_to: {
    email: 'noreply@johndoe.com',
    name: 'John Doe',
  },
  content: [
    {
      type: 'text/html',
      value: '<strong>Test email!</strong>',
    },
  ],
});

// sendGrid.interceptors.request.use(request => {
//   request.headers['x-voo-jsessionid'] = store.getters.getLoginToken;
//   return request;
// });

export default {
  send() {
    console.log('poszło :)');
    return sendGrid.post('/mail/send', data);
  },
  sendEvent(params) {
    return sendGrid.post('/systemevent?method=POST', params);
  },
};
