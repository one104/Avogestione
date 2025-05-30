<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/homePage.css">
    <title>Avogestione</title>
</head>
<body>
<div class="header">
    <div class="regione">
        <h1>Ministero dell'Istruzione e del Merito</h1>
        <?php if (!isset($_SESSION["id"])): ?>
            <a href="index.php?action=login"><input type="submit" value="Login"></a>
            <a href="index.php?action=register"><input type="submit" value="Register"></a>
        <?php else: ?>
            <a href="index.php?action=logout"><input type="submit" value="Logout"></a>
        <?php endif; ?>
    </div>
    <div class="img">
        <img src="icon/logo.jpeg" alt="Logo Avogadro">
    </div>
    <div class="secondo">
        <h1>Autogestione Avogadro</h1>
    </div>

    <div class="social-container">
        <a href="https://www.facebook.com/p/IIS-Amedeo-Avogadro-Torino-100072315053776/" target="_blank"><img
                    src="icon/fb.jpg" alt="Facebook"></a>
        <a href="https://www.instagram.com/avogadro_torino_official/" target="_blank"><img src="icon/ig.jpg"
                                                                                           alt="Instagram"></a>
        <a href="https://www.youtube.com/channel/UCCp9YoDfdV1GMUwQtlNVz9w" target="_blank"><img src="icon/yb.jpg"
                                                                                                alt="Youtube"></a>
    </div>
    <br><br>
    <div class="argomenti">
        <a href="http://www.comune.torino.it/#NotizieUffici" target="_blank">Tutti gli argomenti</a>
        <a href="http://www.comune.torino.it/#NotizieUffici" target="_blank">Amministrazione</a>
        <a href="http://www.comune.torino.it/#NotizieUffici" target="_blank">Servizi</a>
        <a href="http://www.comune.torino.it/#NotizieUffici" target="_blank">Novità</a>
        <a href="http://www.comune.torino.it/albopretorio/" target="_blank">Documenti e dati</a>
        <form action="#">
            <input type="text" name="query" placeholder="Cerca...">
            <input type="submit" value="Cerca">
        </form>

    </div>
