# ⛔ editings.eu Dev Lock
Limita l'accesso all'ambiente di sviluppo di editings.eu ai soli utenti autenticati, reindirizzando tutti gli altri alla home page. Si tratta di un plugin molto semplice, ma particolarmente utile per creare pagine di manutenzione da mostrare agli utenti mentre il resto del sito web si trova in una fase avanzata dello sviluppo.

<img width="3802" height="1804" alt="image" src="https://github.com/user-attachments/assets/d38b2ab8-40ba-417e-8cb2-2a09d1f00b69" />

Il presente screenshot è stato catturato il 20 luglio 2026 con il plugin in esecuzione.

# ⚙️ Configurazione
Il plugin forza il sito web a reindirizzare un utente non autenticato alla home page impostata all'interno del pannello **Impostazioni > Lettura**. Per bypassare questo _blocco_, è sufficiente effettuare l'accesso al proprio account dal pannello di amministrazione di WordPress.

# ⚙️ Aggiungere eccezioni
Per permettere all'utente di consultare altre pagine oltre alla home page impostata dal pannello di amministrazione di WordPress, è possibile aggiungere delle eccezioni all'array "$editings_eu_dev_lock_allowed_pages" (Riga 18). Utile per permettere all'utente di consultare le pagine legali.
```php
$editings_eu_dev_lock_allowed_pages = array(
	10342, // Informativa Privacy
	10353, // Etica dei contenuti
	10348, // Informativa Cookie
);
```

# 🖌️ Personalizzazione
Per installare il plugin, è sufficiente scaricare la release. È possibile modificare le informazioni di base senza troppi problemi ✨
Testato su ambiente WordPress 7.0.2 con PHP 8.4.x. Potrebbe presentare problemi di incompatibilità con versioni di WordPress e PHP più vetuste.
