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
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Strings for component 'filter_simplequestion', language 'en'
 *
 * @package    filter
 * @subpackage simplequestion
 * @copyright  2017 Richard Jones https://richardnz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['filtername'] = 'Insert question';
$string['link_text'] = 'Click for question';
$string['answer_question'] = 'Submit answer';
$string['previewquestion'] = 'Question: {$a}';
$string['clean_up_usages'] = 'Clean old question usages for Insert question';

// Settings strings
$string['settings_heading'] = 'Insert Question settings';
$string['settings_desc'] = 'Change the settings for this filter.';
$string['settings_start_tag'] = 'Start tag';
$string['settings_end_tag'] = 'End tag';
$string['settings_start_tag_desc'] = 'Tag that marks the start of the question';
$string['settings_end_tag_desc'] = 'Tag that marks the end of the question';
$string['settings_key'] = 'Encoding key (alphabetical only)';
$string['settings_key_desc'] = 'Secret key to encode the question id (alphabetical characters only)';
$string['settings_linklimit'] = 'Link lengths';
$string['settings_linklimit_desc'] = 'Maximum length of the text string that links to a question';
/*
$string['settings_displaymode'] = 'Display mode';
$string['settings_displaymode_desc'] = 'Show in popup? If unchecked question will be embedded in sliding panel.
                        <br /> <br />If embedded, select size of iframe below.';
*/
// size of iframe
$string['settings_height'] = 'iFrame height';
$string['settings_height_desc'] = 'Enter whole number (pixels)';
$string['settings_width'] = 'iFrame width';
$string['settings_width_desc'] = 'Enter whole number (pixels)';

// errors
$string['friendlymessage'] = 'Programming error: could not review question';
$string['questionidmismatch'] = 'Programming error: Question mismatch';
$string['postsubmiterror'] = 'Programming error: Could not review question';
$string['pop_param_error'] = 'Please specify "popup" or "embed" within your link';
$string['param_number_error'] = 'Bad number of parameters';
$string['link_text_length'] = 'Link text too long';
$string['link_text_error'] = 'Invalid characters in link';
$string['link_number_error'] = 'Please check your question id';
$string['unknown_error'] = 'Unknown error - bad format?';

//Question form controls
$string['click_link'] = "Click the question link again to close frame";
$string['use_close'] = "Close the window to return to your course";