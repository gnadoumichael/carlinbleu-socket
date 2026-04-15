import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import NumberFormat from "../../fonctions/NumberFormat";
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    BarElement,
    Title,
    Tooltip,
    Legend,
} from 'chart.js';
import {Bar} from 'react-chartjs-2';
import moment from "moment";
import Moment from "react-moment";

ChartJS.register(
    CategoryScale,
    LinearScale,
    BarElement,
    Title,
    Tooltip,
    Legend
);


const Bilan = () => {
    const [chantiers, setChantiers] = useState([]);
    const fetchChantiers = async () => {
        const dde = JSON.parse($('#jsonchantiers').val());
        setChantiers(dde);
    };
    useEffect(() => {
        fetchChantiers();
    }, []);

    let coutJan = 0; let regleJan = 0; let depJan = 0;
    let coutFev = 0; let regleFev = 0; let depFev = 0;
    let coutMar = 0; let regleMar = 0; let depMar= 0;
    let coutAvr = 0; let regleAvr = 0; let depAvr = 0;
    let coutMai = 0; let regleMai = 0; let depMai = 0;
    let coutJun = 0; let regleJun = 0; let depJun = 0;
    let coutJul = 0; let regleJul = 0; let depJul = 0;
    let coutAou = 0; let regleAou = 0; let depAou = 0;
    let coutSep = 0; let regleSep = 0; let depSep = 0;
    let coutOct = 0; let regleOct = 0; let depOct = 0;
    let coutNov = 0; let regleNov = 0; let depNov = 0;
    let coutDec = 0; let regleDec = 0; let depDec = 0;

    const renderChantier = chantiers.map((chan) => {
        if(moment(chan.ddebut).format('M') === '1') {
            coutJan = coutJan + chan.cout;
            regleJan = regleJan + chan.reglement;
            depJan = depJan + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '2') {
            coutFev = coutFev + chan.cout;
            regleFev = regleFev + chan.reglement;
            depFev = depFev + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '3') {
            coutMar = coutMar + chan.cout;
            regleMar = regleMar + chan.reglement;
            depMar = depMar + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '4') {
            coutAvr = coutAvr + chan.cout;
            regleAvr = regleAvr + chan.reglement;
            depAvr = depAvr + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '5') {
            coutMai = coutMai + chan.cout;
            regleMai = regleMai + chan.reglement;
            depMai = depMai + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '6') {
            coutJun = coutJun + chan.cout;
            regleJun = regleJun + chan.reglement;
            depJun = depJun + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '7') {
            coutJul = coutJul + chan.cout;
            regleJul = regleJul + chan.reglement;
            depJul = depJul + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '8') {
            coutAou = coutAou + chan.cout;
            regleAou = regleAou + chan.reglement;
            depAou = depAou + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '9') {
            coutSep = coutSep + chan.cout;
            regleSep = regleSep + chan.reglement;
            depSep = depSep + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '10') {
            coutOct = coutOct + chan.cout;
            regleOct = regleOct + chan.reglement;
            depOct = depOct + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '11') {
            coutNov = coutNov + chan.cout;
            regleNov = regleNov + chan.reglement;
            depNov = depNov + chan.depense;
        }
        if(moment(chan.ddebut).format('M') === '12') {
            coutDec = coutDec + chan.cout;
            regleDec = regleDec + chan.reglement;
            depDec = depDec + chan.depense;
        }


        return (<>
            <tr key={chan.id}>
                <td>
                    <span className="col-pink"># {chan.client.nomclient}</span><br/>
                    <span className="col-black" style={{marginLeft:"10px"}}>{chan.nomchantier.toUpperCase()}</span>  => <Moment format="DD/MM/YYYY">{chan.ddebut}</Moment><br/>
                    <span className="ml30 col-blue-grey bolo700">Coût:  <NumberFormat numb={chan.cout}/></span><br/>
                    <span className="ml30 col-blue-grey bolo700">Règlement:  <NumberFormat numb={chan.reglement}/></span><br/>
                    <span className="ml30 col-blue-grey bolo700">Dépenses:  <NumberFormat numb={chan.depense}/></span><br/>
                </td>
            </tr>
        </>);
    });

    const options = {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Bilan des chantiers 2024' + ' - (' + chantiers.length + ' chantiers)',
            },
        },
    };
    const labels = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    let data = {
        labels,
        datasets: [
            {
                label: 'Coûts',
                data: [coutJan,coutFev,coutMar,coutAvr,coutMai,coutJun,coutJul,coutAou,coutSep,coutOct,coutNov,coutDec],
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
            },
            {
                label: 'Règlements',
                data: [regleJan,regleFev,regleMar,regleAvr,regleJun,regleJul,regleAou,regleSep,regleOct,regleNov,regleDec],
                backgroundColor: 'rgba(53, 162, 235, 0.5)',
            },
            {
                label: 'Dépenses',
                data: [depJan,depFev,depMar,depAvr,depJun,depJul,depAou,depSep,depOct,depNov,depDec],
                backgroundColor: 'rgb(33,180,23)',
            },
        ],
    };



    return (<>
        <div className="col-md-12">
            <Bar options={options} data={data}/>
        </div>
        <div className="col-md-4" style={{overflow: "scroll", height: "350px", marginTop:"50px"}}>

            <h5><span className="bolo700 col-blue"># JANVIER 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutJan}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleJan}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depJan}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># FÉVRIER 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutFev}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleFev}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depFev}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># MARS 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutMar}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleMar}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depMar}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># AVRIL 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutAvr}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleAvr}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depAvr}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># MAI 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutMai}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleMai}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depMai}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># JUIN 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutJun}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleJun}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depJun}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># JUILLET 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutJul}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleJul}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depJul}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># AOÛT 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutAou}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleAou}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depAou}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># SEPTEMBRE 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutSep}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleSep}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depSep}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># OCTOBRE 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutOct}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleOct}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depOct}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># NOVEMBRE 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutNov}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleNov}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depNov}/></span><br/>
            </h5>
            <h5><span className="bolo700 col-blue"># DÉCEMBRE 2024:</span><br/>
                <b className="ml30">Coût:</b> <span className="badge badge-danger"><NumberFormat numb={coutDec}/></span><br/>
                <b className="ml30">Règlements:</b> <span className="badge badge-success"><NumberFormat numb={regleDec}/></span><br/>
                <b className="ml30">Dépenses:</b> <span className="badge badge-info"><NumberFormat numb={depDec}/></span><br/>
            </h5>


        </div>
        <div className="col-md-8" style={{overflow: "scroll", height: "350px", marginTop:"50px"}}>
            <h5><b className="col-blue">LA LISTE DES CHANTIERS</b></h5>
            {renderChantier}
        </div>
        <br/><br/><br/><br/><br/><br/>
    </>);
}

try {
    const root = createRoot(document.getElementById('setBilan'));
    root.render(<Bilan/>);
} catch (e) {
}