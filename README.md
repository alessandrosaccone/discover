# discover
Sections realized by me (alessandro saccone): Home, Visite, Profilo
Sections realized by Mario: Guide, Login

Nella cartella js sono presenti tutti i javascript inerenti alle varie sezioni nella forma script_nome-sezione.js (si badi che script_app-query.js non viene utilizzato, è stato mantenuto per scopi futuri di utilizzo).
Nella cartella image sono presenti le immagini utilizzate per il progetto.
Nella cartella css sono presenti i css delle varie sezioni + bootstrap. Si noti che in style.css sono presenti le classi inerenti a tutte le pagine (il banner, ad esempio).
Per ogni sezione del sito sono presenti sia l'html che uno o più file php gestiti dinamicamente per mezzo di AJAX o JQuery. 
app.html e app.php riguardano la sezione Visite del sito, bacheca.html, bacheca.php (e bacheca_fine.html, versione di bacheca.html con un messaggio di success) riguardano la sezione Bacheca. Di questa sezione sono presenti anche bacheca_schede.php per la visualizzazione delle schede pubblicate, bacheca_form.php per la pubblicazione delle schede, bacheca_wol.php e delete_schede.php per l'eliminazione di una scheda.
In guide.html e guide.php sono presenti i file per la gestione della sezione Guide. In home.html è presente l'html della Home.
I file login.html, login.php, login_error.html, login_guide.html, login_piccolo.html, logout.php, logout_transizione.php e registrazione.php sono i file inerenti rispettivamente alla gestione del login con success ed errore, a quella del login per le guide, ad una versione responsiveness del login, alla gestione del logout e della registrazione.
Tutti i php raggiungono la connessione con il db mediante connect.php.


