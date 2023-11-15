import  { initializeApp } from 'firebase/app'
import { collection } from 'firebase/firestore'

// Your web app's Firebase configuration
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


//Inicalizamos el servidor 
const app = express()

const corsOptions = {
    origin: '*', 
    OptionSuccessStatus: 200
}

//MIDDLWARE 
app.use(cors(corsOptions))
app.use(express.json())