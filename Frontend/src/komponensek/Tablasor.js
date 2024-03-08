export default function Tablasor(props)
{
    return (
        <tr>
            <td>{props.bejegyzes.osztaly_id}</td>
            <td>{props.bejegyzes.tevekenyseg_nev}</td>
            <td>{props.bejegyzes.pontszam}</td>
            <td>{props.bejegyzes.allapot === 0 ? "jóváhagyásra vár" : "elfogadva"}</td>
        </tr>
    );
}