</div>
<br><br>
<article>
    <div class="article">
        <div class="img">
            <img src="to1.png" alt="Immagine 1">
        </div>
        <div class="img">
            <img src="to.png" alt="Immagine 2">
        </div>
        <div class="img">
            <img src="to2.png" alt="Immagine 3">
        </div>
    </div>
    <br><br>
    <div class="eventi">
        <h1>Eventi e News</h1><br>
    </div>
    <br><br>
    <div class="container">
        <div class="box">
            <h1><b>Limitazioni alla circolazione veicolare: FINO A VENERDÌ 6 OTTOBRE attivo il livello 0</b></h1><br>
            <p> Attive le sole limitazioni strutturali. Oltre alle limitazioni valide tutto l'anno fermi dalle 8 alle 19
                i veicoli Diesel Euro 3 e 4 nei giorni feriali (dal lunedì al venerdì) e per tutto il giorno i
                ciclomotori Euro 0 e 1.
            <p>
                <a href="http://www.comune.torino.it/emergenzaambientale/" target="_blank"><b>Per maggiori
                        informazioni</b></a>
        </div>
        <div class="box">
            <h1><b>Censimento permanente della popolazione e delle abitazioni</b></h1><br>
            <p>L'Istituto Nazionale di Statistica (Istat) tra i mesi di Ottobre e Dicembre 2023 condurrà il Censimento
                permanente della popolazione e delle abitazioni che dal 2018 ha assunto una cadenza annuale anziché
                decennale. Il Censimento sarà realizzato mediante l'utilizzo di rilevazioni statistiche campionarie
                presso le famiglie.
                L'Istat è tenuto per legge a svolgere queste rilevazioni e le famiglie coinvolte sono obbligate a
                partecipare fornendo i dati richiesti, ai sensi degli artt. 7 e 11 del D.lgs 6 settembre 1989 n. 322 ai
                rilevatori autorizzati muniti di tesserino di riconoscimento o di tablet.</p>
            <a href="http://www.comune.torino.it/statistica/" target="_blank"><b>Per maggiori informazioni</b></a>
        </div>
        <div class="box">
            <h1><b>Anagrafi decentrate circoscrizione 6</b></h1><br>
            <p>Sono riaperte le sedi anagrafiche decentrate di piazza Astengo 7 e via Leoncavallo 17 per il rilascio
                della Carta d'Identità Elettronica e di certificati.<br>
                I residenti della circoscrizione 6 possono prenotarsi per accedere agli sportelli esclusivamente tramite
                il servizio di "Anagrafe Itinerante" presente il mercoledì in piazza Astengo e il venerdì in via
                Leoncavallo, con orario: 9-12.<br>
                L'anagrafe di piazza Astengo è aperta tutti i lunedì e i martedì dalle ore 9 alle ore 15, quella di via
                Leoncavallo tutti i mercoledì e i giovedì con i medesimi orari.
            <p>
                <a href="http://www.comune.torino.it/anagrafe/" target="_blank"><b>Per maggiori informazioni</b></a>
        </div>
        <div class="box">
            <h1><b>Albo dei componenti del Collegio Consultivo Tecnico</b></h1><br>
            <p>L'articolo 6, comma 1, della L. 120 dell'11 settembre 2020 ha introdotto l'obbligo per le stazioni
                appaltanti di costituire un collegio consultivo tecnico per i lavori diretti alla realizzazione delle
                opere pubbliche, anche già avviati, di importo pari o superiore alle soglie di rilevanza europea.<br>
                La Città di Torino intende acquisire le candidature qualificate per la costituzione di un apposito Albo
                al fine di procedere, sulla base delle richieste di volta in volta avanzate dai RUP, alle designazioni
                ed alle nomine dei componenti del collegio.<br>
                A partire dal 23 marzo 2023 gli interessati, in possesso dei requisiti richiesti, potranno presentare la
                candidatura con le modalità indicate. <br>
                <a href="http://bandi.comune.torino.it/bando/avviso-pubblico-costituzione-dellelenco-componenti-collegio-consultivo-tecnico"
                   target="_blank"><b>Per maggiori informazioni</b></a>
        </div>
    </div>
    <br><br>
    <div class="eventi">
        <h1>In evidenza</h1><br>
    </div>
    <br><br>
    <div class="iframe">
        <iframe src="https://www.3bmeteo.com/meteo/torino" frameborder="0"></iframe>
        <iframe src="https://www.visitaretorino.it/torino-eventi.php" frameborder="0"></iframe>
    </div>
    <br>
    <div class="cal">
        <img src="cal.jpg" alt="Calendario scolastico 2023/2024">
    </div>
    <br><br>
    <div class="eventi">
        <h1>Le circoscrizioni</h1>
    </div>
    <br><br>
    <div class="contenitore">
        <div class="circos">
            <ol>
                <li>Centro - Crocetta</li>
                <li>Santa Rita - Mirafiori Nord - Mirafiori Sud</li>
                <li>San Paolo - Cenisia - Pozzo Strada - Cit Turin - Borgata Lesna</li>
                <li>San Donato - Campidoglio - Parella</li>
                <li>Borgo Vittoria - Madonna di Campagna - Lucento - Vallette</li>
                <li>Barriera di Milano - Regio Parco - Barca - Bertolla - Falchera - Rebaudengo - Villaretto</li>
                <li>Aurora - Vanchiglia - Sassi - Madonna del Pilone</li>
                <li>San Salvario - Cavoretto - Borgo Po - Nizza Millefonti - Lingotto - Filadelfia</li>
            </ol>
        </div>
        <div class="immagine">
            <img src="turin.jpg">
        </div>
    </div>
