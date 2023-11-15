// Conexion con firebase
import { initializeApp } from "firebase/app";

const firebaseConfig = {
    apiKey: "AIzaSyBs_WTJG1Sa5nxvppOat3VIFFNni-3KQKA",
    authDomain: "tienda-bf269.firebaseapp.com",
    projectId: "tienda-bf269",
    storageBucket: "tienda-bf269.appspot.com",
    messagingSenderId: "881010365281",
    appId: "1:881010365281:web:49c277d711cdb1be416b20"
};
 
// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Creación de rutas