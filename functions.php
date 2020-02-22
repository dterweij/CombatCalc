<?php
// Used functions


/**
 * Get the hash of the current git HEAD
 * @param string $branch The git branch to check
 * @return mixed Either the hash or a boolean false
 */
function get_current_git_commit($branch = 'master')
{
    if ($hash = file_get_contents(sprintf('.git/refs/heads/%s', $branch))) {
        return trim($hash);
    } else {
        return false;
    }
}

/**
 * Check if running GIT
 * @param none
 * @return mixed true or false
 */
function isGit()
{
    if (file_exists('.git')) {
        return true;
    } else {
        return false;
    }
}

/**
 * program version
 * @param none
 * @return string
 */
function pVersion()
{

    $versionadd = "";
    if (isGit()) {
        $versionadd = "-beta";
    }
    return "0.0.1" . $versionadd;

}

/**
 * @param $tablename
 */
function checkDatabase($tablename)
{
    global $db;

    $check = $db->query('SELECT * FROM ' . $tablename);
    if (!$check->numRows()) {
        echo '<div class="alert alert-info alert-dismissible">';
        echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo '<strong>Info</strong> ' . $tablename . ' is not found in the database';
        echo '</div>';
    }

}