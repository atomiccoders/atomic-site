import WindowInstanceMap from './windowInstanceMap.js';
import config from '../config/config.json';
import firebase from 'firebase/app';
import 'firebase/database';

const db = firebase
  .initializeApp({ databaseURL: 'https://atomicsite.firebaseio.com' })
  .database();

class Utils {
  static isMobile() {
    return WindowInstanceMap.windowWidth <= 600;
  }
  static getConfig() {
    return config;
  }
  static getFirebaseData(table) {
    return db.ref(table);
  }
  static getPost(slug) {
    return db
      .ref('posts')
      .orderByChild('slug')
      .equalTo(slug);
  }
  static getFbShareLink(link) {
    return `https://www.facebook.com/dialog/share?app_id=${config.sharingSettings.fbAppId}&display=popup&href=https%3A%2F%2F${config.sharingSettings.baseURL}${link}%2F&redirect_uri=https%3A%2F%2F${config.sharingSettings.baseURL}${link}%2F`;
  }
  static getTwShareLink(link) {
    return `https://twitter.com/intent/tweet?url=https%3A%2F%2F${config.sharingSettings.baseURL}${link}%2F`;
  }
}

export default Utils;
