<?php 
	/*
	* Első magyar fordítás 1.3 verzióig: Váczy Attila <vaczy.a.m@gmail.com>
	* Magyar fordítás 1.4.2 verzióig (az 1.3 bázis részbeni újrafordításával, módosításával): Lukács Péter <programozo@lukacspeter.hu>
	*/
	
return array(


	'administration tool name test_mail_settings' => 'Email beállítások tesztelése',
	'administration tool desc test_mail_settings' => 'Ezzel az egyszerű eszközzel küldhet teszt email üzenetet, hogy ellenőrizze az Feng Office email beállításait.',
	'administration tool name mass_mailer' => 'Tömeges email küldése',
	'administration tool desc mass_mailer' => 'Ez egy egyszerű eszköz, amellyel egyszerű szöveges üzenetet küldhet a rendszer valamennyi felhasználójának.',
	'configuration' => 'Beállítások',
	'mail transport mail()' => 'PHP beállításokkal',
	'mail transport smtp' => 'SMTP szerver',
	'secure smtp connection no' => 'Nem',
	'secure smtp connection ssl' => 'Igen, SSL használatával',
	'secure smtp connection tls' => 'Igen, TLS használatával',
	'file storage file system' => 'Fájl rendszer',
	'file storage mysql' => 'Adatbázis (MySQL)',
	
	'config category name general' => 'Általános',
	'config category desc general' => 'Általános Feng Office beállítások.',
	'config category name mailing' => 'Levelezés',
	'config category desc mailing' => 'Ezekkel a beállításokkal adhatja meg, hogyan kezelje az Feng Office a levelezést. Használhatja a php.ini-ben meghatározott beállításokat, vagy megadhatja bármelyik (külső) SMTP szerver elérését',
	'config category name modules' => 'Modulok',
	'config category desc modules' => 'Itt engedélyezheti az Feng Office moduljait. A nem engedélyezéssel csak elrejti a kezelő felületről. Ettől még más felhasználók létrehozhatnak és szerkeszthetnek elemeket benne.',
	'config category name passwords' => 'Jelszavak',
  'config category desc passwords' => 'Ezen beállítások használata a jelszavak kezeléséhez.',
	
	'config option name site_name' => 'A hely neve',
	'config option desc site_name' => 'Ez fog megjelenni a hely neveként a vezérlőpult oldalon',
	'config option name file_storage_adapter' => 'Fájl tárolás',
	'config option desc file_storage_adapter' => 'Válassza ki, hol akarja tárolni a feltöltött dokumentumokat. Figyelem! A tárolás helyének megváltoztatása hozzáférhetetlenné teszi az előzőleg feltöltött állományokat! Mentse le azokat először!',
	'config option name default_project_folders' => 'Alap mappák',
	'config option desc default_project_folders' => 'Ezeket a mappákat hozza létre a rendszer egy projekt létrehozásakor. Minden nevet új sorba kell írni! Az ismétlődő vagy üres sorok figyelmen kívül lesznek hagyva.',
	'config option name theme' => 'Téma',
	'config option desc theme' => 'Témák használatával meg tudja változtatni az Feng Office megjelenését. Frissítenie kell a böngészőben az oldalt a módosítások láthatóvá válásához.',
	'config option name days_on_trash' => 'Napok a kukában',
	'config option desc days_on_trash' => 'Hány nap elteltével törlődjenek automatikusan a kukába dobott elemek. "0" beállítása esetén a kuka tartalma soha nem fog törlődni.',
	
	'config option name checkout_notification_dialog' => 'Lefoglalás figyelmeztető ablak dokumentumoknál',
    'config option desc checkout_notification_dialog' => 'Ha engedélyezett, a rendszer megkérdezi a felhasználót arról, hogy szerkesztésre (lefoglalással), vagy csak olvasásra tölti-e le a dokumentumot.',
  	'config option name time_format_use_24' => '24 órás formátum használata',
  	'config option desc time_format_use_24' => '24 órás formátum használata az alapértelmezett 12 órás formátum helyett',
  	'config option name file_revision_comments_required' => 'Fájl verzió megjegyzés hozzáadása kötelező',
    'config option desc file_revision_comments_required' => 'Ha bekapcsolja, a felhasználóknak új fájl verzió hozzáadásakor kötelező megjegyzést is írniuk.',
 	'config option name show_feed_links' => 'RSS/iCal forrás megjelenítése',
    'config option desc show_feed_links' => 'Ezzel engedélyezheti RSS vagy iCal forrásra mutató hivatkozások használatát a bejelentkezett felhasználók számára, akik feliratkozhatnak ezekre. FIGYELEM: a hivatkozás a belépéshez szükséges adatokat is tartalmazza, ezért pl. ne másolja be ezt a hivatkozást közösségi oldalakra!',

	
	
	'config option name enable_notes_module' => 'Feljegyzés Modul engedélyezése',
	'config option name enable_email_module' => 'Email Modul engedélyezése',
	'config option name enable_contacts_module' => 'Címlista Modul engedélyezése',
	'config option name enable_calendar_module' => 'Naptár Modul engedélyezése',
	'config option name enable_documents_module' => 'Dokumentumok Modul engedélyezése',
	'config option name enable_tasks_module' => 'Feladat Modul engedélyezése',
	'config option name enable_weblinks_module' => 'Webhelyek Modul engedélyezése',
	'config option name enable_time_module' => 'Idő Modul engedélyezése',
	'config option name enable_reporting_module' => 'Jelentés Modul engedélyezése',
	
	'config option name upgrade_check_enabled' => 'Frissítés ellenőrzésének engedélyezése',
	
	'config option desc upgrade_check_enabled' => 'Ha "igen" a beállítás, az Feng Office naponta ellenőrzi az új verziók elérhetőségét',
	'config option name work_day_start_time' => 'A munkanap kezdő időpontja',
	'config option desc work_day_start_time' => 'Annak meghatározása, hány órakor kezdődik a munkanap',
	'config option name use_minified_resources' => 'Tömörített erőforrások használata',
	'config option desc use_minified_resources' => 'Tömörített Javascript és CSS használatával növelheti a rendszer teljesítményét. Újra kell tömörítenie a JS és CSS állományokat, ha módosította azokat, a "http(s)://Feng OfficeWebhelyed/public/tools" használatával.',
	
	  'config option name currency_code' => 'Pénznem',
  	'config option desc currency_code' => 'Pénznem szimbóluma',
    
	
	// EMAIL
	'config option name exchange_compatible' => 'Microsoft Exchange kompatibilis mód',
	'config option desc exchange_compatible' => 'Ha Microsoft Exchange Szervert használ, állítsa ezt az értéket "igen"-re a néhány ismert levelezési probléma elkerülése érdekében.',
	'config option name mail_transport' => 'Email továbbítás',
	'config option desc mail_transport' => 'Beállíthatja a PHP beállításainak használatára, vagy megadhat külső SMTP szervert.',
	'config option name smtp_server' => 'SMTP szerver',
	'config option name smtp_port' => 'SMTP port',
	'config option name smtp_authenticate' => 'SMTP hitelesítés használata',
	'config option name smtp_username' => 'SMTP felhasználói név',
	'config option name smtp_password' => 'SMTP jelszó',
	'config option name smtp_secure_connection' => 'Biztonságos SMTP kapcsolat használata',
	'config option name user_email_fetch_count' => 'Email letöltési korlát',
  'config option desc user_email_fetch_count' => 'Hány levelet töltsön le a rendszer, ha a felhasználó a "Levélfiókok ellenőrzése" gombra kattint. Nagy érték használatakor időtúllépési hibák léphetnek fel. Adjon meg 0-t a korlát kikapcsolásához. Figyelem, ez nem befolyásolja a cron-on keresztüli email letöltést.',
  
	
		// Passwords
  	'config option name min_password_length' => 'Minimális jelszó hossz',
  	'config option desc min_password_length' => 'Minimális  karakterszám a jelszó megadásakor',
  	'config option name password_numbers' => 'Számok a jelszóban',
  	'config option desc password_numbers' => 'A jelszónak minimálisan hány számot kell hogy tartalmaznia',
  	'config option name password_uppercase_characters' => 'Nagybetűk a jelszóban',
  	'config option desc password_uppercase_characters' => 'A jelszónak minimálisan hány nagybetűt kell hogy tartalmaznia',
  	'config option name password_metacharacters' => 'Különleges karakterek a jelszóban',
  	'config option desc password_metacharacters' => 'A jelszónak minimálisan hány különleges írásjelet kell hogy tartalmaznia (pl.: ., $, *)',
  	'config option name password_expiration' => 'Jelszó lejárata (napokban)',
  	'config option desc password_expiration' => 'A jelszó érvényessége napokban (használjon 0 értéket a lejárat kikapcsolásához)',
  	'config option name password_expiration_notification' => 'Értesítés a jelszó lejáratáról (ennyi nappal előtte)',
  	'config option desc password_expiration_notification' => 'Ennyi nappal előre értesítse a felhasználót a jelszó lejáratáról (használjon 0 értéket a kikapcsolásához)',
  	'config option name account_block' => 'Jelszó lejártakor a felhasználó hozzáférésének blokkolása',
  	'config option desc account_block' => 'Jelszó lejártakor a felhasználó hozzáférésének blokkolása (az engedélyezéshez az adminisztrátor szükséges)',
	  'config option name new_password_char_difference' => 'Korábbi jelszó hasonlóságának vizsgálata',
  	'config option desc new_password_char_difference' => 'Az új jelszónak különböznie kell legalább 3 karakterben a legutóbb használt 10 jelszavától',
    'config option name validate_password_history' => 'Korábbival megegyező jelszó vizsgálata',
  	'config option desc validate_password_history' => 'Az új jelszónak különböznie kell a legutóbb használt 10 jelszavától',
  	'config option name checkout_for_editing_online' => 'Automatikus bejelentés',
  	'config option desc checkout_for_editing_online' => 'Amikor a felhasználó online szerkeszt egy dokumentumot, a bejelentést követően egyidőben azt más már nem szerkesztheti.',
  

	'can edit company data' => 'Szerkesztheti a szervezet adatait',
	'can manage security' => 'Biztonsági beállításokat adhat meg',
	'can manage workspaces' => 'Szerkeszthet projekteket',
	'can manage configuration' => 'Szerkesztheti a beállításokat',
	'can manage contacts' => 'Szerkesztheti a címlistát',
 	'can manage reports' => 'Szerkesztheti a jelentéseket',
 	'group users' => 'Csoport tagok',
	
  	
	'user ws config category name dashboard' => 'Vezérlőpult beállítások',
	'user ws config category name task panel' => 'Feladat beállítások',
	'user ws config category name general' => 'Általános',
	'user ws config category name calendar panel' => 'A Naptár beállításai',
 	'user config option name show pending tasks widget' => 'Mutassa a függő feladatok kisalkalmazást',
	'user config option name pending tasks widget assigned to filter' => 'Mutassa a hozzá rendelt feladatokat',
	'user config option name show late tasks and milestones widget' => 'Mutassa a késében lévő feladatok és mérföldkövek kisalkalmazást',
	'user config option name show messages widget' => 'Mutassa a feljegyzések kisalkalmazást',
	'user config option name show comments widget' => 'Mutassa a megjegyzések kisalkalmazást',
	'user config option name show documents widget' => 'Mutassa a dokumentumok kisalkalmazást',
	'user config option name show calendar widget' => 'Mutassa a mini naptár kisalkalmazást',
	'user config option name show charts widget' => 'Mutassa a grafikonok kisalkalmazást',
	'user config option name show emails widget' => 'Mutassa a email üzenetek kisalkalmazást',
 	'user config option name show dashboard info widget' => 'Mutassa a munkaasztal kisalkalmazást',
 	'user config option name show getting started widget' => 'Mutassa a kezdő lépések kisalkalmazást',

	'user config option name localization' => 'Nyelv megadása',
	'user config option desc localization' => 'A feliratok és dátumok a megadott nyelven fognak megjelenni. Frissítse a böngésző lapját!',
	'user config option name initialWorkspace' => 'Kezdő Projekt',
	'user config option desc initialWorkspace' => 'A belépése után ez a projekt lesz kiválasztva, vagy beállíthatja, hogy a legutóbb használt legyen kiválasztva.',
	'user config option name rememberGUIState' => 'Emlékezzen a kezelői felület helyzetére',
	'user config option desc rememberGUIState' => 'Beállíthatja, hogy emlékezzen a kezelői felület beállításaira (panel méretek, becsukott/kinyitott állapotuk, stb). Figyelem! Ez még BÉTA állapotú!',
	'user config option name time_format_use_24' => '24 órás idő megjelenítés',
	'user config option desc time_format_use_24' => 'Ha engedélyezi: \'hh:mm\' formában 00:00-tól 23:59-ig fogja az időt megjeleníteni, ha nem; 1-től 12-ig.',
	'user config option name work_day_start_time' => 'Munkanap kezdete',
	'user config option desc work_day_start_time' => 'Hány órától kezd dolgozni.',
	
	'user config option name show dashboard info widget' => 'Mutassa a projekt leírás kisalkalmazást',

	'user config option name my tasks is default view' => 'Az Önhöz rendelt feladatok az alap beállítás',
	'user config option desc my tasks is default view' => 'Ha nem állítja ezt be, alapból az összes feladatot látni fogja',
	'user config option name show tasks in progress widget' => 'Mutassa a \'Végrehajtás alatt lévő feladatok\' kisalkalmazást',
	'user config option name can notify from quick add' => 'A feladat értesítő legyen bekapcsolva alapból',
	'user config option desc can notify from quick add' => 'Az értesítő lehetővé teszi, hogy értesítést küldjön a felhasználónak a feladat hozzárendelése vagy módosítása esetére',
	
	'user config option name show_tasks_context_help' => 'Feladatokhoz helyérzékeny súgó megjelenítése',
  'user config option desc show_tasks_context_help' => 'Ha engedélyezett, súgó fog megjelenni a feladatok panelen.',
 	'user config option name start_monday' => 'A hét első napja hétfő',
	'user config option desc start_monday' => 'A hét első napja hétfő legyen (az oldal frissítése szükséges az életbe lépéshez)',
  'user config option name show_week_numbers' => 'Hetek száma legyen látható',
	'user config option desc show_week_numbers' => 'Hetek száma legyen látható a heti és a havi nézetekben.',
  
  	'user config option name date_format' => 'Dátum formátum',
  	'user config option desc date_format' => 'Sablon a dátumok megjelenéséhez.',
  	'user config option name descriptive_date_format' => 'Beszédes dátum formátum',
  	'user config option desc descriptive_date_format' => 'Sablon a beszédesebb dátumok megjelenéséhez.',

  	'user config option name show_context_help' => 'Helyérzékeny súgó bekapcsolása',
  	'user config option desc show_context_help' => 'Válassza ki a kívánt beállítást (mindíg, bezárásig, soha).',
  	
	'show context help always' => 'Mindíg',
	'show context help never' => 'Soha',
	'show context help until close' => 'Bezárásig',
  
 
	'backup process desc' => 'A biztonsági mentéssel a teljes rendszer egy tömörített állományba kerül. <br>A mentési állomány létrehozása több percbe is beletelhet, az alábbi lépésekben:<br>1.- Indítsa el a mentési folyamatot,<br>2.- Töltse le a tömörített állományt. <br>3.- A mentést törölheti ezután is, így nem lesz hozzáférhető többé. <br>',
  'backup config warning' => 'FIGYELEM: a beállításai és a tmp mappák nem lesznek elmentve.',
  'start backup' => 'Biztonsági mentés folyamatának elindítása',
	'start backup desc' => 'A mentési folyamat elindítása magába foglalja az előző mentett állomány törlését, és új állomány létrehozását.',
	'download backup' => 'Biztonsági mentés letöltése',
	'download backup desc' => 'A mentés letöltéséhez előbb létre kell hozni egyet!',
	'delete backup' => 'Biztonsági mentés törlése',
	'delete backup desc' => 'Ha törli, nem tudja letölteni! Letöltés után viszont javasolt azt törölni a szerverről!',
	'backup' => 'Biztonsági mentés',
	'backup menu' => 'Biztonsági mentés menü',
	'last backup' => 'Az utolsó biztonsági mentés létrehozásának ideje',
	'no backups' => 'Nincs letölthető biztonsági mentés',
	
	'user config option name always show unread mail in dashboard' => 'Mindig mutassa a Vezérlőpulton a még nem olvasott leveleket',
	'user config option desc always show unread mail in dashboard' => 'Ha a "Nem" van kiválasztva, az aktív projekt üzeneteit láthatja',
	'workspace emails' => 'Projekt levelek',
	'user config option name tasksShowWorkspaces' => 'Projekt megmutatása',
	'user config option name tasksShowTime' => 'Idő megmutatása',
	'user config option name tasksShowDates' => 'Dátum megmutatása',
	'user config option name tasksShowTags' => 'Címkék megmutatása',
	'user config option name tasksGroupBy' => 'Csoport szerint',
	'user config option name tasksOrderBy' => 'Sorrend',
	'user config option name task panel status' => 'Státusz',
	'user config option name task panel filter' => 'Szűrési feltétel',
	'user config option name task panel filter value' => 'Szűrő érték',
	'templates' => 'Sablonok',
	'add template' => 'Sablon hozzáadása',
	'confirm delete template' => 'Biztosan törli ezt a sablont?',
	'no templates' => 'Nincsenek sablonok',
	'template name required' => 'A sablon nevének megadása kötelező',
	'can manage templates' => 'Kezelhet sablonokat',
	'new template' => 'Új sablon létrehozása',
	'edit template' => 'Sablon szerkesztése',
	'template dnx' => 'A sablon nem létezik',
	'success edit template' => 'A sablon sikeresen módosítva',
	'log add cotemplates' => '{0} hozzáadva',
	'log edit cotemplates' => '{0} módosítva',
	'success delete template' => 'A sablon sikeresen törölve',
	'error delete template' => 'Hiba a sablon törlése során',
	'objects' => 'Elemek',
	'objects in template' => 'Elemek a sablonban',
	'no objects in template' => 'Nincsenek elemek a sablonban',
	'add to a template' => 'Hozzáadás sablonhoz',
	'add an object to template' => 'Elem hozzáadása ehhez a sablonhoz',
	'you are adding object to template' => '{1} {0} hozzáadása sablonhoz. Válasszon a lenti sablonok közül, vagy hozzon létre egy újat a(z) {0} számára.',
	'success add object to template' => 'Az elem sikeresen hozzáadva a sablonhoz',
	'object type not supported' => 'Ezt az elemet nem támogatja a sablon',
	'assign template to workspace' => 'A sablon hozzárendelése projekthez',
	'cron events' => 'Ismétlődő események',
	'about cron events' => 'Az ismétlődő eseményekről...',
	'cron events info' => 'Az ismétlődő események lehetővé teszik, hogy az Feng Office a rendszerbe történő bejelentkezés nélkül is végrehajtson feladatokat. Az engedélyezéséhez meg kell határoznia egy ismétlődő feladatot a "cron.php" nevű fájlban, ami az Feng Office telepítés gyökérkönyvtárában található. A cron futási rendszeressége (milyen időközönként futtatja le a rendszer) meghatározza, milyen időközöket állíthat be; pl. ha a cron 5 percenként fut, hiába állítja be, hogy 1 percenként ellenőrizze új Feng Office verzió meglétét: akkor is csak 5 percenként tudja elvégezni. A cron beállításokról kérdezze meg a rendszere adminisztrátorát.',
	'cron event name check_mail' => 'Email ellenőrzése',
	'cron event desc check_mail' => 'Ez az ismétlődő esemény a rendszerben beállított valamennyi email postafiókot ellenőrzi.',
	'cron event name purge_trash' => 'Kuka ürítése',
	'cron event desc purge_trash' => 'Ez az ismétlődő esemény kitöröl minden a \'Nap a kukában\' beállításnál régebben a kukába dobott elemet.',
	'cron event name send_reminders' => 'Emlékeztető küldése',
	'cron event desc send_reminders' => 'Ez az ismétlődő esemény emlékeztetőket küld.',
	'cron event name check_upgrade' => 'Rendszer frissítés ellenőrzése',
	'cron event desc check_upgrade' => 'Ez az ismétlődő esemény ellenőrzi új Feng Office verzió elérhetőségét',
	'cron event name create_backup' => 'Mentés készítése',
	'cron event desc create_backup' => 'Mentést készít, amit letölthet az adminisztrációs lapról.',
 	'cron event name send_notifications_through_cron' => 'Emlékeztetők küldése a cron segítségével',
 	'cron event desc send_notifications_through_cron' => 'Ha ez engedélyezett, az email emlékeztetők a cron beállításoknak megfelelően küldődnek el, és nem  akkor, amikor az Feng Office létrehozza őket.',
	'cron event name backup' => 'Biztonsági mentés',
  'cron event desc backup' => 'Ha ezt engedélyezi, az Feng Office rendszeréről adott rendszerességgel biztonsági mentés fog készülni. A telepített rendszer adminisztrátora az adminisztrátori oldalon keresztül letöltheti ezeket. Az Feng Office mentések zip állományok, amik a \'tmp/backup\' könyvtárba kerülnek',
 	'next execution' => 'Következő végrehajtása',
	'delay between executions' => 'Várakozás a végrehajtások között',
	'enabled' => 'Megengedve',
	'no cron events to display' => 'Nincs ismétlődő esemény',
	'success update cron events' => 'Az ismétlődő események frissítése sikeres',
	
	'manual upgrade' => 'Kézi frissítés',
	'manual upgrade desc' => 'az Feng Office kézi frissítése is elvégezhető az új verzió letöltésével. Bontsa ki a letöltött állomány a telepítés gyökerébe, majd állítsa a böngészőjét a <a href="public/upgrade">\'public/upgrade\'</a> címre a frissítés végrehajtásához',
	'automatic upgrade' => 'Automatikus frissítés',
	'automatic upgrade desc' => 'Az automatikus frissítés automatikusan letölti és kibontja a friss verziót és lefuttatja a szükséges folyamatot. A web szervernek hozzáférésének kell lennie az összes könyvtárhoz!',
	'start automatic upgrade' => 'Automatikus frissítés megkezdése',
 	
 	'select object type' => 'Válasszon objektum típust',
  'select one' => 'Válasszon egyet',
  'email type' => 'Email',
  'custom properties updated' => 'Egyedi tulajdonságok frissítve',
 	'user config option name noOfTasks' => 'Adja meg a megjelenő feladatok számát',

); ?>