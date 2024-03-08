import Tablasor from "./Tablasor";

export default function Admin(props)
{
    return (
        <main>
            <header>
                <h1>Kizöldítjük a Földet!</h1>
            </header>
            <div>
                <form>
                    <select>{
                        props.osztalyok.map((osztaly, index) => (
                            <option key={index}>{osztaly}</option>
                        ))
                    }</select>
                    <select>{
                        props.tevekenysegek.map((tevekenyseg, index) => (
                            <option key={index}>{tevekenyseg.tevekenyseg_nev}</option>
                        ))
                    }</select>
                    <input type="submit"></input>
                </form>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Osztály</th>
                            <th>Tevékenység</th>
                            <th>Pont</th>
                            <th>Státusz</th>
                        </tr>
                    </thead>
                    <tbody>{
                        props.bejegyzesek.map((bejegyzes, index) => (
                            <Tablasor key={index} bejegyzes={bejegyzes}></Tablasor>
                        ))
                    }</tbody>
                </table>
            </div>
        </main>
    );
}