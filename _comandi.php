<?php
//ini_set("log_errors", 1);
//ini_set("error_log", "error.log");
//if ($userID!=340271798) {sm($chatID, "Il bot sta subendo aggiornamenti , ritornerà tra qualche minuto."); return;}
if ($msg == "/start") 
{
sm($chatID, "Ciao, sono ToolsForLootBot! Per un elenco completo delle funzioni digita /help.\n\nStatistiche: /info\n\nCanale ufficiale: @ToolsUpdates");
}
else if ($msg == "/help") {
	/*if (isset($cbid)) cb_reply($cbid, "Sei tornato all'help", false, $cbmid, false, true);
	$text = "<b>Funzioni:</b>\n\n1. Inoltra una lista di item necessari da @craftlootbot anche specificandone il prezzo in fondo ad ogni riga e creerò le stringhe per i negozi\n\n<i>Se il prezzo è minore di 100 viene moltiplicato per 1000</i>\n\n2. Inoltra lo zaino con [opzionale] il prezzo in fondo per le stringhe dei negozi divise per rarità\n\n3. Fai <i>/ricerca Rarità</i> per ottenere le stringhe di una determinata rarità da cercare\n\n";
	$text.= "4. Inoltra il risultato del ricerca per impostare a quel valore i tuoi prezzi\n\n5. Imposta un team con il comando /team per impostare i prezzi anche ai tuoi compagni\n\n<i>Il team viene usato solamente quando un membro inoltra dei prezzi dal ricerca, e in nessun altro caso</i>\n\n6. Gestisci nelle impostazioni con il comando /settings le percentuali di zaino e prezzo sul ricerca da usare\n\n";
	$text.= "7. Imposta la vendita a base piuttosto che al ricerca dalle impostazioni, tenendo presente che il bot considera \"a base\" solo i prezzi a 1 (non esclude mai un item con i prezzi del ricerca p.e.)\n\n8. Accedi e consulta in modo semplice le api di cronologia di Loot Bot. I comandi disponibili sono:<i>\n- /ricerche (Cerca)\n- /log (Negozi)\n- /paylog (Pagamenti)\n- /cerca (Player)\n- /monitor (Negozi di un item specifico)\n- /scambi (Scambi)</i>\n\n";
	sm($chatID, $text, array(array(array("text" => "Pagina 2", "callback_data" => "/help2"), array("text" => "Video Dimostrativo", "callback_data" => "get_video_1")),array(array("text" => "Video in combo con CraftLootBot", "callback_data" => "get_video_3"))));
	*/
	if (isset($cbid)) cb_reply($cbid, "Sei tornato all'help principale", false, $cbmid, false, true);
	$text = "<b>🛠 Introduzione\nAll'utilizzo di ToolsForLootBot</b>\n\n<i>Benvenuto!\nQuesto bot può essere di supporto al giocatore di</i> @lootgamebot <i>automatizzando o velocizzando la gestione di alcune delle funzioni chiave del gioco.\nIl suo scopo è rendere l'esperienza dell'utente meno frustrante, soprattutto in quelle meccaniche inevitabilmente ripetitive.\n\nPer un introduzione agli specifici temi segui i bottoni qui sotto...</i>";
	sm($chatID, $text, array(array(array("text" => "Crafting ⚒︎", "callback_data" => "/help2"), array("text" => "Mercato 💰", "callback_data" => "/help3")),array(array("text" => "Dungeon 🛡", "callback_data" => "/help6"), array("text" => "Miscellaneo 💱", "callback_data" => "/help7"))));
}
else if ($msg == "/help2") {
	/*if (isset($cbid)) cb_reply($cbid, "Help, pagina 2", false, $cbmid, false, true);
	$text= "9. Inoltra il risultato del comando <i>/negozi</i> fatto su LootBotPlus per le stringhe <i>/negoziom</i> con codici dei negozi e prezzi aggiornati al ricerca (si intende gli ultimi prezzi del ricerca che tu hai inoltrato) tutto in maniera automatica. In più un riepilogo delle variazioni.\n\n10. Dungeon Mapper!\nInoltra il messaggio di aggiunta ad un'istanza dungeon per mapparlo.\nUsa i tasti per la navigazione e la mappa.\nSe hai impostato le emoji, consulta la /legenda\n\n";
	$text.= "11. Dungeon condivisi:\nSe mappi un dungeon mentre fai parte di un team e un tuo compagno accede allo stesso, la mappa è condivisa!\n\n12. Usa il comando <i>/prezzo nome_item</i> per visualizzare l'ultimo prezzo e la data di salvataggio di quell'oggetto.\n\n13. Puoi far entrare un giocatore nel tuo dungeon col tasto <i>share</i> (🌐): dopo averlo premuto, fagli inoltrare il messaggio che contiene il codice di condivisione e il gioco è fatto!\n\n";
	$text.= "14. Se un negozio include pietre del drago, saprai quanti punti e livelli stai vendendo e quanti ne hai nello zaino!\n\n15. Con il comando <i>/status [emoji]</i> è possibile aggiungere un'emoji che rappresenta il proprio stato all'interno del team.\n\n16. Inoltrando la lista membri (riassuntiva) del team il bot risponderà con un messaggio per taggare chi non ha ancora colpito il boss corrente.\n\n";
	sm($chatID, $text, array(array(array("text" => "Pagina 3", "callback_data" => "/help3"), array("text" => "Pagina iniziale", "callback_data" => "/help")), array(array("text" => "Video Dimostrativo pt.2", "callback_data" => "get_video_2"))));
	*/
	if (isset($cbid)) cb_reply($cbid, "Help Crafting ⚒︎", false, $cbmid, false, true);
	$text = "<b>⚒︎ Crafting</b>\n<i>Tramite due modalità inline, è possibile automatizzare il crafting direttamente nella chat con </i>@lootgamebot.\n\n<b>• Albero Standard</b>\nRichiamando: @ToolsForLootBot nella chat del gioco e specificando un [item].\n\n<b>• Albero Giocatore</b>\nAutomaticamente: Inoltrando il file-lista risultato dal <code>/craft</code> (su @craftlootbot) e richiamando il tools nella chat del gioco.\n\n";
	$text.= "<i>È utile notare che la prima opzione non effettua alcun controllo sullo zaino del giocatore e segue l'albero generico dell'oggetto secondo items base.\nCon la seconda, lavorando su lista craftbot, è possibile che vengano inclusi craftati.</i>\n\n";
	$text.= "<b>Pro-tips ✅</b>\n<i>• È possibile muoversi nella lista craft anteponendo '+' o '-' al codice craft.</i>\n<i>• È possibile muoversi direttamente verso una riga specifica iniziando la query con +[numero_riga]:</i>\n<i>• È possibile ignorare il craft in corso per poterne avviare uno nuovo:</i>\n<i>@ToolsForLootBot reset</i> in qualsiasi conversazione.";
	sm($chatID, $text, array(array(array("text" => "Video 1 - Inline", "callback_data" => "get_video_4")), array(array("text" => "Pagina iniziale", "callback_data" => "/help"))));
}
else if ($msg == "/help3") {
	/*if (isset($cbid)) cb_reply($cbid, "Help, pagina 3", false, $cbmid, false, true);
	$text= "17. Inoltra una scheda giocatore per salvarla nel database. Con il comando\n<i>/drago [nome]</i>\npotrai cercare il proprietario del drago e vedere la sua vocazione.\n\n18. Con il comando <i>/svuota</i> puoi eliminare il contenuto salvato in una stanza della mappa del dungeon.\n\n19. Usa il comando <i>/cancellamappa</i> mentre stai mappando per cancellarla completamente dal database.\n\n";
	$text.= "20. Inoltra un file .txt da @CraftLootBot con la lista craft per iniziare il <b>Crafting Inline</b>, oppure inizia direttamente specificando nella query il nome dell'oggetto. Se il client Telegram non mostra il corretto messaggio prova con la query \"reset\", che dovrebbe resettare il craft in corso, anche se non è certo che funzioni sempre.\nSe inizi una query con + avanzi, se inizi con - indietreggi, altrimenti ripeti la stessa stringa. Se invece si inizia una query con la sintassi <i>+numero_riga:</i> ci si teletrasporta alla successiva di quella riga.\n\n";
	$text.= "21. Con il comando <i>/setpietre [numero]</i> è possibile impostare i propri prezzi (personali) al valore indicato moltiplicato per la Rarità con un singolo comando.\n\n22. Se nel comando <i>/prezzo</i> si inserisce un craftato si ottiene, se possibile, il totale della somma dei prezzi al ricerca di tutti i suoi componenti.\n\n23. Col comando /globale puoi visualizzare il grafico dell'andamento della globale attuale!\n\n";
	sm($chatID, $text, array(array(array("text" => "Pagina iniziale", "callback_data" => "/help")), array(array("text" => "Video Dimostrativo pt.3", "callback_data" => "get_video_4"))));
	*/
	if (isset($cbid)) cb_reply($cbid, "Help Mercato 💰 pt. 1", false, $cbmid, false, true);
	$text = "<b>💰 Mercato</b>\n<i>Mantenere aggiornata una lista di prezzi è l'unico requisito per poter automatizzare moltissime funzioni, come la stima del costo reale di un craft o la vendita, senza pena, degli items accumulati nello zaino. Collaborare in gruppi è un buon modo per mantenere vivo ed attivo il mercato dell'intero gioco.</i>\n\n";
	$text .= "<b>Inizializzazione:</b>\n<i>• Scegliere un </i><b>codice team</b><i> per poter condividere la lista dei </i><b>prezzi del ricerca</b>\nComando: /team -> creare|settare, visualizzare, rimuovere il proprio team dal tools.\nNota: la lista non sostituirà la tua personale (se necessario la completerà).\n";
	$text .= "Nota: Puoi cambiare team solamente una volta all'ora.\n<i>• Per distinguersi velocemente nella lista, o segnalarsi tra compagni</i>\nComando: <code>/status</code> [emoji] -> imposta un emoji identificativa.\n\n💡Piccola nota:\n<i>Quando, invece di inoltrare, si incollano parti di un messaggio, assicurarsi che il formato sia rispettato.</i>";
	sm($chatID, $text, array(array(array("text" => "Prossimo", "callback_data" => "/help4")), array(array("text" => "Pagina iniziale", "callback_data" => "/help"))));
}
else if ($msg == "/help4") {
	if (isset($cbid)) cb_reply($cbid, "Help Mercato 💰 pt. 2", false, $cbmid, false, true);
	$text = "<b>💰 Gestione di un Mercato</b>\n<i>Questo bot nasce per aiutare il giocatore nel mercato interno</i> - @lootplusbot\n<i>Principalmente, là dove possibile, implementa tastiere inline per automatizzare l'inserimento di lunghe linee|liste, esegue calcoli e prepara stringhe formattate che possono essere riutilizzate velocemente.</i>\n\n";
	$text .= "<b>Salvare una lista prezzi del ricerca</b>\n<i>• Ricerca dei prezzi per tutti gli oggetti di una rarità\n(stringhe per il comando </i><code>/ricerca</code><i> sul plus)</i>\nComando: /ricerca [Sigla_Rarità] -> ottiene una lista utilizzabile inline nel plus.\n<i>• Impostare il </i>prezzo del ricerca<i> degli oggetti (interno al tools)</i>\n";
	$text .= "Automaticamente: inoltrando il risultato del <code>/ricerca</code> sul plus.\nNota: Il 'prezzo del ricerca' sarà riferito al negozio più basso, durata massima di 7g.\n\n<b>Creare negozi</b>* \n<i>(stringhe </i><code>/negozio</code><i> sul plus)\n• Di oggetti necessari per un craft</i>\nAutomaticamente: inoltrando anche parte della <code>/lista</code> dal @craftlootbot.\n";
	$text .= "<i>• Di oggetti nello zaino</i>\nAutomaticamente: inoltrando anche parte dello <code>Zaino</code> dal @lootgamebot.\n\n<b>Aggiornare negozi</b>* \n<i>(stringhe </i><code>/negoziom</code><i> sul plus)</i>\nAutomaticamente: inoltrando anche parzialmente i propri <code>/negozi</code> dal plus.\n\n<b>Visualizzare il prezzo impostato per un oggetto (prezzo del ricerca)</b>\n";
	$text .= "Comando: /prezzo [Nome_item]\n\n[* vedi <i>Prezzi</i> ]";
	sm($chatID, $text, array(array(array("text" => "Prossimo", "callback_data" => "/help5")), array(array("text" => "Video 2 - Negozi", "callback_data" => "get_video_2"), array("text" => "Video 3 - Necessari", "callback_data" => "get_video_3")), array(array("text" => "Pagina iniziale", "callback_data" => "/help"))));
}
else if ($msg == "/help5") {
	if (isset($cbid)) cb_reply($cbid, "Help Mercato 💰 pt. 3", false, $cbmid, false, true);
	$text = "<b>💰 Gestione dei prezzi per i Mercati</b>\n<i>Per minimizzare l'intervento dell'utente, il bot offre una serie di funzioni che permettono di gestire i prezzi degli oggetti (in massa) partendo dai valori salvati in </i><b>prezzi del ricerca</b>\n\n<b>Impostare il prezzo degli oggetti(*)</b>\n";
	$text .= "<i>• Singolarmente, è possibile specificare un prezzo arbitrario (1 per 'base') </i> \nManualmente: Nelle liste di oggetti alla fine di ogni riga (per ogni oggetto)\nNota: Se il prezzo è minore di 100 viene moltiplicato per 1000\n<i>• Per tutti gli oggetti inseriti, applicando una percentuale ed una regola sul base</i>\n";
	$text .= "Automaticamente: inoltrando i riusultati del <code>/ricerca</code> (dal plus).\n\n<b>Percentuale sui prezzi salvati</b>\nÈ possibile impostare i prezzi dei propri negozi automaticamente ed in proporzione al valore base impostato dai <b>prezzi del ricerca</b>.\n<i>• 100% = </i><b>prezzo del ricerca</b><i>, valori minori un decremento, maggiori un aumento </i>\n\n";
	$text .= "<b>Regole dei prezzi e valore base</b>\n<i>Impostazioni in /settings</i>\n• Tutto a Base: <i>Ignora i prezzi impostati (No </i><b>prezzi del ricerca</b><i>)</i>\n• Niente a Base:<i>\n  Se di un oggetto non è stato specificato un prezzo,\n  questo viene escluso dai negozi</i>\n• Nessun Controllo:<i>\n";
	$text .= "	Se di un oggetto non è stato specificato un prezzo,\n  questo viene impostato a base</i>\n• Prezzo Scrigni: <i>Ignora i prezzi impostati (No </i><b>prezzi del ricerca</b><i>) e mette tutto al prezzo degli scrigni all'emporio</i>\n\n<b>Impostare il prezzo delle pietre Drago a seconda della rarità</b>\nComando: /setpietre [prezzo]";
	sm($chatID, $text, array(array(array("text" => "Video 4 - Prezzi", "callback_data" => "get_video_1")), array(array("text" => "Pagina iniziale", "callback_data" => "/help"))));
}
else if ($msg == "/help6") {
	if (isset($cbid)) cb_reply($cbid, "Help Dungeon 🛡", false, $cbmid, false, true);
	$text = "<b>🛡 Mapper Dungeon</b>\n<i>È possibile creare mappe dei dungeon semplicemente inoltrando i messaggi del</i> @lootgamebot.\n<i>Saranno automaticamente condivise da tutti i membri in /team</i>.\n\n<b>• Definizione di un'istanza</b>\n";
	$text .= "Automaticamente: Inoltrando il messaggio di aggiunta dal @lootgamebot.\n\n<b>• Inserimento contenuto stanza</b>\n<i>Usando i tasti di navigazione è possibile selezionare la direzione di cui si vuole inserire il contenuto</i>\nAutomaticamente: Inoltrando il messaggio del @lootgamebot dopo l'indicazione della direzione.\n\n";
	$text .= "<b>• Modifica del contenuto di una stanza</b>\n<i>Usando i tasti di navigazione è possibile muoversi nella mappa ed eventualmente modificare il contenuto delle stanze nelle 3 direzioni.</i>\nAutomaticamente: inoltrando il messaggio della versione corretta.\nComando: /svuota -> elimina l'intero contenuto di una stanza.\nComando: /cancellamappa -> rimuove la mappa del dungeon corrente.\n\n";
	$text .= "<b>🗺 Mappa complessiva</b>\n<i>Con il bottone Mappa è possibile visualizzare in un unico messaggio il dungeon in cui si è registrati</i>\nComando: /legenda -> per una lista degli abbinamenti stanza-emoji\n\n<b>🌐 Condivisione mappa</b>\n<i>Con il bottone share (globo) è possibile condividere la mappa corrente con utenti anche fuori da /team, è sufficiente inoltrare il codice all'interessato che a sua volta lo inoltra al bot e il gioco è fatto</i>";
	sm($chatID, $text, array(array(array("text" => "Pagina iniziale", "callback_data" => "/help"))));
}
else if ($msg == "/help7") {
	if (isset($cbid)) cb_reply($cbid, "Help Miscellaneo 💱", false, $cbmid, false, true);
	$text = "
<b>💱 Funzionalità Aggiuntive</b>
<i>Questa è una lista, non esaustiva, di altre funzioni accessorie disponibili nel bot...</i>

<b>• Imprese Globali</b>
<i>Il tools tiene traccia dell'andamento delle imprese globali!</i>
Comando: /globale -> per un grafico aggiornato giornalmente ogni 30 minuti

<b>• Ricerca di un Drago</b>
<i>Specialmente durante le vette, può essere utile conoscere la vocazione del giocatore dietro un particolare drago. Inoltrando la scheda di un giocatore (</i><code>/spia</code><i>, dal plus), le informazioni per il drago verranno salvate nel Tools ed accessibili a chiunque!</i>
Comando: /drago [nome_drago] -> per ricercare ed eventualmente ottenere info su un particolare drago

<b>• Danni ai Boss</b>
<i>Ottenere una lista dei membri ordinata in base al danno al boss corrente</i>
Automaticamente: Inoltrando la <code>lista membri</code> del team

<b>• Accesso alle API pubbliche</b>
<i>È possibile consultare in modo semplice alcune API di LootGameBot, maggiori dettagli mandando il comando senza attributi.</i>
Comando: /cerca -> verifica la presenza di un nome utente nel gioco.
Comando: /log -> accede alle ultime transazioni nei <code>/negozi</code>
Comando: /monitor -> accede alle ultime transazioni di un oggetto specifico
Comando: /ricerche -> restituisce una lista delle ultime ricerche effettuate
Comando: /paylog -> accede alle ultime transazioni <code>/paga</code>
Comando: /scambi -> accede alle ultime transazioni <code>/scambia</code>";
	sm($chatID, $text, array(array(array("text" => "Pagina iniziale", "callback_data" => "/help"))));
}
else if ($msg == "/info") 
{
	typing();
$q = mysqli_query($mysqli, "SELECT COUNT(*) FROM ToolsForLootBot");
//$text = "<b>Donazioni:</b>\nPer supportare il bot dona qualche edollaro a @Delooo, ne sarà lieto.\n\n<b>Lista Donatori:</b>\n\n<i>NB: La lista non è ordinata</i>\n\n";
//$text.= "@Gambax\n@Miaooooooo\n@Shaeryen\n@Cerig\n@AreCappe\n@Haustin\n@YselrahC\n@Darmith\n@Dearep\n@IMayonesX\n@itsLorenZoz\n@Luxurysins\n@TheYellowKing\n@Fulmin3\n";
//$text.= "@Osho27\n@Jarvax\n@black_marco\n@Frieza_Sama\n@GiovanniCanneMarcucci\n@Luca_Undefined_N\n@Niger1987\n@Cedrata\n@ItsJesoo\n@Farfullo\n@Giuuuul\n@Loris_B\n";
//$text.= "@Kaneki666\n@CosoSenpai\n@microtechnicien\n@Uomocinepresa\n@Shyentist\n@LeRoiJaune\n";
$text.= "\n\n<b>Statistiche</b>\nUtenti: ".mysqli_fetch_row($q)[0];
$code_lines = 0;
foreach (scandir(__DIR__) as $file) {
	if (strpos($file, ".php") !== false and strlen($file) - strpos($file, ".php") - 4 === 0 )
		$code_lines += count(file($file));  
}
$query_sent = mysqli_fetch_row(mysqli_query($mysqli, "SELECT SUM(query_inviate) FROM ToolsForLootBot WHERE 1"))[0];
$craft_in_corso = count(scandir('Lists/'))-1;
$num_team = mysqli_fetch_row(mysqli_query($mysqli, "SELECT COUNT(DISTINCT team) FROM ToolsForLootBot WHERE 1"))[0];
$prezzi_salvati = mysqli_fetch_row(mysqli_query($mysqli, "SELECT COUNT(*) FROM prezzi WHERE 1"))[0];
$num_draghi = mysqli_fetch_row(mysqli_query($mysqli, "SELECT COUNT(*) FROM dragons WHERE 1"))[0];
$mappe = mysqli_fetch_row(mysqli_query($mysqli, "SELECT COUNT(*) FROM dungeon WHERE 1"))[0];

$text.= "\nRighe di codice totali: $code_lines";
$text.= "\nQuery inviate: $query_sent";
$text.= "\nCraft in corso: $craft_in_corso";
$text.= "\nDraghi salvati: $num_draghi";
$text.= "\nTeam: $num_team";
$text.="\nPrezzi salvati: $prezzi_salvati";
$text.="\nMappe dungeon: $mappe";
sm($chatID, $text);
}
else if (strpos($msg, "/ricerca")===0) {
	if (strpos($msg, "/ricerca ")===0) {
		$rarity = trim(substr($msg, 9));
		if ($rarity != null and $rarity != "") searchStrings($rarity);
	//sm($chatID, "Questa funzione è stata sospesa perchè un grazioso elefantino si è fatto la bua e ora ha bisogno dell'affetto della madre. Se hai un cuore e un po di pazienza aspetta che finisca di piangere e riavrai la tua funzione, in caso contrario sappi che quell'elefantino sarà il tuo fardello del pentimento.");
	}
	else {
		sm($chatID, "Rarità non specificata.\nSintassi: <i>/ricerca [rarità]</i>");
	}
}
else if (strpos($msg, "/team")===0) {
	$team = trim(substr($msg, 6, 50));
    $team = preg_replace("/[^\w]/", "", $team);
    $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    if (mysqli_num_rows($s)===0) {
    	mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
        $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
   	}
    $arr = mysqli_fetch_assoc($s);
    $oldteam = $arr['team'];
    $n=0;
    if (isset($oldteam)) {
    	$mates = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE team=\"$oldteam\"");
        $n = mysqli_num_rows($mates);
        $team_info = "Team: <b>$oldteam</b>\n";
        while ($b = mysqli_fetch_assoc($mates)) {
        	$team_info .= $b['username'].($b['status'] ? " #".$b['status'] : "")." - ".(($b['last']) ? date("Y-m-d H:i:s", $b['last']) : "mai")."\n";
        }
    }
	if ($team != null and $team != "") {
        $time = time();
        if ($time-$arr['team_changed'] > 60*60) {
        	mysqli_query($mysqli, "UPDATE ToolsForLootBot SET team=\"$team\", team_changed=$time, last=0 WHERE userID=$userID");
			mysqli_query($mysqli, "UPDATE prezzi SET team=\"$team\" WHERE userID=$userID");
        	sm($chatID, (($oldteam) ? "Vecchio team: ".$oldteam."\n" : "")."Nuovo team: ".$team."\n\n<i>Puoi rimuovere il team in qualunque momento con /rimuovi_team</i>");
		}
        else {
        	sm($chatID, "Puoi cambiare team solamente una volta all'ora\n\n".(($oldteam) ? $team_info : ""));
    	}
    }
    else {
    	sm($chatID, ($oldteam) ? $team_info."\n\nPer lasciare il team <i>/rimuovi_team</i>" : "Formato: /team codicedeltuoteam\nDa 0 a 50 caratteri alfanumerici");
    }
}
else if (strpos($msg, "/rimuovi_team")===0) {
    $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    if (mysqli_num_rows($s)===0) {
    	mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
       	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    }
    $arr = mysqli_fetch_assoc($s);
    $oldteam = $arr['team'];
    mysqli_query($mysqli, "UPDATE ToolsForLootBot SET team=\"\" WHERE userID=$userID");
	mysqli_query($mysqli, "UPDATE prezzi SET team=\"\" WHERE userID=$userID");
    sm($chatID, (($oldteam) ? "Vecchio team: ".$oldteam."\n" : "")."Nuovo team rimosso");
}
else if (strpos($msg, "/status")===0) {
	$test = preg_match('/([0-9#][\x{20E3}])|[\x{00ae}\x{00a9}\x{203C}\x{2047}\x{2048}\x{2049}\x{3030}\x{303D}\x{2139}\x{2122}\x{3297}\x{3299}][\x{FE00}-\x{FEFF}]?|[\x{2190}-\x{21FF}][\x{FE00}-\x{FEFF}]?|[\x{2300}-\x{23FF}][\x{FE00}-\x{FEFF}]?|[\x{2460}-\x{24FF}][\x{FE00}-\x{FEFF}]?|[\x{25A0}-\x{25FF}][\x{FE00}-\x{FEFF}]?|[\x{2600}-\x{27BF}][\x{FE00}-\x{FEFF}]?|[\x{2900}-\x{297F}][\x{FE00}-\x{FEFF}]?|[\x{2B00}-\x{2BF0}][\x{FE00}-\x{FEFF}]?|[\x{1F000}-\x{1F6FF}][\x{FE00}-\x{FEFF}]?/u', $msg, $emoji);
	$status = $emoji[0];
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    if (mysqli_num_rows($s)===0) {
    	mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
       	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    }
    $arr = mysqli_fetch_assoc($s);
	$oldstatus = $arr["status"];
	if ($test == 0 or !$status or strlen($status) == 0) {
		if (isset($oldstatus)) {
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET status=\"\" WHERE userID=$userID");
			sm($chatID, "Status $oldstatus rimosso.");
		}
		else
			sm($chatID, "Lo status deve essere un'emoji semplice che indichi qualcosa al team.");
	}
	else {
		if (isset($oldstatus)) {
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET status=\"$status\" WHERE userID=$userID");
			sm($chatID, "Status $oldstatus sostituito con $status.");
		}
		else {
			$c = mysqli_query($mysqli, "UPDATE ToolsForLootBot SET status=\"$status\" WHERE userID=$userID");
			if (!$c) sm($chatID, mysqli_error($mysqli));
			sm($chatID, "Status $status impostato.");
		}
	}
}
else if (strpos($msg, "/ricerche")===0) {
	typing();
	$num = (int) filter_var($msg, FILTER_SANITIZE_NUMBER_INT);
	$min = 1;
	$max = 100;
    if (($num<$min) or ($num>$max))
    	sm($chatID, "Numero di ricerche da visualizzare errato. ($min..$max)");
    else {
		$dati = richiestaAPI("https://fenixweb.net:6600/api/v2/$token/search/$num");
		$dec = json_decode($dati, true);
		$arr = $dec["res"];
		if ($arr[0]["id"]) {
			$c = 0;
			$stringa[0] = "Risultati della ricerca:\n";
			foreach($arr as $value) {
				$stringa[$c/80].="🔍".($value["term"])."\n";
				$c++;
			}
			foreach($stringa as $m) {
				sm($chatID, $m);
			}
		}
		else sm($chatID, "Errore, impossibile comunicare correttamente con le api di Loot Bot.");
    }
}
else if (strpos($msg, "/cerca")===0) {
	$name = substr($msg, strlen("/cerca "));
	if (isset($name)) $name = preg_replace("/[^\w_]/", "", trim($name));
    if ((!$name) or strlen($name) < 1)
    	sm($chatID, "Il nome del player inserito non è valido");
    else {
	$stream = file_get_contents("lootplayers.json");
    if ($stream==false) {
    	$giocatori = richiestaAPI("https://fenixweb.net:6600/api/v2/$token/players");
    	$nomefile = "lootplayers.json";
		$fptr = fopen($nomefile, 'w');
		fwrite($fptr, ((string) time())."@giocatori@".$giocatori);
		fclose($fptr);
        $stream = file_get_contents("lootplayers.json");
    }
    $rawdata=explode("@giocatori@", $stream);
    $last=(int) $rawdata[0];
    $last = ((int) time())-$last;
    if ($last>86400) {
    	$giocatori = richiestaAPI("https://fenixweb.net:6600/api/v2/$token/players");
    	$nomefile = "lootplayers.json";
		$fptr = fopen($nomefile, 'w');
		fwrite($fptr, ((string) time())."@giocatori@".$giocatori);
		fclose($fptr);
        $stream = file_get_contents("lootplayers.json");
        $rawdata=explode("@giocatori@", $stream);
    }
    $json = $rawdata[1];
    $dec = json_decode($json, true);
    $arr = $dec["res"];
    if ($arr[0]["id"]) {
		$found = 0;
		$stringa[0] = "Risultati della ricerca tra i giocatori per \"$name\"\n";
        $max = 120;
    	foreach ($arr as $p) {
			if (strpos(strtolower($p['nickname']), strtolower($name)) !== false) {
                if ($found < $max) {
            		$stringa[$found/60] .= "👤 ".$p['nickname']." (".$p['id'].")\n";
                }
				$found++;
			}
		}
        if ($found >= $max)
        	$stringa[count($stringa) -1] .= "e altri ".($found - $max)." risultati.";
        if ($found > 0) {
			foreach ($stringa as $m) {
				sm($chatID, $m);
			}
        }
        else sm($chatID, "Nessun giocatore trovato");
    }
    else sm($chatID, "Errore, impossibile comunicare con le api di Loot Bot");
    }
}
else if (strpos($msg, "/log")===0) {
	typing();
    $rawparam = trim(substr($msg, 4));
	if ((!$rawparam) or strlen($rawparam) < 1)
		sm($chatID, "È necessario specificare quante righe di log si vuole leggere.\nFormato semplice: <i>/log 10</i>\nmostra le ultime 10 vendite globali\n\nFormato con pagina: <i>/log 10:2</i>\nmostra le ultime vendite globali dalla posizione 10*2 +1 = 21 alla 10* (2+1) = 30\n\nFormato completo: <i>/log 10:2:paperino</i>\nmostra le ultime vendite/acquisti di paperino con lo stesso principio di righe e pagine scritto sopra, oppure <i>/log 10:2:paperino>pippo</i> mostra le transazioni da paperino a pippo");
	else {
		$arr = explode(":", $rawparam);
		$limit = (int) filter_var($arr[0], FILTER_SANITIZE_NUMBER_INT);
		$page = (isset($arr[1]))? filter_var($arr[1], FILTER_SANITIZE_NUMBER_INT):false;
		$target = (isset($arr[2]))? $arr[2]:false;
		if ((!$limit) or ($limit<1) or ($limit>40))
			sm($chatID, "Parametro errato: il numero di righe deve essere compreso tra 1 e 40");
		else {
			if ($page and strlen($page) > 0) {
				$page = (int) $page;
				if ($page<0) $page = 0;
				$offset = '&offset='.((string) ($page*$limit));
				$testo_offset = " con offset pari a ".((string) ($page*$limit+1));
			}
			else {
				$offset="";
				$testo_offset="";
			}
			$both = "";
			$testo_both = "";
			if ($target) {
				$target = trim($target);
				if (strpos($target, ">")===false) {
					$both = '&both='.strip_tags($target);
					$testo_both = ' e target '.strip_tags($target);
				}
				else {
					$coppia = explode(">", $target);
					$from = $coppia[0];
					$to = $coppia[1];
					if (strlen($from)>0) {
						$both = '&from='.strip_tags($from);
						$testo_both = ' da '.strip_tags($from);
					}
					if (strlen($to)>0) {
						$both.= '&to='.strip_tags($to);
						$testo_both .= ' a '.strip_tags($to);
					}
				}
			}
			//TRANSAZIONI
			$dati = (string) richiestaAPI("https://fenixweb.net:6600/api/v2/$token/history/market_direct?limit=$limit".$offset.$both);
            $decdata = json_decode($dati, true);
			$t = $decdata["res"];
			if (($decdata['code'])==200) {
				$risultato = "Ultime $limit transazioni su Loot Bot".$testo_offset.$testo_both.":\n\n";
				$i = 0;
				foreach($t as $transazione) {
					$venditore = $transazione["from_nick"];
					$acquirente = $transazione["to_nick"];
					$prezzo = number_format($transazione["price"], 0 , "," , ".");
					$itemname = $transazione["name"];
					$time = $transazione["time"];
                    $quantity = $transazione["quantity"];
					if (isset($itemname)) $risultato .= "💸$acquirente ha acquistato $quantity $itemname da $venditore per ".((string) $prezzo)."§";
					else $risultato .= "💸$acquirente ha acquistato $quantity oggetti sconosciuti da $venditore per ".((string) $prezzo)."§";
					if (($i % 10) ===0) $risultato.=" alle ".$time."\n";
					else $risultato.="\n";
					$i++;
				}
				if (strlen($both)==0) $risultato .= "\n\nTotale transazioni fatte su Loot Bot: ".((string) $t[0]["id"]);
				sm($chatID, $risultato);
			}
			else sm($chatID, "Errore, impossibile comunicare correttamente con le api di Loot Bot.\n".(($decdata['code']) ? " Code: ".((string) $decdata['code']) : "Il problema è causato da un tempo di risposta troppo elevato."));
	    }
	}
}
else if (strpos($msg, "/monitor")===0) {
	typing();
    $rawparam = trim(substr($msg, 8));
	if ((!$rawparam) or strlen($rawparam) < 1)
		sm($chatID, "È necessario specificare quante righe di log si vuole leggere.\nFormato semplice: <i>/monitor nomeitem:10</i>\nmostra le ultime 10 vendite globali di nomeitem\n\nFormato con pagina: <i>/monitor nomeitem:10:2</i>\nmostra le ultime vendite globali dalla posizione 10*2 +1 = 21 alla 10* (2+1) = 30 di nomeitem\n\nFormato completo: <i>/monitor nomeitem:10:2:paperino</i>\nmostra le ultime vendite/acquisti di paperino con lo stesso principio di righe e pagine scritto sopra, oppure <i>/log nomeitem:10:2:paperino>pippo</i> mostra le transazioni da paperino a pippo, sempre dell'oggetto nomeitem");
	else {
		$arr = explode(":", $rawparam);
        $item = $arr[0];
		$limit = (int) filter_var($arr[1], FILTER_SANITIZE_NUMBER_INT);
		$page = (isset($arr[2]))? filter_var($arr[2], FILTER_SANITIZE_NUMBER_INT):false;
		$target = (isset($arr[3]))? $arr[3]:false;
		if ((!$limit) or ($limit<1) or ($limit>40))
			sm($chatID, "Parametro errato: il numero di righe deve essere compreso tra 1 e 40");
		else {
			if ($page and strlen($page) > 0) {
				$page = (int) $page;
				if ($page<0) $page = 0;
				$offset = '&offset='.((string) ($page*$limit));
				$testo_offset = " con offset pari a ".((string) ($page*$limit+1));
			}
			else {
				$offset="";
				$testo_offset="";
			}
			$both = "";
			$testo_both = "";
			if ($target) {
				$target = trim($target);
				if (strpos($target, ">")===false) {
					$both = '&both='.strip_tags($target);
					$testo_both = ' e target '.strip_tags($target);
				}
				else {
					$coppia = explode(">", $target);
					$from = $coppia[0];
					$to = $coppia[1];
					if (strlen($from)>0) {
						$both = '&from='.strip_tags($from);
						$testo_both = ' da '.strip_tags($from);
					}
					if (strlen($to)>0) {
						$both.= '&to='.strip_tags($to);
						$testo_both .= ' a '.strip_tags($to);
					}
				}
			}
			//TRANSAZIONI
			$dati = (string) richiestaAPI("https://fenixweb.net:6600/api/v2/$token/history/market_direct?fromItem=$item&limit=$limit".$offset.$both);
            $decdata = json_decode($dati, true);
			$t = $decdata["res"];
			if (($decdata['code'])==200) {
				$risultato = "Ultime $limit transazioni di $item su Loot Bot".$testo_offset.$testo_both.":\n\n";
				$i = 0;
				foreach($t as $transazione) {
					$venditore = $transazione["from_nick"];
					$acquirente = $transazione["to_nick"];
					$prezzo = number_format($transazione["price"], 0 , "," , ".");
					$itemname = $transazione["name"];
					$time = $transazione["time"];
					if (isset($itemname)) $risultato .= "💸$acquirente ha acquistato $itemname da $venditore per ".((string) $prezzo)."§";
					else $risultato .= "💸$acquirente ha acquistato un ogetto sconosciuto da $venditore per ".((string) $prezzo)."§";
					if (($i % 10) ===0) $risultato.=" alle ".$time."\n";
					else $risultato.="\n";
					$i++;
				}
				if (strlen($both)==0) $risultato .= "\n\nTotale transazioni fatte su Loot Bot: ".((string) $t[0]["id"]);
				sm($chatID, $risultato);
			}
			else sm($chatID, "Errore, impossibile comunicare correttamente con le api di Loot Bot.\n".(($decdata['code']) ? " Code: ".((string) $decdata['code']) : "Il problema è causato da un tempo di risposta troppo elevato."));
	    }
	}
}
else if (strpos($msg, "/paylog")===0)	{
	typing();
    $rawparam = trim(substr($msg, 7));
	if (strlen($rawparam) < 1)
		sm($chatID, "È necessario specificare quante righe di payments log si vuole leggere.\n\nFormato semplice: <i>/paylog 10</i> mostra gli ultimi 10 pagamenti globali\n\nFormato con pagina: <i>/paylog 10:2</i> mostra gli ultimi pagamenti globali dalla posizione 10*2 +1 = 21 alla 10* (2+1) = 30\n\nFormato completo: <i>/paylog 10:2:paperino</i> mostra gli ultimi pagamenti di paperino con lo stesso principio di righe e pagine scritto sopra, oppure <i>/paylog 10:2:paperino>pippo</i> mostra le transazioni da paperino a pippo");
	else {
		$arr = explode(":", $rawparam);
		$limit = (int) filter_var($arr[0], FILTER_SANITIZE_NUMBER_INT);
		$page = (isset($arr[1]))? filter_var($arr[1], FILTER_SANITIZE_NUMBER_INT):false;
		$target = (isset($arr[2]))? $arr[2]:false;
		if ((!$limit) or ($limit<1) or ($limit>40))
			sm($chatID, "Parametro errato: il numero di righe deve essere compreso tra 1 e 40");
		else {
			if ($page and strlen($page) > 0) {
				$page = (int) $page;
				if ($page<0) $page = 0;
				$offset = '&offset='.((string) ($page*$limit));
				$testo_offset = " con offset pari a ".((string) ($page*$limit+1));
			}
			else {
				$offset="";
				$testo_offset="";
			}
			$both = "";
			$testo_both = "";
			if ($target) {
				$target = trim($target);
				if (strpos($target, ">")===false) {
					$both = '&both='.strip_tags($target);
					$testo_both = ' e target '.strip_tags($target);
				}
				else {
					$coppia = explode(">", $target);
					$from = $coppia[0];
					$to = $coppia[1];
					if (strlen($from)>0) {
						$both = '&from='.strip_tags($from);
						$testo_both = ' da '.strip_tags($from);
					}
					if (strlen($to)>0) {
						$both.= '&to='.strip_tags($to);
						$testo_both .= ' a '.strip_tags($to);
					}
				}
			}
			//TRANSAZIONI
			$dati = (string) richiestaAPI("https://fenixweb.net:6600/api/v2/$token/history/payments?limit=$limit".$offset.$both);
			$decdata = json_decode($dati, true);
			$t = $decdata["res"];
			if (($decdata['code'])==200) {
				$risultato = "Ultimi $limit pagamenti su Loot Bot".$testo_offset.$testo_both.":\n\n";
				$i = 0;
				foreach($t as $transazione) {
					$venditore = $transazione["from_nick"];
					$acquirente = $transazione["to_nick"];
					$prezzo = number_format($transazione["price"], 0 , "," , ".");
					$time = $transazione["time"];
					$risultato .= "💰$venditore ha pagato ".((string) $prezzo)."§ a $acquirente";
					if (($i % 10) ===0) $risultato.=" alle ".$time."\n";
					else $risultato.="\n";
					$i++;
				}
				if (strlen($both)==0) $risultato .= "\n\nTotale pagamenti fatti su Loot Bot: ".((string) $t[0]["id"]);
				sm($chatID, $risultato);
			}
			else sm($chatID, "Errore, impossibile comunicare correttamente con le api di Loot Bot.".(($decdata['code']) ? " Code: ".((string) $decdata['code']) : ""));
    	}
	}
}
else if (strpos($msg, "/scambi")===0) {
	typing();
    $rawparam = trim(substr($msg, 7));
	if ((!$rawparam) or strlen($rawparam) < 1)
		sm($chatID, "È necessario specificare quante righe di log scambi si vuole leggere.\nFormato semplice: <i>/scambi 10</i>\nmostra gli ultimi 10 scambi globali\n\nFormato con pagina: <i>/scambi 10:2</i>\nmostra gli ultimi scambi globali dalla posizione 10*2 +1 = 21 alla 10* (2+1) = 30\n\nFormato completo: <i>/scambi 10:2:paperino</i>\nmostra gli ultimi scambi di paperino con lo stesso principio di righe e pagine scritto sopra, oppure <i>/scambi 10:2:paperino>pippo</i> mostra gli scambi da paperino a pippo");
	else {
		$arr = explode(":", $rawparam);
		$limit = (int) filter_var($arr[0], FILTER_SANITIZE_NUMBER_INT);
		$page = (isset($arr[1]))? filter_var($arr[1], FILTER_SANITIZE_NUMBER_INT):false;
		$target = (isset($arr[2]))? $arr[2]:false;
		if ((!$limit) or ($limit<1) or ($limit>40))
			sm($chatID, "Parametro errato: il numero di righe deve essere compreso tra 1 e 40");
		else {
			if ($page and strlen($page) > 0) {
				$page = (int) $page;
				if ($page<0) $page = 0;
				$offset = '&offset='.((string) ($page*$limit));
				$testo_offset = " con offset pari a ".((string) ($page*$limit+1));
			}
			else {
				$offset="";
				$testo_offset="";
			}
			$both = "";
			$testo_both = "";
			if ($target) {
				$target = trim($target);
				if (strpos($target, ">")===false) {
					$both = '&both='.strip_tags($target);
					$testo_both = ' e target '.strip_tags($target);
				}
				else {
					$coppia = explode(">", $target);
					$from = $coppia[0];
					$to = $coppia[1];
					if (strlen($from)>0) {
						$both = '&from='.strip_tags($from);
						$testo_both = ' da '.strip_tags($from);
					}
					if (strlen($to)>0) {
						$both.= '&to='.strip_tags($to);
						$testo_both .= ' a '.strip_tags($to);
					}
				}
			}
			//TRANSAZIONI
			$dati = (string) richiestaAPI("https://fenixweb.net:6600/api/v2/$token/history/market?limit=$limit".$offset.$both);
            $decdata = json_decode($dati, true);
			$t = $decdata["res"];
			if (($decdata['code'])==200) {
				$risultato = "Ultime $limit transazioni su Loot Bot".$testo_offset.$testo_both.":\n\n";
				$i = 0;
				foreach($t as $transazione) {
					$venditore = $transazione["from_nick"];
					$acquirente = $transazione["to_nick"];
					$item_1 = $transazione["name_1"];
					$item_2 = $transazione["name_2"];
					$time = $transazione["time"];
					$risultato .= "🤝$acquirente ha ottenuto $item_1 da $venditore in cambio di $item_2";
					if (($i % 10) ===0) $risultato.=" alle ".$time."\n";
					else $risultato.="\n";
					$i++;
				}
				if (strlen($both)==0) $risultato .= "\n\nTotale scambi fatti su Loot Bot: ".((string) $t[0]["id"]);
				sm($chatID, $risultato);
			}
			else sm($chatID, "Errore, impossibile comunicare correttamente con le api di Loot Bot.\n".(($decdata['code']) ? " Code: ".((string) $decdata['code']) : "Il problema è causato da un tempo di risposta troppo elevato."));
	    }
	}
}
else if ($msg == "/settings") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    if (mysqli_num_rows($s)===0) {
    	mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
        $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    }
    $arr = mysqli_fetch_assoc($s);
    if (isset($arr['userID'])) {
        switch ($arr['escludi']) {
        case 0: $base = "Nessun controllo ⚠️";
        break;
        case 1: $base = "Niente a base 🚫";
        break;
        case 2: $base = "Tutto a base 💸";
        break;
		case 3: $base = "Prezzo scrigni 💰";
        break;
        default: $base = "Errore";
        }
		if ($arr['pubblici']==0)
			$privacy = "privati";
		else
			$privacy = "pubblici";
		if ($arr['emoji']==0)
			$em = "❌";
		else
			$em = "✅";
		if ($arr['massivo']==0)
			$massivo = "No";
		else
			$massivo = "Si";
        //sm($chatID, "<b>IMPOSTAZIONI</b>\n\n🎒Percentuale dello zaino: ".$arr['zaino_perc']."%\n\n🔍Percentuale sul ricerca: ".$arr['ricerca_perc']."%\n\n💸Regole per item a prezzo base: ".$base."\n\n📊Limite oggetti per negozio: ".$arr['sell_max']."\n\n🗣Privacy negozi: ".$privacy."\n\nEmoji nella mappa: ".$em, $menu, 'pred', false);
        sm($chatID, "<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  ".$arr['zaino_perc']."% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  ".$arr['ricerca_perc']."% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  ".$arr['sell_max']." 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu, 'pred', false);
    }
}
else if ($msg=='/legenda') {
	$st = getRoom(0);
	$testo = "Legenda:\n";
	for ($i = -70; $i<0; $i+=20) {
		$testo.= getRoom($i, true)." = mostro lvl. >=".((string) abs($i))."\n";
	}
	$i = 1;
	do {
		$n = getRoom($i);
		$testo.= getRoom($i, true)." = ".$n."\n";
		$i++;
	} while($n!=$st);
	sm($chatID, $testo);
}
else if (strpos($msg, "/prezzo")===0) {
	$name = substr($msg, strlen("/prezzo "));
    if ((!$name) or strlen($name) < 1)
    	sm($chatID, "Il nome dell'item inserito non è valido.\nSintassi: <i>/prezzo [nome item]</i>");
    else {
		$text.= "<b>Prezzo personale:\n</b>";
		$itemID = getID($name);
		$q = mysqli_query($mysqli, "SELECT * FROM prezzi WHERE userID=$userID AND itemID=$itemID");
		if (mysqli_num_rows($q)==0) {
			$text .= "Nessun prezzo salvato per questo oggetto\n\n";
		}
		else {
			$b = mysqli_fetch_assoc($q);
			$prezzo = $b['prezzo'];
			$data = $b['last_update'];
			$text .= "Ultimo prezzo salvato per $name:\n$prezzo § in data $data\n\n";
		}
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
		if (mysqli_num_rows($s)!=0) {
			$arr = mysqli_fetch_assoc($s);
			if (isset($arr['team']) and strlen($arr['team'])>0) {
				$text .= "<b>Team:\n</b>";
                $price_q = mysqli_query($mysqli, "SELECT * FROM prezzi WHERE itemID=$itemID AND team=\"".$arr['team']."\" ORDER BY last_update DESC");
				$arr_p = mysqli_fetch_assoc($price_q);
	            if (isset($arr_p) and $arr_p['prezzo']) {
					$prezzo = $arr_p['prezzo'];
					$data = $arr_p['last_update'];
					$text .= "Ultimo prezzo salvato da un compagno di team per $name:\n$prezzo § in data $data\n\n";
				}
				else
					$text .= "Nessun prezzo di team trovato\n\n";
            }
		}
		$cl_i = mat_list_id_id($itemID);
		//sm(340271798, "$cl_i");
		if (isset($cl_i)) $list_a = array_count_values(explode("\n", $cl_i));
		$tot_p = 0;
		$check = true;
		foreach ($list_a as $item_id => $times) {
			if ($item_id and is_numeric($item_id)) {
				$q = mysqli_query($mysqli, "SELECT prezzo FROM prezzi WHERE (userID=$userID OR team=\"".$arr['team']."\") AND itemID=$item_id
                                                  ORDER BY last_update DESC");
				if (mysqli_num_rows($q)!=0) {
					$b = mysqli_fetch_assoc($q);
					$prezzo = $b['prezzo'];
					$tot_p += $prezzo * $times;
				} else {
					$text.= "Non è stato possibile calcolare il prezzo del craftato perchè non hai salvato ".getName($item_id)."\n\n";
					$check = false;
					break;
				}
			}
		}
		if (isset($check)) $text.="<b>Craft:</b>\nSomma dei prezzi salvati al ricerca dei materiali: $tot_p §\n\n";
		sm($chatID, $text);
	}
}
else if (strpos($msg, "/drago")===0) {
	$name = substr($msg, strlen("/drago "));
    if ((!$name) or strlen($name) < 1)
    	sm($chatID, "Il nome del drago inserito non è valido.\nPuoi usare le virgole per aggiungere condizioni.");
    else {
		$name = preg_replace("/[^0-9a-zA-Z àáèéìíòóùú,]/", "", $name);
		$name = substr($name, 0, 150);
		$text.= "<b>Risultato della ricerca per </b>$name<b>:</b>\n\n";
		$query = "1";
		$ok = false;
		if (strpos($name, ",")!==false) {
			$vet = explode(",", $name);
			foreach ($vet as $split) {
				if (strlen($split)>0) {$query.= " AND drago LIKE \"%".$split."%\""; $ok = true;}
			}
		}
		else {
			$query = "drago LIKE \"%$name%\"";
			$ok = true;
		}
		if (isset($ok)) $q = mysqli_query($mysqli, "SELECT * FROM dragons WHERE ".$query." LIMIT 10");
		if (!$ok or mysqli_num_rows($q)==0) {
			$text .= "<i>Nessun drago con un nome simile nel database.</i>";
		}
		else {
			for ($i = 0; $i < 10 and $b = mysqli_fetch_assoc($q); $i++) {
				$drago = $b['drago'];
				$nick = $b['nickname'];
				$data = $b['time'];
				$vocazione = $b['vocazione'];
				$text .= "👤 <b>$nick</b>\n🏹 $vocazione\n🐉 $drago\n📅 $data\n\n";
			}
			if ($i == 10) $text.="<i>...e potrebbero esserci altri risultati</i>";
		}
		sm($chatID, $text);
	}
}
else if (strpos($msg, "/cancellamappa")===0) {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$dungeon_data = mysqli_fetch_assoc($d);
			$creatorID = $dungeon_data['creatorID'];
			if ($creatorID!=$userID) sm($chatID, "Non essendone il creatore, non puoi cancellare la mappa.");
			else {
				sm($chatID, "$username, hai appena cancellato la mappa da te creata.", "nascondi");
				mysqli_query($mysqli, "DELETE FROM dungeon WHERE ID=\"$dungeon_ID\"");
                mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
			}
		}
		else {
			sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
		}
	}
}
else if ($msg == "/start AVVIO_CRAFT") {
	sm($chatID, "Per iniziare a craftare, inoltra un file .txt con la lista da @craftlootbot o scegli un item.", array(array(array("text" => "Video Dimostrativo - Crafting Inline", "callback_data" => "get_video_4"))));
}
else if (strpos($msg, "/setpietre")===0) {
	if (strpos($msg, "/setpietre ")===0) {
		$prezzoR = (int) filter_var(substr($msg, 11), FILTER_SANITIZE_NUMBER_INT);
		if ($prezzoR and $prezzoR > 0 and $prezzoR < 1000000) {
			if ($prezzoR < 1000) $prezzoR = 1000;
			$idPietre = array(68, 69, 70, 71, 72, 73);
			$prezziPietre = [];
			for ($i = 0; $i < count($idPietre) ; $i++) {
				$prezziPietre[$i] = ($i+1) * $prezzoR;
			}
			$t = mysqli_query($mysqli, "REPLACE INTO prezzi (userID, itemID, prezzo) VALUES ($userID, ".$idPietre[0].", ".$prezziPietre[0]."),($userID, ".$idPietre[1].", ".$prezziPietre[1]."),($userID, ".$idPietre[2].", ".$prezziPietre[2]."),($userID, ".$idPietre[3].", ".$prezziPietre[3]."),($userID, ".$idPietre[4].", ".$prezziPietre[4]."),($userID, ".$idPietre[5].", ".$prezziPietre[5].");");
			sm($chatID, "Impostate pietre del drago a $prezzoR per rarità");
		}
		else sm($chatID, "Input errato. [0 - 1000000]");
	}
	else {
		sm($chatID, "Nessuna rarità specificata.\nSintassi: <i>/setpietre [numero]</i>");
	}
}
else if ($msg == "/challenge") {
	typing();
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
	}
	$dir = 'Lists/';
	foreach (scandir($dir) as $file) {
		if (strpos($file, ".txt") !== false and strlen($file) - strpos($file, ".txt") - 4 === 0 ) {
			$time = (int) explode("--", $file)[1];
			if (strpos($file,strtolower($username)."--")===0 or $time < time() - 24 * 60 * 60) {
				unlink($dir.$file);
			}
		}
	}
	$fname = $dir.strtolower("$username--".time()."--.txt");
	$craftl = [];
	foreach (lootItems() as $irow) {
		if (isset($irow["craftable"]) and $irow["craftable"] == 1) {
			$craftl[] = (int)$irow["id"];
		}
	}
	file_put_contents($fname, craft_list_fast($craftl));
	if(mysqli_query($mysqli, "UPDATE ToolsForLootBot SET crafting_index=1,crafting_list=\"$fname\" WHERE userID=$userID"))
		sm($chatID, "SFIDA COMINCIATA! Buona fortuna avventuriero. Se completi questa lista avrai craftato tutti gli oggetti craftabili del gioco e otterrai una medaglia <i>nerdone magistrale</i> ufficiale conferita da Delooo in persona.", array(array(array("text" => "Inizia", "switch_inline_query" => "inizio craft")), array(array("text" => "Mi arrendo", "switch_inline_query" => "reset"))));
	else sm($chatID, "Lista Craft non caricata con successo. Puoi segnalare il problema a @Delooo. Errore: ".mysqli_error($mysqli));
}
/*
else if (strpos($msg, "/offerte_libere")===0) {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    if (mysqli_num_rows($s)===0) {
    	mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
        $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    }
    $arr = mysqli_fetch_assoc($s);
    if ($arr['userID']) {
		$new = (($arr['contrabbandiere_free'] & 1) == 0);
		$new_x = $new ? ($arr['contrabbandiere_free'] | 1) : ($arr['contrabbandiere_free'] & -2);
		mysqli_query($mysqli, "UPDATE ToolsForLootBot SET contrabbandiere_free=$new_x WHERE userID=$userID");
		sm($chatID, "Impostazione delle offerte libere sul contrabbandiere settata su ".($new ? "SI" : "NO"));
	}
}
else if (strpos($msg, "/offerte_negoziopvt")===0) {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    if (mysqli_num_rows($s)===0) {
    	mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
        $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    }
    $arr = mysqli_fetch_assoc($s);
    if ($arr['userID']) {
		$new = (($arr['contrabbandiere_free'] & 2) == 0);
		$new_x = $new ? ($arr['contrabbandiere_free'] | 2) : ($arr['contrabbandiere_free'] & -3);
		mysqli_query($mysqli, "UPDATE ToolsForLootBot SET contrabbandiere_free=$new_x WHERE userID=$userID");
		sm($chatID, "Impostazione delle offerte con negozio in pvt sul contrabbandiere settata su ".($new ? "SI" : "NO"));
	}
}
*/
else if (strpos($msg, "/globale")===0) {
	$this_month = date("n");
	$this_year = date("Y");
    $now = strtotime("now");
    $scorsa = false;
    if (strpos($msg, "/globale_scorsa")===0) {
    	$this_month = date("n", strtotime('-1 months'));
		$this_year = date("Y", strtotime('-1 months'));
        $now = strtotime("-1 months");
        $scorsa = true;
    }
	//$g = mysqli_query($mysqli, "SELECT global_tot, global_cap, global_members, time FROM global WHERE month=$this_month AND year=$this_year ORDER BY time");
	$msqli = mysqli_connect("127.0.0.1", "tools", "hN5YxEpzG9tzo4m", "tools");
	$g = mysqli_query($msqli, "SELECT global_tot, global_cap, global_members, UNIX_TIMESTAMP(time) AS time_u FROM global WHERE month=$this_month AND year=$this_year AND global_on=1 ORDER BY time");
	$arr = mysqli_fetch_all($g, MYSQLI_ASSOC);
    if (mysqli_num_rows($g)>=1) {
		upload_photo();
		$global_tot = end($arr)["global_tot"];
		$global_cap = end($arr)["global_cap"];
		$nocap = ($global_cap == 0);
		$global_members = end($arr)["global_members"];
		$last_time = (int) end($arr)['time_u'];
		$first_time = (int) $arr[0]['time_u'];
		$time_elapsed = $last_time - $first_time;
		$intervals = ((int) date('t', $now))*24;
		$month_end = strtotime('+1 month',strtotime(date('m', $now).'/01/'.date('Y', $now).' 00:00:00'));
		$month_start = strtotime(date('m', $now).'/01/'.date('Y', $now).' 00:00:00') + 1;
		$sampling = ($month_end - $month_start) / $intervals;
		$ydata = [];
		$xdata = [];
		$cleanydata = [];
		$perfect_line_data = [];
		for ($i = 0; $i<$intervals; $i++) {
			$xdata[$i] = date("d", $month_start + $i * $sampling);
			$ydata[$i] = '';
			$perfect_line_data[$i] = '-';
		}
		$perfect_line_data[0] = 0;
		foreach($arr as $record) {
			$unix_t = (int) $record['time_u'];
			$elapsed = $unix_t - $month_start;
			$spot = (int) $elapsed / $sampling;
			$ydata[$spot] = (int) $record['global_tot'];
			$cleanydata[$spot] = (int) $record['global_tot'];
		}
		
		//Regressione lineare
		$d = 4;
		$x = $d * 24 * 3600 / $sampling;
		$last_x_days = array_slice($cleanydata, -$x);
		end($cleanydata);
		$last_x_days_x = []; 
		for ($i = 0; $i < count($last_x_days); $i++) {
 			$last_key = key($cleanydata);
			$last_x_days_x[count($last_x_days) - $i -1] = $last_key;
            prev($cleanydata);
		}
		$retta_minimi_errori = linear_regression($last_x_days_x, $last_x_days);
		$prevision = [];
		$vertical_stop = 0;
		
		if ($nocap and $global_cap == 0) {
			$global_cap = (int) round($global_tot * 2.5);
		}
		for ($i = 0; $i<$intervals; $i++) {
			$prevision[$i] = round($i * $retta_minimi_errori['slope']  + $retta_minimi_errori['intercept']);
			if ($nocap and $i > 0  and $prevision[$i] > $global_cap) {
				$global_cap = $prevision[$i];
			}
			if ($prevision[$i] <= 0) {
				$prevision[$i] = '-';
			}
			else if ($vertical_stop == 0 and $prevision[$i] >= $global_cap) {
				$vertical_stop = $i;
				if ($prevision[$i] > $global_cap) $prevision[$i] = '-';
			} else if ($prevision[$i] > $global_cap) {
				$prevision[$i] = '-';
			}
		}
		$perfect_line_data[$intervals-1] = $global_cap;
		
		//GRAFICO
		$final_output = 'global'.rand().'.png';

		require_once ('Graph/jpgraph/src/jpgraph.php');
		require_once ('Graph/jpgraph/src/jpgraph_line.php');
		require_once ('Graph/jpgraph/src/jpgraph_date.php');
		require_once ('Graph/jpgraph/src/jpgraph_plotline.php');

		// Create the Graph.
		$width = 1280; //1080
		$height = 720; //720
		$graph = new Graph($width,$height);
		$graph->SetScale('textint', 0, $global_cap);
	
		$graph->SetMargin(120,100,60,60);
		$graph->title->Set('Andamento della globale');
		$graph->subtitle->Set(date("Y.m.d H:i:s", $first_time)." - ".date("Y.m.d H:i:s", $last_time));
		$graph->xaxis->title->Set('Giorni del mese');
		$graph->yaxis->title->Set('Progresso');
		$graph->yaxis->SetTitleMargin(100);
		$graph->xaxis->SetPos('min');
		
		$graph->xaxis->SetTickLabels($xdata);
		$graph->xaxis->SetTextLabelInterval(24);

		$graph->xaxis->SetWeight(2);
		$graph->footer->left->Set("Obiettivo: ".number_format($global_cap));
        $graph->footer->center->Set(($scorsa ? "Finale: " : "Attuale: ").number_format($global_tot)." (".round($global_tot * 100 / $global_cap, 2)."%)");
        $graph->footer->right->Set("Partecipanti: ".number_format($global_members));		
		
		$graph -> title -> SetFont ( FF_FONT1 , FS_BOLD , 50);
		$graph->yaxis ->title->SetFont( FF_FONT1 , FS_BOLD , 30);
		$graph -> xaxis -> title -> SetFont ( FF_FONT1 , FS_BOLD , 30);
		$max_contributo = $global_cap/$global_members;
		$graph->SetY2Scale("lin", 0, $max_contributo);
		$graph->y2axis->SetColor("orange");
		$graph->y2axis->title->Set('Contributo medio di ciascuno');
		$graph->y2axis->SetTitleMargin(60);
		$graph->y2axis->title->SetFont( FF_FONT1 , FS_BOLD , 30);

        $graph->yaxis->SetLabelFormatCallback("number_format");
        $graph->y2axis->SetLabelFormatCallback("number_format");
		//----------------------------------------------------------
		// Add mark graph with static lines
		$line = new PlotLine(HORIZONTAL,$global_tot,"green",2);
		$graph->AddLine($line);
		$line -> SetLegend("Livello ".($scorsa ? "finale" : "attuale")." del progresso");
		//----------------------------------------------------------
		/*$txt = new Text("Contributo finale medio\nper partecipante:\n".(round($max_contributo)),$width-5,25);
		$txt->SetColor('orange');
		$txt->Align('right');
		$graph->Add($txt); */
		//----------------------------------------------------------
		$lineplot3 = new LinePlot($prevision);

		// Add the plot to the graph
		$graph->Add($lineplot3);
		
		$lineplot3 -> SetColor ( 'gray' );
		$lineplot3 -> SetWeight ( 1 );
		$lineplot3 -> SetLegend("Previsione basata sugli ultimi $d giorni");
		//----------------------------------------------------------
		$lineplot2=new LinePlot($perfect_line_data);
 
		// Add the plot to the graph
		$graph->Add($lineplot2);
		
		$lineplot2 -> SetColor ( 'blue' );
		$lineplot2 -> SetWeight ( 1 );
		$lineplot2 -> SetLegend("Andamento minimo");
		
		//----------------------------------------------------------
		$lineplot=new LinePlot($ydata);
 
		// Add the plot to the graph
		$graph->Add($lineplot);

		$lineplot -> SetColor ( 'red' );
		$lineplot -> SetWeight ( 1 );
		$lineplot -> SetLegend("Andamento reale");
		//----------------------------------------------------------
		$graph->legend->SetFrameWeight(1);
		$graph->legend->SetColumns(4);
		$graph->legend->SetColor('#4E4E4E','#00A78A');
		//----------------------------------------------------------
		// Add mark graph with static lines
		if ($vertical_stop > 0 and !$nocap) {
			$line = new PlotLine(VERTICAL,$vertical_stop,"lightgray",2);
			$graph->AddLine($line);
		} else {
			if (true or $nocap) {
				$t = new Text("ATTENZIONE: Cap globale fittizio. Il vero cap della globale e' sconosciuto.",$width-5,33);
			} else {
				$quote = json_decode(file_get_contents('Res/quotes.json'), true);
				$iii = mt_rand(0, count($quote)-1);
				$t = new Text($quote[$iii]['quote']."\n\n".$quote[$iii]['name'], $width-5,33);
			}
			$t->SetColor('black');
			$t->Align('right');
			$t->SetFont(FF_FONT0,FS_NORMAL,8);
			//$t->SetBox();
			$t->SetParagraphAlign('right');
			$graph->Add($t);
		}
		//----------------------------------------------------------

		// Display the graph		
        $graph->Stroke($final_output);
		spng($chatID, $final_output, false, 'Grafico della globale'.($scorsa ? " scorsa" : ""));
		unlink($final_output);
    } else {
		sm($chatID, "I dati disponibili non sono sufficienti".($scorsa ? "." : ", riprovare più tardi.\nSolitamente servono 3 giorni di dati per un grafico."));
	}
    $this_month = date("n");
	$this_year = date("Y");
	mysqli_query($msqli, "DELETE FROM global WHERE (year<$this_year AND ($this_month>1 OR month=11)) OR (month<($this_month-1))");
}
/*else if (strpos($msg, "/test")===0) {
$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
if (mysqli_num_rows($s)===0) {
    mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
    $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
}
$arr = mysqli_fetch_assoc($s);
$line_n = $arr['crafting_index'];
$fname = $arr['crafting_list'];
if (!$fname or $fname == "") {
	sm($chatID, "Non stai seguendo nessun craft");
}
else if (!file_exists($fname)) {
	sm($chatID, "Mi spiace, ma la lista che seguivi non esiste più.");
	mysqli_query($mysqli, "UPDATE ToolsForLootBot SET crafting_index=0,crafting_list=\"\" WHERE userID=$userID");
}
else {
	$file = file($fname);
	if ($line_n >= count($file)) {
		sm($chatID, "Craft finito.");
		mysqli_query($mysqli, "UPDATE ToolsForLootBot SET crafting_index=0,crafting_list=\"\" WHERE userID=$userID");
	}
	else {
		$next_c = $file[$line_n];
		sm($chatID, $next_c);
		mysqli_query($mysqli, "UPDATE ToolsForLootBot SET crafting_index=".($line_n+1)." WHERE userID=$userID");
	}
	unset($file);
}
}*/

