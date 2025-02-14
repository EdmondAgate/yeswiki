<?php

return [

    // libs/attach.lib.php
    'ATTACH_ACTION_ATTACH' => 'Actie {{Attach ...}}',
    'ATTACH_PARAM_DESC_REQUIRED' => 'parameter "desc" verplicht voor een afbeelding',
    'ATTACH_PARAM_HEIGHT_NOT_NUMERIC' => 'de parameter "height", in pixels, mag enkel uit gehele cijfers bestaan',
    'ATTACH_PARAM_WIDTH_NOT_NUMERIC' => 'de parameter "width", in pixels, mag enkel uit gehele cijfers bestaan',
    'ATTACH_UPLOAD_FORM_FOR_FILE' => 'Verzendingsformulier voor bestand',
    'ATTACH_BACK_TO_PAGE' => 'Terug naar de pagina',
    'NO_RIGHT_TO_WRITE_IN_THIS_PAGE' => 'U hebt geen schrijftoelating voor deze pagina',
    'INVALID_REQUEST_METHOD' => 'Ongeldige zoekmethode',
    'ERROR_MOVING_TEMPORARY_FILE' => 'Fout tijdens het verplaatsen van het tijdelijke bestand',
    'ERROR_UPLOAD_MAX_FILESIZE' => 'Het geüploade bestand overschrijdt de maximale grootte van upload_max_filesize, ingesteld in de php.ini.',
    'ERROR_MAX_FILE_SIZE' => 'Het geüploade bestand overschrijdt de grootte van MAX_FILE_SIZE ingesteld in het HTML-formulier.',
    'ERROR_PARTIAL_UPLOAD' => 'Het bestand werd slechts deels gewijzigd.',
    'ERROR_NO_FILE_UPLOADED' => 'Er werd geen enkel bestand geüpload.',
    // 'ERROR_NOT_AUTHORIZED_EXTENSION' => 'Le fichier n\'a pas une extension autorisée, voici celles que la configuration autorise : ',
    // 'ATTACH_ACTION_FULLIMAGELINK_TEXT' => "Ajouter un lien pour afficher l'image seule en entier",

    // 'ATTACH_FILE_MANAGEMENT' => 'Gestion des fichiers',
    // 'ATTACH_TRASH' => 'Corbeille',
    // 'ATTACH_NO_ATTACHED_FILES' => 'Pas de fichiers attachés à la page {tag} pour l\'instant.',
    // 'ATTACH_FILENAME' => 'Nom du fichier',
    // 'ATTACH_SIZE' => 'Taille',
    // 'ATTACH_DATE_OF_MODIFICATION' => 'Date de modification',
    // 'ATTACH_RESTORE' => 'Restaurer',
    // 'ATTACH_REAL_FILENAME' => 'Nom réel du fichier : {file}',
    // 'ATTACH_DELETED_ON' => ' - Supprimé le : {date}',
    // 'ATTACH_EMPTY_TRASH' => 'Vider la corbeille',
    // 'ATTACH_EMPTY_TRASH_NOTICE' => 'les fichiers effacés à partir de la corbeille le seront définitivement.',
    // 'ATTACH_FILE_MANAGEMENT_TITLE' => 'Gestion des fichiers attachés à la page {tag}',
    // 'ATTACH_FILE_MANAGEMENT_WARNING' => 'Les fichiers effac&eacute;s sur cette page le sont d&eacute;finitivement',
    // 'ATTACH_PAGE_REVISION' => 'Version de la page',
    // 'ATTACH_FILE_REVISION' => 'Version du fichier',
    // 'ATTACH_DELETION' => 'Suppression',

    // actions/filemanager.php
    'ATTACH_NO_RIGHTS_TO_ACCESS_FILEMANAGER' => 'U moet een schrijftoelating hebben om de bestanden in bijlage als beheerder te openen',
    // 'FILEMANAGER_ACTION_NEED_ACCESS' => 'Seul le propriétaire de cette page peut accéder au gestionnaire des fichiers attaché',

    // actions/backgroundimage.php
    // 'ATTACH_ACTION_BACKGROUNDIMAGE' => 'Action {{backgroundimage ...}}',
    // 'ATTACH_PARAM_FILE_OR_BGCOLOR_NOT_FOUND' => 'il faut indiquer soit une image avec le paramètre "file" ou une couleur de fond avec le paramètre "bgcolor"',

    // actions/player.php
    'ATTACH_ACTION_PLAYER' => 'Actie {{player ...}}',
    'ATTACH_DOWNLOAD_THE_FILE' => 'Het bestand downloaden',
    'ATTACH_URL_NOT_VALID' => 'De URL is ongeldig of kan niet worden geopend',
    'ATTACH_PARAM_URL_REQUIRED' => 'parameter "URL" verplicht',
    'ATTACH_PLAYER_CAN_ONLY_OPEN_FILES_LIKE' => 'de speler kan enkel bestanden in de formaten mp3, flv en mm openen, en uw URL',
    'ATTACH_NOT_LINKED_TO_GOOD_FILE_EXTENSION' => 'verwijst niet naar deze bestandstypes',

    // actions/pointimage.php
    'ATTACH_ACTION_POINTIMAGE' => 'Actie {{pointimage ...}}',
    'ATTACH_PARAM_FILE_NOT_FOUND' => 'parameter "file" verplicht',
    'ATTACH_PARAM_FILE_MUST_BE_IMAGE' => 'de parameter "file" moet een afbeelding zijn (gif, jpg, jpeg, png)',
    'ATTACH_DEFAULT_MARKER' => 'Standaard punt',
    'ATTACH_ADD_MARKER' => 'Een punt toevoegen',
    'ATTACH_TITLE' => 'Titel',
    'ATTACH_DESCRIPTION' => 'Beschrijving',
    'ATTACH_CANCEL' => 'Annuleren',
    'ATTACH_SAVE' => 'Opslaan',
    
    // actions/video.php
    'ATTACH_ACTION_VIDEO_PARAM_ERROR' => 'De actie video moet worden aangeroepen met de parameters «id» en «serveur». Voor «serveur» zijn alleen waarden «vimeo» of «youtube» of «peertube» toegestaan.',
    
    // actions/pdf.php
    'ATTACH_ACTION_PDF_PARAM_URL_ERROR' => 'De actie pdf moet worden aangeroepen met parameter «url» en de opgegeven url moet op dezelfde host staan als de wiki (bijvoorbeeld \' xxx.yyy.com \'), hetzelfde schema (bijvoorbeeld \' https \') en dezelfde poort indien opgegeven (bijvoorbeeld \'8080 \'). ',
    // 'ATTACH_ACTION_DISPLAY_PDF_TEXT' => 'Afficher le pdf dans la page :',
    // 'ATTACH_ACTION_DISPLAY_PDF_LINK_TEXT' => 'sous forme de lien',
    // 'ATTACH_ACTION_DISPLAY_PDF_INCLUDED_TEXT' => 'directement inclus dans la page',


    // handler edit
    'ACTIVATE_JS_TO_UPLOAD_FILES' => 'JavaScript activeren om bestanden te uploaden',
    'UPLOAD_A_FILE' => 'Een bestand toevoegen/invoegen',
    'UPLOAD_A_FILE_SHORT' => 'Bestand',
    'UPLOAD_FILE' => 'Het bestand uploaden',
    'CANCEL_THIS_UPLOAD' => 'Deze upload annuleren',
    'INSERT' => 'Invoegen',
    'DOWNLOAD_LINK_TEXT' => 'Tekst van downloadkoppeling',
    'IMAGE_ALIGN' => 'Uitlijning van de afbeelding',
    'IMAGE_SIZE' => 'Grootte van de afbeelding',
    'THUMBNAIL' => 'Miniatuur',
    'MEDIUM' => 'Gemiddeld',
    'BIG' => 'Groot',
    'ORIGINAL_SIZE' => 'Originele grootte',
    'CAPTION' => 'Tekst van het bijschrift',
    'SEE_THE_ADVANCED_PARAMETERS' => 'Zie geavanceerde parameters',
    'ADVANCED_PARAMETERS' => 'Geavanceerde parameters',
    'ASSOCIATED_LINK' => 'Aanverwante koppeling',
    'GRAPHICAL_EFFECTS' => 'Grafische effecten',
    'WHITE_BORDER' => 'Witte rand',
    'DROP_SHADOW' => 'Schaduw',
    'ZOOM_HOVER' => 'Zoomen bij muis-over',
    'ALT_INFOS' => 'Deze tekst zal worden weergegeven op de plaats van de afbeelding wanneer deze onvindbaar is op de server.',
    'ALTERNATIVE_TEXT' => 'Alternatieve tekst',
    // 'NONE' => 'Texte en dessous',
    'LEFT' => 'Links',
    'CENTER' => 'Midden',
    'RIGHT' => 'Rechts',
    'FAILED' => 'mislukt',

    // handler ajaxupload
    // 'ATTACH_HANDLER_AJAXUPLOAD_FOLDER_NOT_READABLE' => 'Le dossier de téléchargement n\'est pas accessible en écriture.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_NO_FILE' => 'Pas de fichiers envoyés.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_EMPTY_FILE' => 'Le fichier est vide.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_FILE_TOO_LARGE' => 'Le fichier est trop large.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_AUTHORIZED_EXT' => 'Le fichier n\'a pas une extension autorisée, voici les autorisées : {ext}.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_ERROR' => 'Impossible de sauver le fichier. L\'upload a été annulé ou le serveur a planté...',

    // edit config action
    // 'EDIT_CONFIG_HINT_ATTACH-VIDEO-CONFIG[DEFAULT_VIDEO_SERVICE]' => 'Service de vidéo par défaut (peertube, youtube ou vimeo)',
    // 'EDIT_CONFIG_HINT_ATTACH-VIDEO-CONFIG[DEFAULT_PEERTUBE_INSTANCE]' => 'Adresse du serveur peertube par défaut',
    // 'EDIT_CONFIG_GROUP_ATTACH' => 'Insertion de médias (images, vidéos)',
];
