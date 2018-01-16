<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for alice details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Alice settings.
 *
 * Each setting that is defined in the parent theme Clean should be
 * defined here too, and use the exact same config name. The reason
 * is that theme_alice does not define any layout files to re-use the
 * ones from theme_clean. But as those layout files use the function
 * {@link theme_clean_get_html_for_settings} that belong to Clean,
 * we have to make sure it works as expected by having the same settings
 * in our theme.
 *
 * @see        theme_clean_get_html_for_settings
 * @package    theme_alice
 * @copyright  2014 Frédéric Massart
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // @textColor setting.
    $name = 'theme_alice/textcolor';
    $title = get_string('textcolor', 'theme_alice');
    $description = get_string('textcolor_desc', 'theme_alice');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @linkColor setting.
    $name = 'theme_alice/linkcolor';
    $title = get_string('linkcolor', 'theme_alice');
    $description = get_string('linkcolor_desc', 'theme_alice');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @bodyBackground setting.
    $name = 'theme_alice/bodybackground';
    $title = get_string('bodybackground', 'theme_alice');
    $description = get_string('bodybackground_desc', 'theme_alice');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background image setting.
    $name = 'theme_alice/backgroundimage';
    $title = get_string('backgroundimage', 'theme_alice');
    $description = get_string('backgroundimage_desc', 'theme_alice');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background repeat setting.
    $name = 'theme_alice/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_alice');
    $description = get_string('backgroundrepeat_desc', 'theme_alice');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_alice'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_alice'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_alice'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_alice'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background position setting.
    $name = 'theme_alice/backgroundposition';
    $title = get_string('backgroundposition', 'theme_alice');
    $description = get_string('backgroundposition_desc', 'theme_alice');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_alice'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_alice'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_alice'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_alice'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_alice'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_alice'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_alice'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_alice'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_alice'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background fixed setting.
    $name = 'theme_alice/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_alice');
    $description = get_string('backgroundfixed_desc', 'theme_alice');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main content background color.
    $name = 'theme_alice/contentbackground';
    $title = get_string('contentbackground', 'theme_alice');
    $description = get_string('contentbackground_desc', 'theme_alice');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Secondary background color.
    $name = 'theme_alice/secondarybackground';
    $title = get_string('secondarybackground', 'theme_alice');
    $description = get_string('secondarybackground_desc', 'theme_alice');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Invert Navbar to dark background.
    $name = 'theme_alice/invert';
    $title = get_string('invert', 'theme_alice');
    $description = get_string('invertdesc', 'theme_alice');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_alice/logo';
    $title = get_string('logo','theme_alice');
    $description = get_string('logodesc', 'theme_alice');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Small logo file setting.
    $name = 'theme_alice/smalllogo';
    $title = get_string('smalllogo', 'theme_alice');
    $description = get_string('smalllogodesc', 'theme_alice');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'smalllogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Show site name along with small logo.
    $name = 'theme_alice/sitename';
    $title = get_string('sitename', 'theme_alice');
    $description = get_string('sitenamedesc', 'theme_alice');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_alice/customcss';
    $title = get_string('customcss', 'theme_alice');
    $description = get_string('customcssdesc', 'theme_alice');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_alice/footnote';
    $title = get_string('footnote', 'theme_alice');
    $description = get_string('footnotedesc', 'theme_alice');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer colour setting
    $name = 'theme_alice/footertextcolor';
    $title = get_string('footertextcolor', 'theme_alice');
    $description = get_string('footertextcolor_desc', 'theme_alice');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // h2textcolour setting
    $name = 'theme_alice/h2textcolor';
    $title = get_string('h2textcolor', 'theme_alice');
    $description = get_string('h2textcolor_desc', 'theme_alice');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    //Font-size
    $name = 'theme_alice/fontsize';
    $title = get_string('fontsize', 'theme_alice');
    $description = get_string('fontsize_desc', 'theme_alice');
    $default = '16px';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // coolfile image setting.
    $name = 'theme_alice/coolfile';
    $title = get_string('coolfile', 'theme_alice');
    $description = get_string('coolfile_desc', 'theme_alice');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

}