if (isset($cbid)) {
$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    if (mysqli_num_rows($s)===0) {
    	mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
        $s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
    }
$arr = mysqli_fetch_assoc($s);
$data = explode("_", $cbdata);
if ($data[0] == "set") {
        switch ($arr['escludi']) {
        case 0: $base = "Nessun controllo ⚠️";
        break;
        case 1: $base = "Niente a base 🚫";
        break;
        case 2: $base = "Tutto a base 💸";
        break;
		case 3: $base = "Prezzo scrigni 💰";
        break;
        default: $base = "Errore";
        }
		if ($arr['pubblici']==0)
			$privacy = "privati";
		else
			$privacy = "pubblici";
		if ($arr['emoji']==0)
			$em = "❌";
		else
			$em = "✅";
		if ($arr['massivo']==0)
			$massivo = "No";
		else
			$massivo = "Si";
	if ($data[1]=="zaino") {
    	if ($data[2]=='default') $data[2]= 20 - $arr['zaino_perc'];
    	$zaino = $arr['zaino_perc'] + (int) $data[2];
        if ($zaino < 0) $zaino = 0;
        if ($zaino > 100) $zaino = 100;
        
		cb_reply($cbid, "$data[2]%", false, $cbmid,"<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  $zaino% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  ".$arr['ricerca_perc']."% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  ".$arr['sell_max']." 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu);
        mysqli_query($mysqli, "UPDATE ToolsForLootBot SET zaino_perc=$zaino WHERE userID=$userID");
    }
    else if ($data[1]=="ricerca") {
    	if ($data[2]=='default') $data[2]= 90 - $arr['ricerca_perc'];
    	$ricerca = $arr['ricerca_perc'] + (int) $data[2];
        if ($ricerca < 0) $ricerca = 0;
        if ($ricerca > 1000) $ricerca = 1000;
        cb_reply($cbid, "$data[2]%", false, $cbmid, "<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  ".$arr['zaino_perc']."% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  $ricerca% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  ".$arr['sell_max']." 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu);
        mysqli_query($mysqli, "UPDATE ToolsForLootBot SET ricerca_perc=$ricerca WHERE userID=$userID");
    }
	else if ($data[1]=="sellmax") {
    	if ($data[2]=='default') $data[2]= 1000 - $arr['sell_max'];
    	$sell_max = $arr['sell_max'] + (int) $data[2];
        if ($sell_max < 1) $sell_max = 1;
        if ($sell_max > 100000) $sell_max = 100000;
        cb_reply($cbid, "$data[2]", false, $cbmid, "<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  ".$arr['zaino_perc']."% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  ".$arr['ricerca_perc']."% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  $sell_max 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu);
        mysqli_query($mysqli, "UPDATE ToolsForLootBot SET sell_max=$sell_max WHERE userID=$userID");
    }
	else if ($data[1]=="escludi") {
    	if ($data[2]=="ON") $stato = 1;
    	else if ($data[2]=="OFF") $stato = 0;
        else if ($data[2]=="CHEST") $stato = 3;
		else $stato = 2;
        
        switch ($stato) {
        case 0: $base = "Nessun controllo ⚠️";
        break;
        case 1: $base = "Niente a base 🚫";
        break;
        case 2: $base = "Tutto a base 💸";
        break;
		case 3: $base = "Prezzo scrigni 💰";
        break;
        default: $base = "Errore";
        }
        cb_reply($cbid, "Impostazione effettuata", false, $cbmid, "<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  ".$arr['zaino_perc']."% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  ".$arr['ricerca_perc']."% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  ".$arr['sell_max']." 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu);
        mysqli_query($mysqli, "UPDATE ToolsForLootBot SET escludi=$stato WHERE userID=$userID");
    }
	else if ($data[1]=="pubblici") {
		if ($data[2]=="ON") $stato = 1;
    	else $stato = 0;
		
		if ($stato==0)
			$privacy = "privati";
		else
			$privacy = "pubblici";
		
		cb_reply($cbid, "Impostazione effettuata", false, $cbmid, "<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  ".$arr['zaino_perc']."% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  ".$arr['ricerca_perc']."% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  ".$arr['sell_max']." 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu);
		mysqli_query($mysqli, "UPDATE ToolsForLootBot SET pubblici=$stato WHERE userID=$userID");
	}
	else if ($data[1]=="emoji") {
		if ($data[2]=="ON") {$stato = 1; $em = "✅";}
    	else {$stato = 0; $em = "❌";}
		cb_reply($cbid, "Impostazione effettuata", false, $cbmid, "<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  ".$arr['zaino_perc']."% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  ".$arr['ricerca_perc']."% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  ".$arr['sell_max']." 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu);
		mysqli_query($mysqli, "UPDATE ToolsForLootBot SET emoji=$stato WHERE userID=$userID");
	}
	else if ($data[1]=="massivo") {
		if ($data[2]=="ON") {$stato = 1; $massivo = "Si";}
    	else {$stato = 0; $massivo = "No";}
		cb_reply($cbid, "Impostazione effettuata", false, $cbmid, "<b>Impostazioni Mercato</b>
Percentuale di oggetti per i negozi (rispetto alla disponibilità)
•  ".$arr['zaino_perc']."% 🎒
Percentuale dei prezzi per i negozi (rispetto al prezzo del ricerca)
•  ".$arr['ricerca_perc']."% 🔍
Regola per prezzi salvati: ".$base."
Limite oggetti per negozio:  ".$arr['sell_max']." 📦
Privacy negozi: ".$privacy." 🗣
Negozi massivi: ".$massivo." 🗳

<b>Impostazioni Dungeon</b>
Emoji nella mappa: ".$em, $menu);
		mysqli_query($mysqli, "UPDATE ToolsForLootBot SET massivo=$stato WHERE userID=$userID");
	}
}
else if ($data[0] == "get") {
	if ($data[1] == "video") {
		upload_video();
    	if ($data[2] == "1") {
			sv($chatID, "BAADBAADRwMAAjdesVNwX3gbI831cQI", array(array(array("text" => "Torna all'help", "callback_data" => "/help5"))));
    		cb_reply($cbid, "Sto inviando il video...", false, $cbmid, false, true);
        }
        else if ($data[2] == "2") {
			sv($chatID, "BAADBAADcAIAAvbtyVP_94IE0qItkgI", array(array(array("text" => "Torna all'help", "callback_data" => "/help4"))));
    		cb_reply($cbid, "Sto inviando il video...", false, $cbmid, false, true);
        }
        else if ($data[2] == "3") {
			sv($chatID, "BAADBAADNAIAAmXz0FOo0R4dV-gH6gI", array(array(array("text" => "Torna all'help", "callback_data" => "/help4"))));
    		cb_reply($cbid, "Sto inviando il video...", false, $cbmid, false, true);
        }
		else if ($data[2] == "4") {
			sv($chatID, "BAADBAADiwUAAhdhOFDsFO_XCXMIAgI", array(array(array("text" => "Torna all'help", "callback_data" => "/help2"))));
    		cb_reply($cbid, "Sto inviando il video...", false, $cbmid, false, true);
        }
    }
}
}

mb_internal_encoding("UTF-8");
if (mb_strpos($msg, ">")!==false and mb_strpos($msg, "viandante")===false) {
	if (mb_strpos($msg, "migliorare la postazione")!==false && $inoltrato) {//migliora postazione
		$res = mb_ereg_replace("> ", ",", $msg);
		$res = mb_ereg_replace("\n[^🚫]*✅\n", "\n", $res);
		$res = mb_ereg_replace("^.*?,", "/craft\n", $res);
		$res = mb_ereg_replace(" \(.+?\) (\d+?)\/(\d+?) 🚫", "\":\".(\\2 - \\1)", $res, 'e');
		$res = mb_ereg_replace("\n*Continuare\?$", "", $res);
		sm($chatID, "<code>".$res."</code>");
	}
	else {
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
		if (mysqli_num_rows($s)==0) {
		$perc = 100;
		$escludi = 0;
		$max = 1000000000;
			$fetch = false;
			$public = false;
		}
		else {
			$arr = mysqli_fetch_assoc($s);
			$perc = $arr['zaino_perc'];
			$escludi = (int) $arr['escludi'];
			$public = ($arr['pubblici']==0) ? false : true;
			$massivo = ($arr['massivo']==0) ? false : true;
			$max = $arr['sell_max'];
			$fetch = true;
		}
		if (mb_strpos($msg, "Negozi per ")!==false) {
			$shops = explode("Negozi per ", $msg);
			array_shift($shops);
			$upd = "";
			$check_m = 0;
			if (!$fetch) {
				mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
			}
			foreach($shops as $shop) {
				$blocks = explode("\n", $shop);
				$item = trim(substr($blocks[0],0,-1));
				$afterbracket = substr($blocks[1], strpos($blocks[1], "(") +1);
				$price = (int) trim(filter_var(substr($afterbracket, 0, strpos($afterbracket, "§")), FILTER_SANITIZE_NUMBER_INT));
				if (!$price) $price = 1;
				$itemID_q = mysqli_query($mysqli, utf8_decode("SELECT * FROM items WHERE name=\"$item\""));
				if (mysqli_num_rows($itemID_q)>0) {
					$item_i = mysqli_fetch_assoc($itemID_q);
					$itemID = $item_i['id'];
					$rarity = $item_i['rarity'];
					$message.="$item ($rarity): $price §\n";
					if (isset($itemID)) {
						if ((!$fetch) or (!isset($arr['team'])) or ($arr['team'] == "")) $team = "";
						else {
							$team = $arr['team'];
						}
						mysqli_query($mysqli, "REPLACE INTO prezzi (userID, itemID, prezzo, team) VALUES ($userID, $itemID, $price, \"$team\")");
						mysqli_query($mysqli, "UPDATE prezzi SET prezzo=$price WHERE itemID=$itemID AND team=\"$team\"");
						$check_m++;
					}
				}
			}
			if ($check_m>0) {
				if ($fetch and isset($arr['team']) and strlen($arr['team'])>0) $message.="\nImpostate al team ".$arr['team'];
				sm($chatID, $message);
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET last=".((string) time())." WHERE userID=$userID");
			}
			else sm($chatID, "Impossibile identificare item o prezzo");
			mysqli_query($mysqli, "DELETE FROM prezzi WHERE last_update<DATE_SUB(NOW(), INTERVAL 14 DAY)");
		}
		else {
			if (mb_strpos($msg, "Già possiedi:")!==false)
				$text = explode("Già possiedi:", $msg)[0];
			else $text = $msg;
			$lines = explode("\n", $text);
			
			$pietra = 0;
			$pietra_tot = 0;
			$ricavo = 0;
			$codice = 0;
			$previous = "";
			$noinfo=true;
			if (mb_strpos($msg, "Per eseguire i craft spenderai: ")!==false) {
				$raw_craft_cost = mb_substr($msg, mb_strpos($msg, "Per eseguire i craft spenderai: ") + mb_strlen("Per eseguire i craft spenderai: "));
				$raw_craft_cost = mb_substr($raw_craft_cost, 0, mb_strpos($raw_craft_cost, "§"));
				$craft_cost = (int) filter_var($raw_craft_cost, FILTER_SANITIZE_NUMBER_INT);
			}
			foreach ($lines as $line) {
				if (mb_strpos($line, ">")===0) {
					$slices = explode(')', $line);
					if (isset($slices[0])) {
						$open_brackets = mb_strpos($slices[0], '(');
						
						if (isset($open_brackets)) {
							$rarity = mb_substr($slices[0], $open_brackets + 1);
							$slices[0] = mb_substr($slices[0], 0, $open_brackets);
						}
						else $rarity = "Others";
						$ignore = false;
						$all_in_one = false;
						$tot = 0;
						$negoziom = false;
						$baseprice = 0;
						
						if (is_numeric($rarity)) {
							$rarity = filter_var($rarity, FILTER_SANITIZE_NUMBER_INT);
							$tot = ((int) $rarity);
							$quantity = round($tot * ($perc/100));
							$quantity = min($quantity, $max);
							$item = trim(mb_substr($slices[0], 1));
							$rarity = getRarity($item);
							$ignore = true;
						}
						else if (strpos($rarity, ", ")!==false) {
							$d = explode(", ", $rarity);
							$rarity = $d[0];
							$tot = ((int) filter_var($d[1], FILTER_SANITIZE_NUMBER_INT));
							$quantity = round($tot * ($perc/100));
							$quantity = min($quantity, $max);
							$item = trim(mb_substr($slices[0], 1));
							$ignore = true;
						}
						else if (strpos($rarity, " §")!==false and strpos($slices[0], "x ")!==false) {
							$negoziom = true;
							$oldprice = (int) filter_var($rarity, FILTER_SANITIZE_NUMBER_INT);
							$segments = explode("x ", mb_substr($slices[0], 1));
							$raw_quantity = filter_var($segments[0], FILTER_SANITIZE_NUMBER_INT);
							if (isset($raw_quantity)) $quantity = (int) $raw_quantity;
							else $quantity = 0;
							$item = trim($segments[1]);
							$tbaseprice = getPrice($item);
							if (is_numeric($tbaseprice)) $baseprice = (int) $tbaseprice;
							if (strpos($previous, ">") !== 0) {
								$first_word = trim(substr($previous, 0, strpos($previous, " ")));
								if (is_numeric($first_word)) {
									$codice = filter_var($first_word, FILTER_SANITIZE_NUMBER_INT);
								}
							}
							$rarity = "_".$codice;
							$ignore = true;
						}
						else {
							$all_in_one = true;//CRAFTLOOT
						}
						
						
						if (!$ignore) {	
							$di = mb_strpos($slices[0], "di");
							$su = mb_strpos($slices[0], "su");
							$check_c = mb_ereg_search_init($slices[0], "[a-zA-Z]+");//posizione prima parola
							$first_word = mb_ereg_search_pos()[0];                  //posizione prima parola
							if ($di and $check_c and ($di === $first_word or $su === $first_word)) {
								//se la prima parola è di o è su è di Craftloot (altrimenti migliora postazione)
								$raw_quantity = trim(mb_substr($slices[0], 1, $di));
								$raw_data = explode(" ", $raw_quantity);
								$counter = 0;
								foreach ($raw_data as $bit) {
									if (is_numeric($bit)) {
										$numbers[$counter] = (int) $bit;
										$counter++;
									}
								}
								if (isset($numbers[0]) and $numbers[0]) {
									$quantity = (int) $numbers[0];
									if ($numbers[1]) $total=(int) $numbers[1];
								}
								else {
									$quantity = 0;
								}
								
								$raw_item = trim(mb_substr($slices[0], $di + 2));
							}
							else {
								$raw_data = explode(" ", trim(mb_substr($slices[0], 1)));
								$parse = filter_var($raw_data[0], FILTER_SANITIZE_NUMBER_INT);
								$quantity = abs((int) ($parse=="") ? "0" : $parse);
								$num_pos = mb_strpos($slices[0], $parse);
								if (isset($num_pos))
									$raw_item = trim(mb_substr($slices[0], $num_pos + mb_strlen($num_pos)));
								else {
									$raw_item = preg_replace("/^[>0-9\s]*/", "", $slices[0]);
									if ($raw_item == null) $raw_item = "error";
								}
							}
							if ($quantity==0) {
								if (mb_strpos($slices[1], "/") !== false) {
									$ar_slash = explode('/', $slices[1]);
									$aft_slash_space = explode(' ', $ar_slash[1]);
									$quantity = ((int) filter_var($aft_slash_space[0], FILTER_SANITIZE_NUMBER_INT)) - ((int) filter_var($ar_slash[0], FILTER_SANITIZE_NUMBER_INT));
									$slices[1] = $aft_slash_space[1];
								}
								else
									$quantity = 0;
							}
							$raw_item = preg_replace("/> /", "", $raw_item);
							$item = trim($raw_item);
						}
						
						if (preg_match("/[0-9]/", $slices[1])) {
							$price = abs((int) filter_var($slices[1], FILTER_SANITIZE_NUMBER_INT));
							if ($price < 100) $price *= 1000;
						}
						else if (isset($fetch)) {
							$itemID = getID($item);
							$price_q = mysqli_query($mysqli, "SELECT * FROM prezzi WHERE userID=$userID AND itemID=$itemID");
							$arr_p = mysqli_fetch_assoc($price_q);
							if ($arr_p and $arr_p['prezzo']) $price = round($arr_p['prezzo'] * ($arr['ricerca_perc']/100.0));
							else {
								if (isset($arr['team']) and strlen($arr['team'])>0) {
									$price_q = mysqli_query($mysqli, "SELECT * FROM prezzi WHERE itemID=$itemID AND team=\"".$arr['team']."\" ORDER BY last_update DESC");
									$arr_p = mysqli_fetch_assoc($price_q);
									if ($arr_p and $arr_p['prezzo']) $price = round($arr_p['prezzo'] * ($arr['ricerca_perc']/100.0));
									else $price = 1;
								}
								else {
									$price = 1;
								}
							}
						}
						else $price = 1;
						
						if ($rarity == "Craftable" and (!$price or $price<2)) {
							$tab = "items";
							$p_query = mysqli_query($mysqli, utf8_decode("SELECT * FROM $tab WHERE name=\"".$item."\""));
							if (mysqli_num_rows($p_query) > 0) {
								$c_arr = mysqli_fetch_assoc($p_query);
								$price = $c_arr['secret_price'];
							}
							if ($price==0) $price=1;
						}
						
						if ($price===1 and $escludi===1)
							$quantity = 0;
						else if ($escludi===2 and !$slices[1]) $price = 1;
						else if ($escludi===3 and $rarity != "Craftable") $price = chestPrice($rarity) ? chestPrice($rarity) : chestPrice(getRarity($item));
						
						if (!isset($baseprice) or !$baseprice) $baseprice = getPrice($item);
						if ($baseprice and $baseprice>0 and $price<$baseprice) $price = $baseprice;
						if ($quantity>0) $result[($all_in_one) ? "Necessari" : $rarity][] = $item.":".$price.":".$quantity;//AGGIUNTA ITEM
						
						if ($negoziom==true and $oldprice>0 and $oldprice!=$price) $updated_prices .= $item.": ".sprintf("%+d",round((($price - $oldprice)*100.0)/((double) $oldprice)))."%\n";
						
						if ($rarity=="D") {
							$item = trim($item);
							if (strtolower($item) == "pietra anima di legno") {
								$pietra += 1 * ((int) $quantity);
								$pietra_tot += 1 * ((int) $tot);
							}
							else if (strtolower($item) == "pietra anima di ferro") {
								$pietra += 2 * ((int) $quantity);
								$pietra_tot += 2 * ((int) $tot);
							}
							else if (strtolower($item) == "pietra anima preziosa") {
								$pietra += 3 * ((int) $quantity);
								$pietra_tot += 3 * ((int) $tot);
							}
							else if (strtolower($item) == "pietra cuore di diamante") {
								$pietra += 4 * ((int) $quantity);
								$pietra_tot += 4 * ((int) $tot);
							}
							else if (strtolower($item) == "pietra cuore leggendario") {
								$pietra += 5 * ((int) $quantity);
								$pietra_tot += 5 * ((int) $tot);
							}
							else if (strtolower($item) == "pietra spirito epico") {
								$pietra += 6 * ((int) $quantity);
								$pietra_tot += 6 * ((int) $tot);
							}
						}
						
						$ricavo += $quantity * $price;
						
					}
					$noinfo = false;
				}
				$previous = $line;
			}
			$counter = 0;
			$negoziom = false;
			foreach ($result as $rarity => $strings) {
				if ($rarity == "n/a (not found)") continue;
				if (strpos($rarity, "_")===0) {
					$rarity = substr($rarity, 1);
					if ($rarity == "0") continue;
					$code = $rarity;
					$rarity = "<code>@lootplusbot ".$rarity."</code>";
					$negoziom = true;
				}
				$final[$counter/10]="($rarity)";
				$counter += 10 - ($counter % 10);
				if (isset($negoziom) and $negoziom) $final[$counter/10] = "/negoziom ".$code." ";
				foreach ($strings as $s) {
					$final[$counter/10] .= $s.",";
					$counter++;
				}
				$counter += 10 - ($counter % 10);
			}
			if ($counter == 0 and !$noinfo) sm($chatID, "Nessun oggetto da vendere, controlla il formato e la % dello zaino");
			else {
				foreach($final as $message) {
					sm($chatID, (strpos($message, ":")!==false and !$negoziom) ? "/negozio ".substr($message,0,-1).(($public) ? "#" : "").(($massivo) ? "" : "!") : (($negoziom and strpos($message, ":")!==false) ? substr($message, 0, -1) : $message));
				}
			}
			if ($ricavo > 0) sm($chatID, (($all_in_one) ? "Spesa complessiva" : "Ricavo complessivo").": $ricavo §\n\n".($craft_cost>0 ? "Spesa per il craft: $craft_cost §\n".($all_in_one ? "Spesa totale: ".($craft_cost + $ricavo)." §\n\n" : "\n") : "").(($pietra > 0) ? ("Totale punti pietra nel negozio: $pietra\nTotale livelli drago nel negozio: ".((string) round($pietra/70.0, 2)).(($pietra_tot > 0) ? "\n\nTotale punti pietra nello zaino: $pietra_tot\nTotale livelli drago nello zaino: ".((string) round($pietra_tot/70.0, 2)) : "" ))."\n\n" : "").(($updated_prices) ? "Nuovi prezzi:\n".$updated_prices."\n\n" : "" ));
		}
	}
}



$d_menu[] = array(
	"🗺",
	"⬆️",
	"🌐"
);
$d_menu[] = array(
	"⬅️",
	"⬇️",
	"➡️"
);
$d_menu[] = array(
	"Ritorna",
	"Torna all'inizio"
);


if ($inoltrato and $inoltrato_id==280391978 and $document and endswith($document_name, ".txt") and strpos($document_name, "Lista Craft")===0) {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
	}
	$dir = 'Lists/';
	foreach (scandir($dir) as $file) {
		if (strpos($file, ".txt") !== false and strlen($file) - strpos($file, ".txt") - 4 === 0 ) {
			$time = (int) explode("--", $file)[1];
			if (strpos($file,strtolower($username)."--")===0 or $time < time() - 24 * 60 * 60) {
				unlink($dir.$file);
			}
		}
	}
	$fname = $dir.strtolower("$username--".time()."--.txt");
	file_put_contents($fname, fopen(getFile($document), 'r'));
	if(mysqli_query($mysqli, "UPDATE ToolsForLootBot SET crafting_index=1,crafting_list=\"$fname\" WHERE userID=$userID"))
		sm($chatID, "Lista Craft caricata con successo.", array(array(array("text" => "Inizia", "switch_inline_query" => "inizio craft"))));
	else sm($chatID, "Lista Craft non caricata con successo. Puoi segnalare il problema a @Delooo. Errore: ".mysqli_error($mysqli));
}

if ($inoltrato and ($inoltrato_id==171514820 or $inoltrato_id==236880746)) {
	if (mb_strpos($msg, "Giocatore ")===0 or mb_strpos($msg, "Giocatrice ")===0) {
		$nickname = mb_substr($msg, mb_strpos($msg, "\n") + 1);
        $nickname = mb_substr($nickname, mb_strpos($nickname, " ") + 1);
		$nickname = mb_substr($nickname, 0, max(min(mb_strpos($nickname, " "), mb_strpos($nickname, "\n")), 1));
		$voc = false;
		if (strpos($msg, "🏹 ")!==false) {
			$vocazione = mb_substr($msg, mb_strpos($msg, "🏹 ") + mb_strlen("🏹 "));
			$vocazione = mb_substr($vocazione, 0, mb_strpos($vocazione, "\n"));
			$voc = true;
		}
		$dra = false;
		if (strpos($msg, " 🐉")!==false) {
			$drago = mb_substr($msg, 0, mb_strpos($msg, " 🐉"));
			$drago = end(mb_split("\n\n", $drago));
			$drago = mb_substr($drago, 0, mb_strpos($drago, "("));
			$drago = mb_ereg_replace("[^0-9a-zA-Z àáèéìíòóùú\']", "", $drago);
			$dra = true;
		}
		if (isset($nickname)) {
        	if (check_name($nickname)) {
				$q = mysqli_query($mysqli, "SELECT * FROM dragons WHERE nickname=\"$nickname\"");
				$_update = false;
				if (mysqli_num_rows($q)===1) {
					$_update = true;
				}
				if (mysqli_num_rows($q)==0 or ($_update and mysqli_fetch_assoc($q)['inoltro']<$inoltrato_time)) {
					mysqli_query($mysqli, "REPLACE INTO dragons (nickname".($voc ? ", vocazione" : "").($dra ? ", drago" : "").", inoltro) VALUES (\"$nickname\"".($voc ? ", \"$vocazione\"" : "").($dra ? ", \"$drago\"" : "").", $inoltrato_time)");
					sm($chatID, "<b>$nickname</b> ".($_update ? "aggiornato nel": "aggiunto al")." database.", false, 'pred', false, $idmsg);
                    if (!$_update) include "remove_obs_dragons.php";
				} else sm($chatID, "Questa scheda non è abbastanza recente ed è stata ignorata.", false, 'pred', false, $idmsg);
			} else sm($chatID, "Questo nickname non esiste. L'utente potrebbe aver migrato account.");
        }
	}
	else if(mb_strpos($msg, "Stai per inviare uno gnomo servitore al rifugio di ")===0) {
		$emoji_vocazione = mb_substr($msg, 51, 1);
		$vocazione = "";
		switch($emoji_vocazione){
			case "🐓": $vocazione = "Cittadino";
			break;
			case "🦉": $vocazione = "Sciamano Elementalista";
			break;
			case "🐅": $vocazione = "Esploratore Druido";
			break;
			case "🦏": $vocazione = "Barbaro";
			break;
			case "🦊": $vocazione = "Predone";
			break;
			case "🦍": $vocazione = "Spaccateste";
			break;
			case "🐲": $vocazione = "Discepolo dei Draghi";
			break;
			case "🦅": $vocazione = "Incantaspade";
			break;
			case "🕊": $vocazione = "Consacratore Divino";
			break;
			default: $vocazione = "err";
		}
		if($vocazione != "err") {
			$nickname = mb_substr($msg, 53);
			$nickname = mb_substr($nickname, 0, mb_strpos($nickname, " "));
			$drago = mb_substr($msg, mb_strpos($msg, " 🐉"));
			$drago = mb_substr($drago, 2, mb_strpos($drago, " ("));
			$drago = mb_ereg_replace("[^0-9a-zA-Z àáèéìíòóùú\']", "", $drago);
			if (check_name($nickname)) {
				$q = mysqli_query($mysqli, "SELECT * FROM dragons WHERE nickname=\"$nickname\"");
				$_update = false;
				if (mysqli_num_rows($q)===1) {
					$_update = true;
				}
				if (mysqli_num_rows($q)==0 or ($_update and mysqli_fetch_assoc($q)['inoltro']<$inoltrato_time)) {
					mysqli_query($mysqli, "REPLACE INTO dragons (nickname, vocazione, drago, inoltro) VALUES (\"$nickname\", \"$vocazione\", \"$drago\", $inoltrato_time)");
					sm($chatID, "<b>$nickname</b> ".($_update ? "aggiornato nel": "aggiunto al")." database.", false, 'pred', false, $idmsg);
                    if (!$_update) include "remove_obs_dragons.php";
				} else sm($chatID, "Questa ispezione non è abbastanza recente ed è stata ignorata.", false, 'pred', false, $idmsg);
			} else sm($chatID, "Questo nickname non esiste. L'utente potrebbe aver migrato account.");
		}
		else { sm($chatID, "Vocazione non riconosciuta $emoji_vocazione."); }		
	}
}

if ($inoltrato and $inoltrato_id==171514820) {
	if (strpos($msg, "Sei stato aggiunto alla Lista Avventurieri del dungeon ")===0) {
		if (time() - $inoltrato_time > 604799) {
			sm($chatID, "$username, questa istanza è obsoleta");
		}
		else {
			$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
			if (mysqli_num_rows($s)===0) {
				mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
				$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
			}
			$arr = mysqli_fetch_assoc($s);
			if ($arr['page']!='') return;
			$team = $arr['team'];
			$dg = $msg;
			if (strpos($dg, "Dungeon Maledetto") !== false)
				$dg = substr($dg, 0, strpos($dg, "!"));
			$nuova_istanza = substr($dg, 55, -1);
			$nome_dungeon = trim(preg_replace("/ [0-9]+$/u", "", $nuova_istanza));
			switch($nome_dungeon) {
				case "Il Burrone Oscuro": $stanze = 10;
				break;
				case "La Grotta Infestata": $stanze = 15;
				break;
				case "Il Vulcano Impetuoso": $stanze = 20;
				break;
				case "La Caverna degli Orchi": $stanze = 25;
				break;
				case "Il Cratere Ventoso": $stanze = 30;
				break;
				case "Il Deserto Rosso": $stanze = 40;
				break;
				case "La Foresta Maledetta": $stanze = 45;
				break;
				case "La Vetta delle Anime": $stanze = 50;
				break;
				case "Il Lago Evanescente": $stanze = 55;
				break;
				case "Il Labirinto Spettrale": $stanze = 60;
				break;
				case "La Vallata Impervia": $stanze = 75;
				break;
				default: $stanze = 0;
			}
			if ($stanze==0) sm($chatID, "Non conosco questo dungeon ($nome_dungeon), per aggiornare la lista scrivi in privato a @Delooo");
			else {
				if ($team and strlen($team)>0) {
					$dungeon_ID = md5($team.$nuova_istanza);
					$owner = $team;
					$tem = true;
				}
				else {
					$dungeon_ID = md5($userID.$nuova_istanza);
					$owner = $userID;
					$tem = false;
				}
				$vecchio_dungeon_raw = $arr['dungeon'];
				if ($vecchio_dungeon_raw and strlen($vecchio_dungeon_raw)>0) {
					$vecchio_dungeon_vet = explode(":", $vecchio_dungeon_raw);
					$vecchio_dungeon_ID = $vecchio_dungeon_vet[0];
					$vecchio_dungeon_stanza = $vecchio_dungeon_vet[1];
					//mysqli_query($mysqli, "DELETE FROM dungeon WHERE ID=\"$vecchio_dungeon_ID\" and owner==\"$userID\"");
				}
				$cloni = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
				if (mysqli_num_rows($cloni)==0) {
					mysqli_query($mysqli, "INSERT INTO dungeon (ID, creatorID, owner, rooms) VALUES (\"$dungeon_ID\", $userID, \"$owner\", $stanze)");
					mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:0\", page=\"dungeon\" WHERE userID=$userID");
					sm($chatID, "$username, ti trovi nella stanza 0/$stanze del dungeon $nuova_istanza. Spostati liberamente e inoltra le stanze per impostarle nella mappa.", $d_menu, 'pred', false, false, false);
					//pulizia obsoleti
					$week_ago = date ("Y-m-d H:i:s", time() - 60*60*24*7);
					mysqli_query($mysqli, "DELETE FROM dungeon WHERE time<\"$week_ago\"");
				}
				else {
					if ($vecchio_dungeon_ID and $vecchio_dungeon_ID==$dungeon_ID) {
						sm($chatID, "Ti trovi già all'interno di questo dungeon! Rientra con il comando /dungeon.");
					}
					else {
						sm($chatID, "Questo dungeon esiste già, non serve ricrearlo. Ti ho inserito al suo interno. Ora premi /dungeon.");
						mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:0\" WHERE userID=$userID");
					}
				}
			}
		}
	}
	else if (strpos($msg, "Attività membri:")!==false) {
		
		$raw_list = mb_substr($msg, mb_strpos($msg, "Attività membri:") + mb_strlen("Attività membri:\n\n"));
		if (mb_strlen($raw_list)>20) {
		$raw_list_array = mb_split("\n\n", $raw_list);
		$mess = "";
		$mess2 = "";
		$members_to_tag = [];
		$members_not_tag = [];
		foreach ($raw_list_array as $raw_member) {
        	$raw_member = mb_substr($raw_member, mb_strpos($raw_member, " ")+1);
			if (mb_strpos($raw_member, "🐗 0 danni/") !== false) {
				$reborn = mb_substr($raw_member, mb_strpos($raw_member, " ")+1);
				$reborn = mb_substr($reborn, 0, mb_strpos($reborn, " "));
				$member_nick = mb_substr($raw_member, 0, mb_strpos($raw_member, " "));
				$members_to_tag[$reborn][] = "@".$member_nick;
			}
			else {
				$raw_damage = mb_substr($raw_member, mb_strpos($raw_member, "🐗 ") + mb_strlen("🐗 "));
				$damage = (int) filter_var(mb_substr($raw_damage, 0, mb_strpos($raw_damage, " danni/")), FILTER_SANITIZE_NUMBER_INT); 
				$reborn = mb_substr($raw_member, mb_strpos($raw_member, " ")+1);
				$reborn = mb_substr($reborn, 0, mb_strpos($reborn, " "));
				$member_nick = mb_substr($raw_member, 0, mb_strpos($raw_member, " "));
				if ($member_nick and $damage) $members_not_tag[$member_nick."($reborn) - $damage"] = $damage;
			}
		}
		
		/*foreach($members_to_tag as $reborn => $nicks) {
			$mess.=$reborn."\n";
			foreach($nicks as $nick) {
				$mess.=$nick."\n";
			}
		}
		
		if (mb_strlen($mess)>0) {
			$result = "<b>Membri da taggare per il boss corrente:</b>\n".($mess ? $mess : "Nessuno");
			sm($chatID, $result);
		}*/
		
		arsort($members_not_tag);
		foreach($members_not_tag as $line => $dam) {
			$mess2.=$line."\n";
		}
		
		if (mb_strlen($mess2)>0) {
			$result = "<b>Membri che hanno colpito il boss corrente in ordine di danno:</b>\n".($mess2 ? $mess2 : "Nessuno");
			sm($chatID, $result);
		}
		}
	}
	else if (strpos($msg, "Accetti l'incarico di questo oggetto?")!==false) {
		$dir = 'Lists/';
		$item = preg_replace("/.*?\.\s\s/s", "", $msg);
		$item = preg_replace("/ \(\w+\).*/s", "", $item);
		$text= craft_list($item);
		if (!$text or $text == "")
			sm($chatID, "Questa roba non ha senso! Contatta @Delooo. Debug: $item");
		else {
			$item = preg_replace("/\s/", "_", $item);
			foreach (scandir($dir) as $file) {
				if (strpos($file, ".txt") !== false and strlen($file) - strpos($file, ".txt") - 4 === 0 ) {
					$time = (int) explode("--", $file)[1];
					if (strpos($file,"_".strtolower($item)."--")===0 or $time < time() - 24 * 60 * 60) {
						unlink($dir.$file);
					}
				}
			}
			$fname = $dir."_".strtolower($item."--".time()."--.txt");
			file_put_contents($fname, $text);
			if(mysqli_query($mysqli, "UPDATE ToolsForLootBot SET crafting_index=0,crafting_list=\"$fname\" WHERE userID=$userID"))
				sm($chatID, "Lista Craft caricata con successo.", array(array(array("text" => "Inizia", "switch_inline_query" => "inizia craft"))));
			else sm($chatID, "Lista Craft non caricata con successo. Puoi segnalare il problema a @Delooo. Errore: ".mysqli_error($mysqli));
		}
	}
	else {
		if (time() - $inoltrato_time > 604799) {
			sm($chatID, "$username, questo messaggio è troppo vecchio.");
		}
		else {
			$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
			if (mysqli_num_rows($s)!=0) {
				$arr = mysqli_fetch_assoc($s);
				if ($arr['page']!='dungeon') return;
				$dungeon_raw = $arr['dungeon'];
				if ($dungeon_raw and strlen($dungeon_raw)>0) {
					$dungeon_arr = explode(":", $dungeon_raw);
					$dungeon_ID = $dungeon_arr[0];
					$dungeon_stanza = $dungeon_arr[1];
					$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
					if ($dungeon_stanza == "L$numero") {
						$direzione = "sinistra";
					}
					else if ($dungeon_stanza == "C$numero") {
						$direzione = "centro";
					}
					else if ($dungeon_stanza == "R$numero") {
						$direzione = "destra";
					}
					else {
						$direzione = "nessuna";
					}
					$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
					if (mysqli_num_rows($d) == 1) {
						$d_arr = mysqli_fetch_assoc($d);
						$stanze = $d_arr['rooms'];
						$riepilogo = true;
						if (strpos($msg, "Stanza ")===0) {
							$cerca_num = substr($msg, 7, strpos($msg, "/") - 7);
							$num = (int) filter_var($cerca_num, FILTER_SANITIZE_NUMBER_INT);
							$pos = substr($dungeon_stanza, 0, 1);
							if ($pos=="0") $pos = "C";
							switch ($pos) {
								case "C": $direzione = 'centro';
								break;
								case "R": $direzione = 'destra';
								break;
								case "L": $direzione = 'sinistra';
								break;
								default: $direzione = '???';
							}
							if ($num>1 and $num<=$stanze) {
								$num--;
								sm($chatID, "$username, sei stato teletrasportato alla stanza precedente, la numero $num/$stanze ($direzione). Avanza nella direzione giusta.", $d_menu, 'pred', false, false, false);
								mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:$pos$num\" WHERE userID=$userID");
								$riepilogo = false;
							}
							else if ($num==1) {
								sm($chatID, "$username, sei stato teletrasportato alla stanza precedente, quella iniziale (0/$stanze). Avanza nella direzione giusta.", $d_menu, 'pred', false, false, false);
								mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:0\" WHERE userID=$userID");	
								$riepilogo = false;
							}
						}
						else if ($numero<=0) {
							sm($chatID, "Non sei in nessuna stanza effettiva. Avanza per entrare nella prima.");
							$riepilogo = false;
						}
						else if (strpos($msg, "puoi sfidarlo per ottenere il suo bottino e proseguire, oppure scappare") !== false) {
							if (strpos($msg, " di livello ")!== false and strpos($msg, "L'aria si fa più pesante verso la prossima stanza.")===false) {
								$from_livello = substr($msg, strpos($msg, " di livello "));
								$fino_virgola = substr($from_livello, 0, strpos($from_livello, ","));
								$livello = abs((int) filter_var($fino_virgola, FILTER_SANITIZE_NUMBER_INT));
								$ora = (int) date("G", $inoltrato_time);
								if ($ora<7) {
									$_livello = "$livello ridotto a ".((string) $livello - 5)." per via della luna,";
									$livello -= 5;
									if ($livello<=0) $livello = 1;
								}
								else
									$_livello = (string) $livello;
								$contenuto = -$livello;
								sm($chatID, "Ho inserito un mostro di livello $_livello nella stanza $numero/$stanze ($direzione)");
							}
							else {
								$contenuto = 1;
								sm($chatID, "Ho inserito un mostro nella stanza $numero/$stanze ($direzione)");
							}
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=$contenuto WHERE ID=\"$dungeon_ID\"");
						}
						//MARCHINGEGNO
						else if (strpos($msg, "ho appena invertito le scelte della stanza ") !== false) {
							$riepilogo = false;
							$raw_stanza = substr($msg, strpos($msg, "ho appena invertito le scelte della stanza ") + strlen("ho appena invertito le scelte della stanza "));
							$raw_stanza = substr($raw_stanza, 0, strpos($raw_stanza, ", buon divertimento!"));
							$stanza_sost = (int) filter_var($raw_stanza, FILTER_SANITIZE_NUMBER_INT);
							sm($chatID, "Ho segnalato la sostituzione della stanza $stanza_sost di questo dungeon.");
							if ($stanza_sost and $stanza_sost>0 and $stanza_sost<=$stanze) mysqli_query($mysqli, "UPDATE dungeon SET L$stanza_sost=26,C$stanza_sost=26,R$stanza_sost=26 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "ti ritrovi in un ambiente aperto, con alberi e liane") !== false) {
							$contenuto = 2;
							sm($chatID, "Ho inserito un'anziana signora nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=2 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "stanza suddivisa in due") !== false) {
							$contenuto = 3;
							sm($chatID, "Ho inserito una stanza suddivisa in due nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=3 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "con un pozzo al centro ed uno schermino") !== false) {
							$contenuto = 4;
							sm($chatID, "Ho inserito un pozzo nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=4 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "ci sono 3 leve") !== false or strpos($msg, "rivela tre leve di legno") !== false) {
							$contenuto = 5;
							sm($chatID, "Ho inserito le tre leve nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=5 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "incontri un marinaio dall'aria furba") !== false) {
							$contenuto = 6;
							sm($chatID, "Ho inserito un marinaio nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=6 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "incontri un viandante, ti propone alcuni oggetti") !== false) {
							$contenuto = 7;
							sm($chatID, "Ho inserito un viandante nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=7 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "stanza piena d'oro luccicante e una spada conficcata") !== false) {
							$contenuto = 8;
							sm($chatID, "Ho inserito la spada nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=8 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "vedi un mucchietto di monete") !== false) {
							$contenuto = 9;
							sm($chatID, "Ho inserito un mucchietto di monete nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=9 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "Appena entrato nella stanza vedi nell'angolo un") !== false) {
							$contenuto = 10;
							sm($chatID, "Ho inserito qualcuno che chiede aiuto nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=10 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "muro si apre ed esce l'immenso drago") !== false) {
							$contenuto = 11;
							sm($chatID, "Ho inserito il drago nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=11 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "sembra esserci uno scrigno pronto per essere aperto") !== false) {
							$contenuto = 12;
							sm($chatID, "Ho inserito uno scrigno nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=12 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "per raggiungere la prossima stanza, una trappola") !== false or strpos($msg, "scivoli su una pozzanghera giallognola") !== false or strpos($msg, "lo premi e ti cade addosso un pietrone") !== false or strpos($msg, "goblin che ti colpisce") !== false) {
							$contenuto = 13;
							sm($chatID, "Ho inserito una trappola nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=13 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "una pulsantiera") !== false) {
							$contenuto = 14;
							sm($chatID, "Ho inserito una pulsantiera nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=14 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "noti subito una strana fontana situata") !== false) {
							$contenuto = 15;
							sm($chatID, "Ho inserito una fontana nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=15 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "esprimi un desiderio") !== false) {
							$contenuto = 16;
							sm($chatID, "Ho inserito un portale del desiderio nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=16 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "una fessura sul muro di fronte") !== false) {
							$contenuto = 17;
							sm($chatID, "Ho inserito una fessura per monetine nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=17 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "un taglio che la percorre per tutta la sua larghezza") !== false) {
							$contenuto = 18;
							sm($chatID, "Ho inserito un'ascia nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=18 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "al loro posto 3 incisioni con un pulsante ciascuna") !== false) {
							$contenuto = 19;
							sm($chatID, "Ho inserito le tre incisioni nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=19 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "incontri un predone del deserto") !== false) {
							$contenuto = 20;
							sm($chatID, "Ho inserito un predone del deserto nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=20 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "Stanza della Meditazione") !== false) {
							$contenuto = 21;
							sm($chatID, "Ho inserito la stanza della meditazione nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=21 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "una stanza apparentemente vuota") !== false) {
							$contenuto = 22;
							sm($chatID, "Ho inserito la stanza vuota nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=22 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "ti trovi davanti ad altre due porte") !== false) {
							$contenuto = 23;
							sm($chatID, "Ho inserito due porte nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=23 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "una stanza con un piccolo specchio al centro") !== false) {
							$contenuto = 24;
							sm($chatID, "Ho inserito uno specchio nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=24 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "digita qualcosa su un marchingegno strano") !== false) {
							$contenuto = 25;
							sm($chatID, "Ho inserito un marchingegno nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=25 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "vedi un signore anziano con gli occhi sbarrati") !== false) {
							$contenuto = 27;
							sm($chatID, "Ho inserito un anziano veggente nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=27 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "ti paralizza") !== false and strpos($msg, "scambieresti") !== false) {
							$contenuto = 28;
							sm($chatID, "Ho inserito una pozione nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=28 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "si presenta come Bombarolo") !== false) {
							$contenuto = 29;
							sm($chatID, "Ho inserito un bombarolo nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=29 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "una stanza piena di esplosivi") !== false) {
							$contenuto = 30;
							sm($chatID, "Ho inserito degli esplosivi nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=30 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "si presenta come il Gioielliere") !== false) {
							$contenuto = 31;
							sm($chatID, "Ho inserito un gioielliere nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=31 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "si tratta di un Mercante Draconico") !== false) {
							$contenuto = 32;
							sm($chatID, "Ho inserito un parco di draghi con mercante nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=32 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "da una potentissima energia magica") !== false) {
							$contenuto = 33;
							sm($chatID, "Ho inserito dell'energia magica nella stanza $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=33 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "Stanza del Cuore e dello Spirito") !== false) {
							$contenuto = 34;
							sm($chatID, "Ho inserito una stanza trasparente in posizione $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=34 WHERE ID=\"$dungeon_ID\"");
						}
                        else if (strpos($msg, "la maledizione Unna") !== false) {
							$contenuto = 35;
							sm($chatID, "Ho inserito una maledizione Unna in posizione $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=35 WHERE ID=\"$dungeon_ID\"");
						}
						else if (strpos($msg, "immenso crepaccio") !== false) {
							$contenuto = 36;
							sm($chatID, "Ho inserito un crepaccio in posizione $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=36 WHERE ID=\"$dungeon_ID\"");
						}
                        else if (strpos($msg, "piena di polvere") !== false) {
							$contenuto = 37;
							sm($chatID, "Ho inserito una stanza piena di polvere in posizione $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=37 WHERE ID=\"$dungeon_ID\"");
						}else if (strpos($msg, "un vicolo cieco") !== false) {
							$contenuto = 38;
							sm($chatID, "Ho inserito un vicolo cieco in posizione $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=38 WHERE ID=\"$dungeon_ID\"");
						}else if (strpos($msg, "trappola piazzata sul muro") !== false) {
							$contenuto = 39;
							sm($chatID, "Ho inserito una trappola sul muro in posizione $numero/$stanze ($direzione)");
							mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=39 WHERE ID=\"$dungeon_ID\"");
						}
						else {
							$contenuto = 0;
							sm($chatID, "Non conosco questa stanza, mi dispiace. Se vuoi che venga aggiunta contatta l'amministratore @Delooo.");
						}
						//Rimando il riepilogo
						if ($numero == 0 and $riepilogo) {
							sm($chatID, "$username, ti trovi nella stanza 0/$stanze del dungeon. Spostati liberamente e inoltra le stanze per impostarle nella mappa.", $d_menu, 'pred', false, false, false);
						}
						else if (isset($riepilogo)) {
							sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);					
						}
					}
					else {
						sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
						mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
					}
				}
			}
		}
	}
}
else if ($inoltrato and $inoltrato_id==$botID and strpos($msg, "Codice condivisione: ")!== false) {
	$codice = explode("Codice condivisione: ", $msg)[1];
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='') return;
	$team = $arr['team'];
	if ($team and strlen($team)>0) {
		$owner = $team;
		$tem = true;
	}
	else {
		$owner = $userID;
		$tem = false;
	}
	$q = mysqli_query($mysqli, utf8_decode("SELECT * FROM dungeon WHERE ID=\"".$codice."\""));
	if (mysqli_num_rows($q) === 1) {
		$dungeon_found = mysqli_fetch_assoc($q);
		if ($dungeon_found['owner'] == $owner ) {
			sm($chatID, "Questo dungeon è già fra quelli accessibili da te.");
		}
		else if ($codice and strlen($codice) == 32) {
			$creator = $dungeon_found['creatorID'];
			$creator_s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$creator");
			if (mysqli_num_rows($creator_s) === 1) {
				$creator_a = mysqli_fetch_assoc($creator_s);
				$creator_name = $creator_a['username'];
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$codice:0\" WHERE userID=$userID");
				sm($chatID, "$username, ti ho trasportato all'inizio del dungeon appartenente a $creator_name. Ora premi /dungeon.");
				sm($creator, "$username è entrato nel tuo dungeon con il codice condivisione.");
			}
		}
	}
	else sm($chatID, "Il dungeon non esiste.");
}

if ($msg == "🗺") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	$emoji = (bool) $arr['emoji'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$d_arr = mysqli_fetch_assoc($d);
			$stanze = $d_arr['rooms'];
			for ($i=1; $i<=$stanze; $i++) {
				$ii = $i<10 ? "0$i" : "$i";
				if ($dungeon_stanza == "L$i") {
					$testo.="$ii 📍".getRoom($d_arr["L$i"], $emoji)." - ".getRoom($d_arr["C$i"], $emoji)." - ".getRoom($d_arr["R$i"], $emoji)."\n";
				}
				else if ($dungeon_stanza == "C$i") {
					$testo.="$ii ".getRoom($d_arr["L$i"], $emoji)." - 📍".getRoom($d_arr["C$i"], $emoji)." - ".getRoom($d_arr["R$i"], $emoji)."\n";
				}
				else if ($dungeon_stanza == "R$i") {
					$testo.="$ii ".getRoom($d_arr["L$i"], $emoji)." - ".getRoom($d_arr["C$i"], $emoji)." - 📍".getRoom($d_arr["R$i"], $emoji)."\n";
				}
				else {
					$testo.="$ii ".getRoom($d_arr["L$i"], $emoji)." - ".getRoom($d_arr["C$i"], $emoji)." - ".getRoom($d_arr["R$i"], $emoji)."\n";
				}
			}
			sm($chatID, $testo);
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			if ($numero == 0) {
				sm($chatID, "$username, ti trovi nella stanza 0/$stanze del dungeon. Spostati liberamente e inoltra le stanze per impostarle nella mappa.", $d_menu, 'pred', false, false, false);
			}
			else {
				if ($dungeon_stanza == "L$numero") {
					$direzione = "sinistra";
				}
				else if ($dungeon_stanza == "C$numero") {
					$direzione = "centro";
				}
				else if ($dungeon_stanza == "R$numero") {
					$direzione = "destra";
				}
				else $direzione = "???";
				$contenuto = $d_arr["$dungeon_stanza"];
				sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);					
			}
		}
	}
}
else if ($msg=="🌐") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = isset($arr['dungeon']) ? $arr['dungeon'] : false;
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$d_arr = mysqli_fetch_assoc($d);
			$stanze = $d_arr['rooms'];
			$scoperte = 0;
			$ignote = 0;
			for ($i=1; $i<=$stanze; $i++) {
				$_scoperte = ($d_arr["L$i"] ? 1 : 0) + ($d_arr["C$i"] ? 1 : 0) + ($d_arr["R$i"] ? 1 : 0);
				$scoperte += $_scoperte;
				$ignote += 3 - $_scoperte;
			}
			sm($chatID, "Stanze mappate: $scoperte\nStanze mancanti: $ignote\nLunghezza del dungeon: $stanze\n\nCodice condivisione: ".$dungeon_ID, array(array(array("text" => "Grafico", "callback_data" => "/grafico"), array("text" => "Partecipanti", "callback_data" => "/mates"))));
		}
	}
}
else if ($msg=="/mates") {
	if (isset($cbid)) cb_reply($cbid, "Partecipanti alla mappa", false, $cbmid, false, true);
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		if ($dungeon_ID and strlen($dungeon_ID) == 32) {
			$postext = "Posizioni dei partecipanti alla mappa:\n";
			$mates_s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE dungeon LIKE \"".$dungeon_ID.":%\"");
			if (mysqli_num_rows($mates_s) != false and mysqli_num_rows($mates_s) > 0) {
				while ($mate = mysqli_fetch_assoc($mates_s)) {
					$dungeon_arr = explode(":", $mate['dungeon']);
					$dungeon_ID = $dungeon_arr[0];
					$dungeon_stanza = $dungeon_arr[1];
					$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
					if ($dungeon_stanza == "L$numero") {
						$direzione = "sinistra";
					}
					else if ($dungeon_stanza == "C$numero") {
						$direzione = "centro";
					}
					else if ($dungeon_stanza == "R$numero") {
						$direzione = "destra";
					}
					else {
						$direzione = "nessuna";
					}
					$postext .= "<b>".$mate['username']."</b> => ${numero}, ${direzione}\n";
				}
				sm($chatID, $postext);
			}
		}
	}
}
else if ($msg== "/grafico") {
	if (isset($cbid)) cb_reply($cbid, "Grafico del dungeon", false, $cbmid, false, true);
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)!=0) {
		$arr = mysqli_fetch_assoc($s);
		if ($arr['page']!='dungeon') return;
		$dungeon_raw = $arr['dungeon'];
		if ($dungeon_raw and strlen($dungeon_raw)>0) {
			$dungeon_arr = explode(":", $dungeon_raw);
			$dungeon_ID = $dungeon_arr[0];
			$dungeon_stanza = $dungeon_arr[1];
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
			if (mysqli_num_rows($d) == 1) {
				$d_arr = mysqli_fetch_assoc($d);
				$stanze = (int) $d_arr['rooms'];
				$g_data = [];
				for ($i=1; $i<=$stanze; $i++) {
					if (!isset($g_data[$d_arr["L$i"] >= 0 ? $d_arr["L$i"] : 1])) $g_data[$d_arr["L$i"] >= 0 ? $d_arr["L$i"] : 1] = 0;
					if (!isset($g_data[$d_arr["C$i"] >= 0 ? $d_arr["C$i"] : 1])) $g_data[$d_arr["C$i"] >= 0 ? $d_arr["C$i"] : 1] = 0;
					if (!isset($g_data[$d_arr["R$i"] >= 0 ? $d_arr["R$i"] : 1])) $g_data[$d_arr["R$i"] >= 0 ? $d_arr["R$i"] : 1] = 0;
					$g_data[$d_arr["L$i"] >= 0 ? $d_arr["L$i"] : 1] += 1;
					$g_data[$d_arr["C$i"] >= 0 ? $d_arr["C$i"] : 1] += 1;
					$g_data[$d_arr["R$i"] >= 0 ? $d_arr["R$i"] : 1] += 1;
				}
				$titolo = "Riepilogo stanze";
				$final_data = [];
				$final_legend = [];
				$final_color = [];
				asort($g_data);
				foreach ($g_data as $id => $quant) {
					$final_data[] = $quant;
					$final_legend[] = getRoom($id)." (%d)";
					$final_color[] = getColorOfRoom($id);
				}
				
				$final_output = 'pie'.$dungeon_ID.rand(0,10000000).'.png';
				require_once ('Graph/jpgraph/src/jpgraph.php');
				require_once ('Graph/jpgraph/src/jpgraph_pie.php');
				

				// Create the Pie Graph. 
				$graph = new PieGraph(1080,870);

				$theme_class="DefaultTheme";
				//$graph->SetTheme(new $theme_class());

				// Set A title for the plot
				$graph->title->Set($titolo);
				$graph->SetBox(true);

				// Create
				$p1 = new PiePlot($final_data);
				$graph->Add($p1);

				$p1->ShowBorder();
				$p1->SetColor('black');
                // Show absolute values 
				$p1->SetLabelType(PIE_VALUE_ABS);

				$p1->value->SetFormat('%d'); 
				$p1->value->Show();
				
				$p1->SetSliceColors($final_color);
				$p1->SetLegends($final_legend);
				
                $graph->Stroke($final_output);
	
				spng($chatID, $final_output, false, 'Grafico delle stanze mappate');
				unlink($final_output);
			}
			else {
				sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
			}
		}
	}
}
else if ($msg=="Ritorna") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	mysqli_query($mysqli, "UPDATE ToolsForLootBot SET page=\"\" WHERE userID=$userID");
	sm($chatID, "Hai sospeso la mappatura del dungeon. Potrai riprenderla liberamente con il comando /dungeon.", "nascondi");
}
else if ($msg=='/dungeon') {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			$dungeon_data = mysqli_fetch_assoc($d);
			$stanze = $dungeon_data['rooms'];
			if ($numero == 0) {
				sm($chatID, "$username, ti trovi nella stanza 0/$stanze del dungeon. Spostati liberamente e inoltra le stanze per impostarle nella mappa.", $d_menu, 'pred', false, false, false);
			}
			else {
				if ($dungeon_stanza == "L$numero") {
					$direzione = "sinistra";
				}
				else if ($dungeon_stanza == "C$numero") {
					$direzione = "centro";
				}
				else if ($dungeon_stanza == "R$numero") {
					$direzione = "destra";
				}
				else $direzione = "???";
				$contenuto = $dungeon_data["$dungeon_stanza"];
				sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);
			}
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET page=\"dungeon\" WHERE userID=$userID");
		}
		else {
			sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.");
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\" WHERE userID=$userID");
		}
	}
	else sm($chatID, "Non sei in nessun dungeon al momento. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare.");
}
else if (strpos($msg, "/svuota")===0) {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)!=0) {
		$arr = mysqli_fetch_assoc($s);
		if ($arr['page']!='dungeon') return;
		$dungeon_raw = $arr['dungeon'];
		if ($dungeon_raw and strlen($dungeon_raw)>0) {
			$dungeon_arr = explode(":", $dungeon_raw);
			$dungeon_ID = $dungeon_arr[0];
			$dungeon_stanza = $dungeon_arr[1];
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			if ($dungeon_stanza == "L$numero") {
				$direzione = "sinistra";
			}
			else if ($dungeon_stanza == "C$numero") {
				$direzione = "centro";
			}
			else if ($dungeon_stanza == "R$numero") {
				$direzione = "destra";
			}
			else {
				$direzione = "nessuna";
			}
			$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
			if (mysqli_num_rows($d) == 1) {
				$d_arr = mysqli_fetch_assoc($d);
				$stanze = $d_arr['rooms'];
				$riepilogo = true;
				if ($numero<=0) {
					sm($chatID, "Non sei in nessuna stanza effettiva. Avanza per entrare nella prima.");
					$riepilogo = false;
				}
				else {
					$contenuto = 0;
					sm($chatID, "Ho svuotato la stanza $numero/$stanze ($direzione)");
					mysqli_query($mysqli, "UPDATE dungeon SET $dungeon_stanza=0 WHERE ID=\"$dungeon_ID\"");
				}
				if ($numero == 0 and $riepilogo) {
					sm($chatID, "$username, ti trovi nella stanza 0/$stanze del dungeon. Spostati liberamente e inoltra le stanze per impostarle nella mappa.", $d_menu, 'pred', false, false, false);
				}
				else if (isset($riepilogo)) {
					sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);					
				}
			}
			else {
				sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
			}
		}
	}
}
else if ($msg=="⬆️") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			$dungeon_data = mysqli_fetch_assoc($d);
			$stanze = $dungeon_data['rooms'];
			$numero++;
			if ($numero>$stanze) sm($chatID, "Non puoi proseguire, in quanto ti trovi all'ultima stanza.");
			else {
				$nuova_stanza = "C".((string) $numero);
				$direzione = "centro";
				$contenuto = $dungeon_data["$nuova_stanza"];
				sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:$nuova_stanza\" WHERE userID=$userID");
			}
		}
		else {
			sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
		}
	}
}
else if ($msg=="⬅️") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			$dungeon_data = mysqli_fetch_assoc($d);
			$stanze = $dungeon_data['rooms'];
			$numero++;
			if ($numero>$stanze) sm($chatID, "Non puoi proseguire, in quanto ti trovi all'ultima stanza.");
			else {
				$nuova_stanza = "L".((string) $numero);
				$direzione = "sinistra";
				$contenuto = $dungeon_data["$nuova_stanza"];
				sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:$nuova_stanza\" WHERE userID=$userID");
			}
		}
		else {
			sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
		}
	}
}
else if ($msg=="➡️") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			$dungeon_data = mysqli_fetch_assoc($d);
			$stanze = $dungeon_data['rooms'];
			$numero++;
			if ($numero>$stanze) sm($chatID, "Non puoi proseguire, in quanto ti trovi all'ultima stanza.");
			else {
				$nuova_stanza = "R".((string) $numero);
				$direzione = "destra";
				$contenuto = $dungeon_data["$nuova_stanza"];
				sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:$nuova_stanza\" WHERE userID=$userID");
			}
		}
		else {
			sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
		}
	}
}
else if ($msg=="⬇️") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$numero = (int) filter_var($dungeon_stanza, FILTER_SANITIZE_NUMBER_INT);
			$dungeon_data = mysqli_fetch_assoc($d);
			$stanze = $dungeon_data['rooms'];			
			if ($numero<=0) sm($chatID, "Non puoi andare più indietro della stanza 0.");
			else if ($numero==1) {
				sm($chatID, "$username, ti trovi nella stanza 0/$stanze del dungeon. Spostati liberamente e inoltra le stanze per impostarle nella mappa.", $d_menu, 'pred', false, false, false);
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:0\" WHERE userID=$userID");
			}
			else {
				if ($dungeon_stanza == "L$numero") {
					$numero--;
					$direzione = "sinistra";
					$nuova_stanza = "L$numero";
				}
				else if ($dungeon_stanza == "C$numero") {
					$numero--;
					$direzione = "centro";
					$nuova_stanza = "C$numero";
				}
				else if ($dungeon_stanza == "R$numero") {
					$numero--;
					$direzione = "destra";
					$nuova_stanza = "R$numero";
				}
				else {
					$direzione = "centro";
					$nuova_stanza = "C1";
				}
				$contenuto = $dungeon_data["$nuova_stanza"];
				sm($chatID, "$username ti trovi nella stanza $numero/$stanze ($direzione)".(($contenuto == 0) ? ", non so cosa contiene. Inoltra il contenuto per impostarlo." : ", che dovrebbe contenere \"".getRoom($contenuto)."\". Se non è così, inoltra il giusto contenuto per aggiornarla." ), $d_menu, 'pred', false, false, false);
				mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:$nuova_stanza\" WHERE userID=$userID");
			}
		}
		else {
			sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
		}
	}
}
else if ($msg=="Torna all'inizio") {
	$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	if (mysqli_num_rows($s)===0) {
		mysqli_query($mysqli, "INSERT INTO ToolsForLootBot (userID, username) VALUES ($userID, \"$username\")");
		$s = mysqli_query($mysqli, "SELECT * FROM ToolsForLootBot WHERE userID=$userID");
	}
	$arr = mysqli_fetch_assoc($s);
	if ($arr['page']!='dungeon') return;
	$dungeon_raw = $arr['dungeon'];
	if ($dungeon_raw and strlen($dungeon_raw)>0) {
		$dungeon_arr = explode(":", $dungeon_raw);
		$dungeon_ID = $dungeon_arr[0];
		$dungeon_stanza = $dungeon_arr[1];
		$d = mysqli_query($mysqli, "SELECT * FROM dungeon WHERE ID=\"$dungeon_ID\"");
		if (mysqli_num_rows($d) == 1) {
			$dungeon_data = mysqli_fetch_assoc($d);
			$stanze = $dungeon_data['rooms'];
			sm($chatID, "$username, sei ritornato alla stanza 0/$stanze del dungeon. Spostati liberamente e inoltra le stanze per impostarle nella mappa.", $d_menu, 'pred', false, false, false);
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"$dungeon_ID:0\" WHERE userID=$userID");
		}
		else {
			sm($chatID, "Error 404: Il dungeon in cui ti trovavi non esiste più. Inoltra da Loot Bot il messaggio di aggiunta ad un'istanza per iniziare con uno nuovo.", "nascondi");
			mysqli_query($mysqli, "UPDATE ToolsForLootBot SET dungeon=\"\", page=\"\" WHERE userID=$userID");
		}
	}
}