import './App.css';
import Admin from './komponensek/Admin';
import axios from 'axios';
import { useEffect, useState } from 'react';

function App()
{
  const [tevekenysegek, setTevekenysegek] = useState([]);
  const [bejegyzesek, setBejegyzesek] = useState([]);
  useEffect(() => {
    axios
      .get("http://localhost:8000/api/tevekenysegek")
      .then(response => {
        setTevekenysegek(response.data);
      })
      .catch(console.error)
    ;
    axios
      .get("http://localhost:8000/api/bejegyzesekTevekenysegekkel")
      .then(response => {
        setBejegyzesek(response.data);
      })
      .catch(console.error)
    ;
  }, []);
  return (
    <div className="App">
      <Admin
        osztalyok={[
          "12a",
          "12b",
          "12c",
          "11a",
          "11b",
          "11c",
          "10a",
          "10b",
          "10c",
        ]}
        tevekenysegek={tevekenysegek}
        bejegyzesek={bejegyzesek}
      ></Admin>
    </div>
  );
}

export default App;
