// api.js
import axios from 'axios';

const api = axios.create({
  baseURL: 'http://your-laravel-backend-url/api', // Replace with your Laravel API URL
});

export default api;
