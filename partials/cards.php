<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  <script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<nav>

<div class="container" style="max-width: 100%; background-color: #f2f2f2;">
  <h2 class="cardtitle">Palvelut</h2>
  <div id="services-react"></div>
  <script type="text/babel">
    const Services = (props) => {
      const [show, toggleShow] = React.useState(true);
      return (
        <div class="services-subsection">
          <h3 onClick={() => toggleShow(!show)}>{props.otsikko} {show ? <img src="./images/arrow.png" id="arrow-style" alt="Smiley face" style={{transform : "rotate(-90deg)"}}/> :
          <img src="./images/arrow.png" id="arrow-style" alt="Smiley face" style={{transform : "rotate(90deg)"}}/>}</h3>
          {!show && <div><p>{props.teksti}</p> <NumberList numbers={props.lista} /></div>}
        </div>
      )
    }


    function NumberList(props) {
      const numbers = props.numbers;
      const listItems = numbers.map((number) => <li>{number}</li>);
      return (
        <ul>{listItems}</ul>
      );
    }

class ReactiveServices extends React.Component {
      constructor() {
        super();
        this.state = {
          width: window.innerWidth,
          tekstit: [{otsikko: "Rakennustarvikkeet",
          teksti: "Ruosteinen Rauta tarjoaa rakennustarvikkeet alan johtavilta merkeiltä nopeasti toimitettuna suoraan työmaalle. Ruosteisen Raudan Rakennustarvikkeet – palvelun avulla rakentaminen on helppoa ja edullista. Laadukkuus ja edullisuus ovat ominaisuuksia, joita ostajat odottavat rakennustarvikkeilta. Rakennustarvikkeet - valikoimasta löytyy paljon vaihtoehtoja pienempiin tai isompiin rakennus- tai remontointiprojekteihin.",
          lista: [
            "Perustustarvikkeet",
            "Rakennusmateriaalit",
            "Sähkötarvikkeet",
            "Ilmanvaihto",
            "Lämmitys",
            "LVI",
            "Työkalut ja tarvikkeet"]},
            {otsikko: "Sisustustarvikkeet",
            teksti: "Kun talo on rakennettu, voidaan keskittyä sisustamiseen. Me autamme sinua myös kaikissa sisustamiseen liittyvissä ratkaisuissa. Valikoimaamme kuuluu kaikki sisustukseen tarvittavat tuotteet ja ratkaisut, kuten keittiökalusteet, takat, tapetit, lattiapinnoitteet, laatat, koukut ja maalit.",
            lista: ["Keittiö",
                  "Kylpyhuone ja wc",
                  "Laatat | lattialaatat, seinälaatat, kuviolaatat",
                  "Lattiat | parketit, laminaatit, korkkilattiat, vinyylilattiat",
                  "Ovet",
                  "Kiukaat",
                  "Tapetit",
                  "Koukut naulakot ja hyllyt",
                  "Takat",
                  "Valaistus"]},
          {otsikko: "Piharakennus",
          teksti: "Laajasta valikoimastamme löydät kaiken tarvittavan pihan suunnitteluun ja rakentamiseen.",
          lista: ["Pihakivetys ja päällysteet",
          "Puutarhakalusteet ja tarvikkeet",
          "Kylpytynnyrit ja uima-altaat",
          "Pihavalaisimet"]},
          {otsikko: "Konevuokraus",
          teksti: "Vuokraamme laadukkaat ja turvalliset koneet erikokoisiin projekteihin yrityksille, yhteistyökumppaneille ja yksityisille rakentajille ja remontoijille. Varaa ja tilaa tarvitsemasi kone tai laite, kuljetamme koneen kohteeseen sovittuna ajankohtana. Esimerkkejä koneista ja laitteistamme:",
          lista: ["Henkilönostimet",
          "Nosto- ja siirtokalusto",
          "Maantiivistyskalusto",
          "Maansiirtokalusto",
          "Peräkärryt",
          "Avant",
          "Generaattorit"]},
          ]
        };
      }
      componentWillMount() {
        window.addEventListener('resize', this.handleWindowSizeChange);
      }
      // make sure to remove the listener
      // when the component is not mounted anymore
      componentWillUnmount() {
        window.removeEventListener('resize', this.handleWindowSizeChange);
      }
      handleWindowSizeChange = () => {
        this.setState({ width: window.innerWidth});
      };
      render() {
        const { width } = this.state;
        const isMobile = width <= 500;
        // the rest is the same...
        if (isMobile) {
          return (
            <div id="services-section">
              {this.state.tekstit &&
                this.state.tekstit.map((tekstit) => {
                  return (
                    <div id ="services-section">
                      <Services lista ={tekstit.lista} otsikko={tekstit.otsikko} teksti={tekstit.teksti}/>
                    </div>
                  );
                }
              )
            }
          </div>
        );
        } else {
          return (
            <div id = "services-section">
              {this.state.tekstit &&
                this.state.tekstit.map((tekstit) => {
                  return (
                    <div class="services-subsection">
                      <h3>{tekstit.otsikko}</h3>
                      <p>{tekstit.teksti}</p>
                      <NumberList numbers={tekstit.lista}/>
                    </div>
                  );
                }
              )
            }
          </div>
          );
        }
      }
    }
  ReactDOM.render(<ReactiveServices />, document.getElementById('services-react'));
</script>
</nav>
