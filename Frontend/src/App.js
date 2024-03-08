import './App.css';
import Admin from './komponensek/Admin';
import axios from 'axios';
import { useState } from 'react';

function App()
{
  const [tevekenysegek, setTevekenysegek] = useState([]);
  axios
    .get("http://localhost:8000/api/tevekenysegek")
    .then(response => {
      setTevekenysegek(response.data);
    })
    .catch(console.error)
  ;
  return (
    <div className="App">
      <Admin osztalyok={[
        "12a",
        "12b",
        "12c",
        "11a",
        "11b",
        "11c",
        "10a",
        "10b",
        "10c",
      ]} tevekenysegek={tevekenysegek}></Admin>
    </div>
  );
}

export default App;