</article>
<br><br>
<footer>
    <div class="img">
        <img src="stemma.png" alt="Immagine di Torino">
    </div>
    <div class="secondo">
        <h1>Città di Torino</h1>
    </div>
    <div class="social-container">
        <a href="https://www.instagram.com/cittaditorino/" target="_blank"><img src="icon/fb.jpg" alt="Facebook"></a>
        <a href="https://twitter.com/twitorino" target="_blank"><img src="icon/tw.jpg" alt="Twitter"></a>
        <a href="https://www.instagram.com" target="_blank"><img src="icon/ig.jpg" alt="Instagram"></a>
        <a href="https://www.youtube.com/@YouTorino" target="_blank"><img src="icon/yb.jpg" alt="Youtube"></a>
    </div>
    <br><br>
    <table class="tabella">
        <tr>

            <td><b>AMMINISTRAZIONE</b></td>
            <td><b>SERVIZI</b></td>
            <td><b>NOVITA'</b></td>
            <td><b>DOCUMENTI E DATI</b></td>
        </tr>

        <tr>

            <td><a href="https://servizi.comune.torino.it/consiglio/prg/txt/ComposizioneConsiglio.html" target="_blank">Organi
                    di governo</a></td>
            <td><a href="http://www.comune.torino.it/anagrafe/" target="_blank">Anagrafe e stato civile</a></td>
            <td><a href="http://www.comune.torino.it/" target="_blank">Notizie</a></td>
            <td><a href="http://www.comune.torino.it/albopretorio/" target="_blank">Documenti albo pretorio</a></td>

        </tr>

        <tr>

            <td><a href="http://www.comune.torino.it/decentr/" target="_blank">Aree amministrative</a></td>
            <td>
                <a href="http://www.comune.torino.it/servizionline/schede/userTorinoE.php?context=torinoE&submitAction=homeIndice&id=443&idRoot=134&refLanguage=it"
                   target="_blank">Cultura e tempo libero</a></td>
            <td><a href="http://www.comune.torino.it/ucstampa/" target="_blank">Comunicati stampa</a></td>
            <td><a href="http://www.comune.torino.it/amministrazionetrasparente/generali/atti/index.shtml"
                   target="_blank">Atti normativi</a></td>

        </tr>

        <tr>

            <td><a href="http://www.comune.torino.it/filodiretto.shtml" target="_blank">Uffici</a></td>
            <td><a href="http://www.comune.torino.it/torinogiovani/vivere-a-torino" target="_blank">Vita lavorativa</a>
            </td>
            <td></td>
            <td><a href="http://www.comune.torino.it/bandi/" target="_blank">Bandi e avvisi</a></td>

        </tr>

        <tr>

            <td><a href="hhttp://www.comune.torino.it/giunta/enti/enti-citta/index.shtml" target="_blank">Enti e
                    fondazioni</a></td>
            <td><a href="http://www.comune.torino.it/commercioeimpresa/" target="_blank">Attività produttive e
                    commercio</a></td>
            <td></td>
            <td><a href="http://www.comune.torino.it/servizionline/" target="_blank">Modulistica</a></td>

        </tr>

        <tr>

            <td>
                <a href="https://trasparenza.cittametropolitana.torino.it/organizzazione/titolari-incarichi-politici-amministrazione-direzione-governo"
                   target="_blank">Politici</a></td>
            <td><a href="http://www.comune.torino.it/bandi/" target="_blank">Appalti pubblici</a></td>
            <td></td>
            <td><a href="http://www.comune.torino.it/albopretorio/" target="_blank">Documenti tecnici e di supporto</a>
            </td>

        </tr>

        <tr>

            <td><a href="http://www.comune.torino.it/" target="_blank">Personale amministrativo</a></td>
            <td><a href="http://www.comune.torino.it/catasto/" target="_blank">Catasto e urbanistica</a></td>
            <td></td>
            <td><a href="http://www.comune.torino.it/albopretorio/" target="_blank">Documenti di programmazione</a></td>

        </tr>
    </table>
    <br><br>
    <table class="tabella2">
        <tr>

            <td><a href="http://www.comune.torino.it/albopretorio/" target="_blank"><b>AMMINISTRAZIONE
                        TRASPARENTE</b></a></td>
            <td><a href="https://web.pasemplice.eu/PortaleDebitore/02008/01907990012/A0B0B1F558AA/index.do"
                   target="_blank"><b>CONTATTI</b></a></td>
            <td>
            <td>
        </tr>

        <tr>
            <td>I dati personali pubblicati sono riutilizzabili solo ai sensi dell'articolo 7 del decreto legislativo
                33/2013
            </td>
            <td>Comune di Torino</td>
            <td><a href="https://www.comune.torino.it/pec/" target="_blank">Posta elettronica certificata</a></td>
        </tr>

        <tr>
            <td></td>
            <td>Piazza Palazzo di Città, 1, 10122 Torino TO</td>
            <td>
                <a href="http://www.comune.torino.it/servizionline/schede/userTorinoE.php?context=torinoE&submitAction=homeIndice&id=945&idRoot=134&refLanguage=it"
                   target="_blank">Scrivi al comune</a></td>
        </tr>

        <tr>
            <td></td>
            <td>Codice fiscale / P. IVA: 00514490010</td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <a href="http://www.comune.torino.it/servizionline/schede/userTorinoE.php?context=torinoE&submitAction=homeIndice&id=945&idRoot=134&refLanguage=it"
                   target="_blank">Ufficio Relazioni con il Pubblico</a></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td><p>Numero verde: 800 019531</p></td>
            <td></td>
        </tr>
    </table>
    <div class="eventi">
        <p>Ultimo aggiornamento: 06/10/2023</p><br>
        <a href="http://www.comune.torino.it/condizioni.html" target="_blank">Condizioni d'uso, privacy e cookie</a>
    </div>
    <br><br>
</footer>
</body>
</html>
  