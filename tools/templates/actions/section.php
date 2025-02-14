<?php

/*
section.php

2017 Florian Schmitt

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// Get the action's parameters :

// image's background color
$bgcolor = $this->GetParameter('bgcolor');

// image's filename
$file = $this->GetParameter('file');
$backgroundimg =true;
if (empty($file) && empty($bgcolor)) {
    $bgcolor = false;
    $backgroundimg = false;
}

if (!empty($file)) {
    // test of image extension
    $supported_image_extensions = array('svg', 'gif', 'jpg', 'jpeg', 'png');
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    // Using strtolower to overcome case sensitive
    if (!in_array($ext, $supported_image_extensions)) {
        echo '<div class="alert alert-danger"><strong>' . _t('ATTACH_ACTION_BACKGROUNDIMAGE') . '</strong> : '
              . _t('ATTACH_PARAM_FILE_MUST_BE_IMAGE') . '.</div>' . "\n";
        return;
    }
    // image size
    $height = $this->GetParameter('height');
    $width = $this->GetParameter('width');
    if (empty($width)) {
        $width = 1920;
    }

    if (!class_exists('attach')) {
        include('tools/attach/libs/attach.lib.php');
    }
    $att = new attach($this);

    //recuperation des parametres necessaires
    $att->file = $file;
    $att->desc = 'background image ' . $file;
    $att->height = $height;
    $att->width = $width;
    $fullFilename = $att->GetFullFilename();
}

// container class
$class = $this->GetParameter('class');

// container id
$id = $this->GetParameter('id');

// container data attributes
$data = getDataParameter();

$pagetag = $this->GetPageTag();
if (!isset($GLOBALS['check_' . $pagetag]['section'])) {
    $GLOBALS['check_' . $pagetag]['section'] = check_graphical_elements('section', $pagetag, $this->page['body']);
}
if ($GLOBALS['check_' . $pagetag]['section']) {

    // specify the role to be checked ( *, +, %, @admins)
    $role = $this->GetParameter('visibility');
    $role = empty($role) ? $role : str_replace("\\n", "\n", $role);
    $visible = !$role || ($GLOBALS['wiki']->CheckACL($role, null, false));
    
    echo '<!-- start of section -->
    <section' . (!empty($id) ? ' id="'.$id .'"' : '') . ' class="'. ($backgroundimg ? 'background-image' : '') . ($visible ? '' : ' remove-this-div-on-page-load ') . (!empty($class) ? ' ' . $class : '') . '" style="'
        .(!empty($bgcolor) ? 'background-color:' . $bgcolor .'; ' : '')
        .(!empty($height) ? 'height:' . $height . 'px; ' : '')
        .(isset($fullFilename) ? 'background-image:url(' . $fullFilename . ');' : '').'"';
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            echo ' data-'.$key.'="'.$value.'"';
        }
    }
    echo '>' . "\n";
    
    $nocontainer = $this->GetParameter('nocontainer');
    if (empty($nocontainer)) {
        echo '<div class="container">' . "\n";
    } else {
        echo '<div>';
    }
    //test d'existance du fichier
    if (isset($fullFilename) and (!file_exists($fullFilename) or $fullFilename == '')) {
        $att->showFileNotExits();
        //return;
    }
} else {
    echo '<div class="alert alert-danger"><strong>' . _t('TEMPLATE_ACTION_SECTION') . '</strong> : '
        . _t('TEMPLATE_ELEM_SECTION_NOT_CLOSED') . '.</div>' . "\n";
    return;
}
