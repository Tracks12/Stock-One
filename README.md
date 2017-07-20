# Stock-One

> (c) 2017 - Copyright Arkitek Inc. Tous droits sont réservés.<br />
> La reproduction ou l'utilisation de ce projet à des fins lucratives autorise l'entreprise à engager des poursuites judicières pour vol de produit.

# Structure du dossier:

<pre>
<a href="../../">Stock-One-master ./</a> <- racine du site
|   <a href="../../blob/master/.htaccess">.htaccess</a>
|   <a href="../../blob/master/admin.php">admin.php</a>
|   <a href="../../blob/master/client.php">client.php</a>
|   <a href="../../blob/master/compteuser.php">compteuser.php</a>
|   <a href="../../blob/master/index.html">index.html</a>
|   <a href="../../blob/master/maintenance.html">maintenance.html</a>
|   <a href="../../blob/master/README.md">README.md</a>
|   <a href="../../blob/master/stock-one.sql">stock-one.sql</a>
|   
+---<a href="../../tree/master/css/">css/</a>
|   |   <a href="../../blob/master/css/.htaccess">.htaccess</a>
|   |   <a href="../../blob/master/css/irc.css">irc.css</a>
|   |   <a href="../../blob/master/css/other.css">other.css</a>
|   |   <a href="../../blob/master/css/scroll.css">scroll.css</a>
|   |   <a href="../../blob/master/css/style.css">style.css</a>
|   |   <a href="../../blob/master/css/system.css">system.css</a>
|   |   
|   \---<a href="../../tree/master/css/reverse/">reverse/</a>
|           <a href="../../blob/master/css/reverse/other.css">other.css</a>
|           
+---<a href="../../tree/master/files/">files/</a> <- dossier de fichier utilisateur
|   |
|   \---<a href="../../tree/master/css/files/admin/">admin/</a>
|          
+---<a href="../../tree/master/js/">js/</a>
|       <a href="../../blob/master/js/.htaccess">.htaccess</a>
|       <a href="../../blob/master/js/annimation.js">annimation.js</a>
|       <a href="../../blob/master/js/irc.js">irc.js</a>
|       <a href="../../blob/master/js/other.js">other.js</a>
|       <a href="../../blob/master/js/script.js">script.js</a>
|       <a href="../../blob/master/js/three.min.js">three.min.js</a>
|       
+---<a href="../../tree/master/php/">php/</a>
|   |   <a href="../../blob/master/php/action.php">action.php</a>
|   |   <a href="../../blob/master/php/annimation.html">annimation.html</a>
|   |   <a href="../../blob/master/php/bdd_access.php">bdd_access.php</a>
|   |   <a href="../../blob/master/php/disconnect.php">disconnect.php</a>
|   |   <a href="../../blob/master/php/filelist.php">filelist.php</a>
|   |   <a href="../../blob/master/php/IRC.php">IRC.php</a>
|   |   <a href="../../blob/master/php/module.php">module.php</a>
|   |   <a href="../../blob/master/php/msg.php">msg.php</a>
|   |   <a href="../../blob/master/php/other.php">other.php</a>
|   |   <a href="../../blob/master/php/session.php">session.php</a>
|   |   <a href="../../blob/master/php/theme.php">theme.php</a>
|   |   <a href="../../blob/master/php/validate.php">validate.php</a>
|   |   <a href="../../blob/master/php/verifmcompte.php">verifmcompte.php</a>
|   |   <a href="../../blob/master/php/vupload.php">vupload.php</a>
|   |
|   \---<a href="../../tree/master/php/historiques-IRC/">historiques-IRC/</a> <- dossier d'historique de convesation du Tchat-IRC
|           <a href="../../blob/master/php/historiques-IRC/history-admin.htm">history-admin.htm</a>
|           <a href="../../blob/master/php/historiques-IRC/history-primary.htm">history-primary.htm</a>
|           
+---<a href="../../tree/master/pics/">pics/</a>
|   |   <a href="../../blob/master/pics/.htaccess">.htaccess</a>
|   |   <a href="../../blob/master/pics/alert.png">alert.png</a>
|   |   <a href="../../blob/master/pics/icon.png">icon.png</a>
|   |   <a href="../../blob/master/pics/loader.gif">loader.gif</a>
|   |   <a href="../../blob/master/pics/lock-file.png">lock-file.png</a>
|   |   <a href="../../blob/master/pics/logo.png">logo.png</a>
|   |   <a href="../../blob/master/pics/logo_older.png">logo_older.png</a>
|   |   <a href="../../blob/master/pics/trash.png">trash.png</a>
|   |   
|   +---<a href="../../tree/master/pics/default/">default/</a>
|   |       <a href="../../blob/master/pics/default/console.png">console.png</a>
|   |       <a href="../../blob/master/pics/default/copy.png">copy.png</a>
|   |       <a href="../../blob/master/pics/default/download.png">download.png</a>
|   |       <a href="../../blob/master/pics/default/folder.png">folder.png</a>
|   |       <a href="../../blob/master/pics/default/gallery.png">gallery.png</a>
|   |       <a href="../../blob/master/pics/default/info.png">info.png</a>
|   |       <a href="../../blob/master/pics/default/monitor.png">monitor.png</a>
|   |       <a href="../../blob/master/pics/default/movie.png">movie.png</a>
|   |       <a href="../../blob/master/pics/default/music.png">music.png</a>
|   |       <a href="../../blob/master/pics/default/rename.png">rename.png</a>
|   |       <a href="../../blob/master/pics/default/share.png">share.png</a>
|   |       <a href="../../blob/master/pics/default/text-file.png">text-file.png</a>
|   |       <a href="../../blob/master/pics/default/user.png">user.png</a>
|   |       
|   \---<a href="../../tree/master/pics/reverse/">reverse/</a>
|           <a href="../../blob/master/pics/reverse/console.png">console.png</a>
|           <a href="../../blob/master/pics/reverse/copy.png">copy.png</a>
|           <a href="../../blob/master/pics/reverse/download.png">download.png</a>
|           <a href="../../blob/master/pics/reverse/folder.png">folder.png</a>
|           <a href="../../blob/master/pics/reverse/gallery.png">gallery.png</a>
|           <a href="../../blob/master/pics/reverse/info.png">info.png</a>
|           <a href="../../blob/master/pics/reverse/monitor.png">monitor.png</a>
|           <a href="../../blob/master/pics/reverse/movie.png">movie.png</a>
|           <a href="../../blob/master/pics/reverse/music.png">music.png</a>
|           <a href="../../blob/master/pics/reverse/rename.png">rename.png</a>
|           <a href="../../blob/master/pics/reverse/share.png">share.png</a>
|           <a href="../../blob/master/pics/reverse/text-file.png">text-file.png</a>
|           <a href="../../blob/master/pics/reverse/user.png">user.png</a>
|           
+---<!--<a href="../../tree/master/share/">-->share/<!--</a>--> <- dossier de partage de fichier utilisateur
|
\---<!--<a href="../../tree/master/system/">-->system/<!--</a>--> <- dossier système de gestion serveur à distance
        <!--<a href="../../blob/master/system/___init___.py">-->___init___.py<!--</a>-->
        <!--<a href="../../blob/master/system/module.py">-->module.py<!--</a>-->
        <!--<a href="../../blob/master/system/system.php">-->system.php<!--</a>-->
</pre>

# Essaie gratuit en ligne:

> Version d'essaie en ligne à cette adresse: <a href="http://betawallahso.altervista.org/#" target="_blank">http://betawallahso.altervista.org/#</a>

# Téléchargement:

> Lien de téléchargement du site: <a href="https://mega.nz/#!ftkATDCD!jHu1pYQd14-Faj-CSGsOztz4RHNyNPWxHbcwxwjeDeY" target="_blank">ICI</a>
